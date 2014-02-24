<?php            
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

class ldInventory
{
    public $binaryCode, $itemSize, $dbVersion, $account, $character, $codeGroup, $slotNumbers;
    public function __construct($account, $character, $dbVersion) 
    {
        try
        {
            $this->clearVars();
            if(is_numeric($dbVersion) == false)
                throw new Exception("dbVersion must be numeric.");
            if($dbVersion < 1 || $dbVersion > 3)
                throw new Exception("dbVersion invalid.");
            $this->dbVersion = $dbVersion;                               
            $this->account = $account;
            $this->character = $character;
            
            if($this->dbVersion == 3)
            {
                $getLenghts = $ldMssql->query("SELECT [length] FROM [syscolumns] WHERE OBJECT_NAME([id]) = 'Character' AND [name] = 'Inventory'");
                $getLenghts = mssql_fetch_object($getLenghts);
                $this->slotNumbers = ($getLenghts->length * 2) / 32;
            }
        } 
        catch ( Exception $msg )
        {
            exit("Inventory class error: ". $msg->getMessage());
        }
    } 
    
    private function clearVars()
    {
        $this->binaryCode = NULL;
        $this->itemSize = NULL;
        $this->dbVersion = NULL;
        $this->account = NULL;
        $this->character = NULL;
        $this->codeGroup = array();
    }
    
    public function getInventory()
    {
        global $ldMssql;
        try
        {
            switch($this->dbVersion)
            {
                case 1: case 2:
                    $this->itemSize = 10*76;
                    break;
                case 3:
                    $this->itemSize = 16*$this->slotNumbers;
                    break;   
            }
            /*
            $getVault = $ldMssql->query("DECLARE @BINARYITEMS VARBINARY({$this->itemSize}); SELECT @BINARYITEMS = [Inventory] FROM [".DATABASE_CHARACTERS."].[dbo].[Character] WHERE [AccountID] = '{$this->account}' AND [Name] = '{$this->character}'; PRINT @BINARYITEMS;");
            $this->binaryCode = substr(mssql_get_last_message($getVault),2);
            */
            $getVault = $ldMssql->query("USE [".DATABASE_ACCOUNTS."]; SELECT CONVERT(TEXT, CONVERT(VARCHAR(".$this->itemSize."), Inventory)) [Inventory] FROM [Character] WHERE [AccountID] = '{$this->account}' AND [Name] = '{$this->character}'; USE [".DATABASE."]");
            $getVault = mssql_fetch_object($getVault);
            $this->binaryCode = strtoupper(bin2hex($getVault->Items));
            if(empty($this->binaryCode)) throw new Exception("Inválid inventory.");
        } 
        catch ( Exception $msg )
        {
            exit("Inventory error: ". $msg->getMessage());
        }
    }
    public function cutCode()
    {
        try
        {
            switch($this->dbVersion)
            {
                case 1: case 2:
                    if(strlen($this->binaryCode) <> 10*76*2)
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
                if($slot >= 12) ldItemParse::getPositionBySlot($slot, true);
                array_push($this->codeGroup, array("Code" => $code, "Details" => ldItemParse::$dumpTemp));
            }  
            //print_r($this->binaryCode);
            //print_r($this->codeGroup);
        } 
        catch ( Exception $msg )
        {
            exit("Inventory error: ". $msg->getMessage());
        }  
    } 
    public function structureInventory()
    {
        try
        {
            $slot = 12;
            for($y = 0; $y < 8; $y++)
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
            exit("Inventory structure error: ". $msg->getMessage());
        }  
    } 
    public function searchSlotsInInventory($sX, $sY)
    {
        try
        {
            $slot = 12;
            for($y = 0; $y < 8; $y++)
            {
                for($x = 0; $x < 8; $x++)
                {
                    if($this->codeGroup[$slot]['Details']['IsFree'] == true)
                    {
                        $free = true;
                        if($y+$sY <= 8 && $x+$sX <= 8) 
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
            exit("Inventory structure error: ". $msg->getMessage());
        }  
    }
    public function insertItemInSlot($hex, $slot)
    {
        $this->codeGroup[$slot]['Code'] = $hex; 
        ldItemParse::parseHexItem($hex, $this->dbVersion);
        ldItemParse::getPositionBySlot($slot);
        $this->codeGroup[$slot]["Details"] = ldItemParse::$dumpTemp;
    }
    public function writeInventory($sqlWrite = false)
    {
        $this->binaryCode = NULL;
        foreach($this->codeGroup as $slot)
        {
            $this->binaryCode .= $slot['Code'];
        }
        if($sqlWrite == true)
        {
            global $ldMssql;
            $update = $ldMssql->query("UPDATE [".DATABASE_CHARACTERS."].[dbo].[Character] SET [Inventory] = 0x{$this->binaryCode} WHERE [AccountId] = '{$this->account}' AND [Name] = '{$this->character}'");
        }
        //echo $this->binaryCode;   
    } 
}
?>
