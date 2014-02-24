<?php            
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

class ldVault
{
    public $binaryCode, $itemSize, $dbVersion, $account, $codeGroup, $slotNumbers;
    public function __construct($account) 
    {
        try
        {
            global $ldMssql;
            $this->clearVars();
            $checkVault = $ldMssql->query("SELECT [DbVersion] FROM [".DATABASE_ACCOUNTS."].[dbo].[warehouse] WHERE [AccountId] = '".$account."'");
            if(mssql_num_rows($checkVault) == 0) 
                throw new Exception("<script> alert('Essa conta não possui baú.'); location = '?page=paneluser'; </script>");
            $dbVersion = mssql_fetch_object($checkVault);
            
            if(is_numeric($dbVersion->DbVersion) == false)
                throw new Exception("Vault class error: dbVersion must be numeric.");
            if($dbVersion < 1 || $dbVersion->DbVersion > 3)
                throw new Exception("Vault class error: dbVersion invalid.");
            $this->dbVersion = $dbVersion->DbVersion;                               
            $this->account = $account;
            
            if($this->dbVersion == 3)
            {
                $getLenghts = $ldMssql->query("USE [".DATABASE_ACCOUNTS."]; SELECT [length] FROM [syscolumns] WHERE OBJECT_NAME([id]) = 'warehouse' AND [name] = 'Items'; USE [".DATABASE."];");
                $getLenghts = mssql_fetch_object($getLenghts);
                $this->slotNumbers = ($getLenghts->length * 2) / 32;
            }
        } 
        catch ( Exception $msg )
        {
            exit($msg->getMessage());
        }
    } 
    
    private function clearVars()
    {
        $this->binaryCode = NULL;
        $this->itemSize = NULL;
        $this->dbVersion = NULL;
        $this->account = NULL;
        $this->codeGroup = array();
    }
    
    public function getVault()
    {
        global $ldMssql;
        try
        {
            switch($this->dbVersion)
            {
                case 1: case 2:
                    $this->itemSize = 10*120;
                    break;
                case 3:
                    $this->itemSize = 16*$this->slotNumbers;
                    break;   
            }
            //$getVault = $ldMssql->query("DECLARE @BINARYITEMS VARBINARY({$this->itemSize}); SELECT @BINARYITEMS = [Items] FROM [".DATABASE_ACCOUNTS."].[dbo].[warehouse] WHERE [AccountID] = '{$this->account}'; PRINT @BINARYITEMS;");
            //$this->binaryCode = substr(mssql_get_last_message($getVault),2);
            
            $getVault = $ldMssql->query("SELECT CONVERT(TEXT, CONVERT(VARCHAR(".$this->itemSize."), Items)) [Items] FROM [".DATABASE_ACCOUNTS."].[dbo].[warehouse] WHERE [AccountID] = '{$this->account}';");
            $getVault = mssql_fetch_object($getVault);
            $this->binaryCode = strtoupper(bin2hex($getVault->Items));              
        } 
        catch ( Exception $msg )
        {
            exit("Vault error: ". $msg->getMessage());
        }
    }
    public function cutCode()
    {
        try
        {
            switch($this->dbVersion)
            {
                case 1: case 2:
                    if(strlen($this->binaryCode) <> 10*120*2)
                        throw new Exception("Invalid vault size");
                    $codeGroup = str_split($this->binaryCode, 20);
                    break;
                case 3:                       
                    if(strlen($this->binaryCode) <> 16*$this->slotNumbers*2)
                        throw new Exception("Invalid vault size");
                    $codeGroup = str_split($this->binaryCode, 32);
                    break;   
            }
            foreach($codeGroup as $slot => $code)
            {
                ldItemParse::parseHexItem($code, $this->dbVersion);
                ldItemParse::getPositionBySlot($slot);
                array_push($this->codeGroup, array("Code" => $code, "Details" => ldItemParse::$dumpTemp));
            }  
            //print_r($this->binaryCode);
            //print_r($this->codeGroup);
        } 
        catch ( Exception $msg )
        {
            exit("Vault error: ". $msg->getMessage());
        }  
    } 
    public function structureVault()
    {
        try
        {
            $slot = 0;
            for($y = 0; $y < 15; $y++)
            {
                for($x = 0; $x < 8; $x++)
                {
                    if($this->codeGroup[$slot]['Details']['IsItem'] == true)
                    {
                        for($cY = 0; $cY < $this->codeGroup[$slot]['Details']['Item']['Y']; $cY++)
                        {
                            $this->codeGroup[$slot+($cY*8)]['Details']['IsFree'] = false; 
                            for($cX = 0; $cX < $this->codeGroup[$slot]['Details']['Item']['X']; $cX++)
                            {
                                $this->codeGroup[$slot+($cY*8)+$cX]['Details']['IsFree'] = false;
                            }
                        }     
                    }
                    $slot++;
                }       
            }
        } 
        catch ( Exception $msg )
        {
            exit("Vault structure error: ". $msg->getMessage());
        }  
    } 
    public function searchSlotsInVault($sX, $sY)
    {
        try
        {
            $slot = 0;
            for($y = 0; $y < 15; $y++)
            {
                for($x = 0; $x < 8; $x++)
                {
                    if($this->codeGroup[$slot]['Details']['IsFree'] == true)
                    {
                        $free = true;
                        if($y+$sY <= 15 && $x+$sX <= 8) 
                        {
                            for($cY = 0; $cY < $sY; $cY++)
                            {
                                if($this->codeGroup[$slot+($cY*8)]['Details']['IsFree'] == false) $free = false; 
                                for($cX = 0; $cX < $sX; $cX++)
                                {
                                    if($this->codeGroup[$slot+($cY*8)+$cX]['Details']['IsFree'] == false) $free = false;
                                }
                            }
                            if($free == true) return $slot;
                        }
                    }
                    $slot++;
                }       
            }
            return -1;
        } 
        catch ( Exception $msg )
        {
            exit("Vault structure error: ". $msg->getMessage());
        }  
    }
    public function insertItemInSlot($hex, $slot)
    {
        $this->codeGroup[$slot]['Code'] = $hex; 
        ldItemParse::parseHexItem($hex, $this->dbVersion);
        ldItemParse::getPositionBySlot($slot);
        $this->codeGroup[$slot]["Details"] = ldItemParse::$dumpTemp;
    }
    public function writeVault($sqlWrite = false)
    {
        $this->binaryCode = NULL;
        foreach($this->codeGroup as $slot)
        {
            $this->binaryCode .= $slot['Code'];
        }
        if($sqlWrite == true)
        {
            global $ldMssql;
            if($ldMssql->query("UPDATE [".DATABASE_ACCOUNTS."].[dbo].[warehouse] SET [Items] = 0x{$this->binaryCode} WHERE [AccountId] = '{$this->account}'") == false)
                return false;
            else
                return true;
        }
        //echo $this->binaryCode;   
    }
}
?>