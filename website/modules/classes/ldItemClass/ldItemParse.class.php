<?php            
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

class ldItemParse
{
    public static $dumpTemp = NULL;
    private static $dbVersion = NULL;
    public function __construct() { }
	
    /**
    * @desc Clear vars of memory.
    * @return null.
    */
    private static function clearVars()
    {                                   
        self::$dumpTemp['Error'] = NULL;
        self::$dumpTemp['IsItem'] = NULL;
        self::$dumpTemp['IsFree'] = NULL;
        self::$dumpTemp['ItemIdIndex'] = NULL;
        self::$dumpTemp['ItemIdSection'] = NULL;
        self::$dumpTemp['ItemIdUnique'] = NULL;
        self::$dumpTemp['ItemLevel'] = NULL;
        self::$dumpTemp['ItemOption'] = NULL;
        self::$dumpTemp['ItemSkill'] = NULL;
        self::$dumpTemp['ItemLuck'] = NULL;
        self::$dumpTemp['ItemDurability'] = NULL;
        self::$dumpTemp['ItemSerial'] = NULL;
        self::$dumpTemp['ItemExcellents'] = array(NULL, NULL, NULL, NULL, NULL, NULL, 0);
        self::$dumpTemp['ItemAncient'] = NULL;
        self::$dumpTemp['ItemRefine'] = NULL;
        self::$dumpTemp['HarmonyType'] = NULL;
        self::$dumpTemp['HarmonyLevel'] = NULL;
        self::$dumpTemp['Sockect'] = array(NULL, NULL, NULL, NULL, NULL);  
        self::$dumpTemp['ItemName'] = NULL;  
        self::$dumpTemp['Slot']['X'] = NULL;  
        self::$dumpTemp['Slot']['Y'] = NULL;  
        self::$dumpTemp['Item']['X'] = NULL;  
        self::$dumpTemp['Item']['Y'] = NULL;  
        self::$dumpTemp['Skill'] = NULL;  
        self::$dumpTemp['CharacterClass'] = array("DW/SM/GM" => NULL, "DK/BK/BM" => NULL, "ELF/ME/HE" => NULL, "MG/DM" => NULL, "DL/LE" => NULL, "SU/BS/DM" => NULL);  
    }
    
    /**
    * @desc Print error.
    * @return string.
    */      
    public static function getError()
    {                    
        return self::$dumpTemp['Error']; 
    }
    
    /**
    * @desc get details of index.
    * @return null.
    */      
    protected static function getIndex($hex)
    {   
        switch(self::$dbVersion)
        {
            case (1): case (2):
                global $VIRTUAL_VAULT;
                $tempId = hexdec(substr($hex, 0, 2));
                self::$dumpTemp['ItemIdIndex'] = ($tempId & 0x1F);
                self::$dumpTemp['ItemIdSection'] = (($tempId & 0xE0) >> 5);
                $tmpUnique = hexdec(substr($hex, 14, 2)); 
                self::$dumpTemp['ItemIdSection'] += (($tmpUnique & 0x80) == 0x80 ? 8 : 0);
                if($VIRTUAL_VAULT['SERIAL_INC_INDEX'] == true)
                    if(strtoupper(substr(self::$dumpTemp['ItemSerial'], 0, 2)) == "F9")
                        self::$dumpTemp['ItemIdIndex'] += 32;
                break;
            case (3): 
                self::$dumpTemp['ItemIdIndex'] = hexdec(substr($hex, 0, 2));
                self::$dumpTemp['ItemIdSection'] = hexdec(substr($hex, 18, 1));
                break;
        }
    }
    
    /**
    * @desc get details of Level / Option / Skill / Luck.
    * @return null.
    */ 
    protected static function getLevelOptionSkillLuck($hex)
    {
        $tempAttr[0] = hexdec(substr($hex, 2, 2));
        $tempAttr[1] = hexdec(substr($hex, 14, 2)); 
        
        self::$dumpTemp['ItemSkill'] = (($tempAttr[0] & 0x80) == 0x80);
        self::$dumpTemp['ItemOption'] = ($tempAttr[0] & 0x03) + (($tempAttr[1] & 0x40) == 0x40 ? 4 : 0 );
        self::$dumpTemp['ItemLuck'] = (($tempAttr[0] & 0x04) == 0x04); 
        self::$dumpTemp['ItemLevel'] = (($tempAttr[0] & 0x78) >> 3);
    }
    
    /**
    * @desc get durability.
    * @return null.
    */
    protected static function getDurability($hex)
    {
        self::$dumpTemp['ItemDurability'] = hexdec(substr($hex, 4, 2));
    }
    
    /**
    * @desc get serial.
    * @return null.
    */
    protected static function getSerial($hex)
    {
        self::$dumpTemp['ItemSerial'] = substr($hex, 6, 8);
    }
    
    /**
    * @desc get details of options excellents.
    * @return null.
    */
    protected static function getExcellents($hex)
    {
        $tempAttr = hexdec(substr($hex, 14, 2));
        self::$dumpTemp['ItemExcellents'][5] = (($tempAttr & 0x20) == 0x20); 
        self::$dumpTemp['ItemExcellents'][4] = (($tempAttr & 0x10) == 0x10); 
        self::$dumpTemp['ItemExcellents'][3] = (($tempAttr & 0x08) == 0x08); 
        self::$dumpTemp['ItemExcellents'][2] = (($tempAttr & 0x04) == 0x04); 
        self::$dumpTemp['ItemExcellents'][1] = (($tempAttr & 0x02) == 0x02); 
        self::$dumpTemp['ItemExcellents'][0] = (($tempAttr & 0x01) == 0x01);
        foreach(self::$dumpTemp['ItemExcellents'] as $exc)
            if($exc == true) self::$dumpTemp['ItemExcellents'][6]++;
    }
    
    /**
    * @desc get details of option ancient.
    * @return null.
    */
    protected static function getAncient($hex)
    {
        self::$dumpTemp['ItemAncient'] = hexdec(substr($hex, 17, 1)); 
    }
    
    /**
    * @desc get details of option refine.
    * @return null.
    */
    protected static function getRefine($hex)
    {
        self::$dumpTemp['ItemRefine'] = hexdec(substr($hex, 19, 1)); 
    }
    
    /**
    * @desc get harmony options.
    * @return null.
    */
    protected static function getHarmony($hex)
    {
        $tempAttr = hexdec(substr($hex, 20, 2));
        self::$dumpTemp['HarmonyType'] = (($tempAttr & 0xF0) >> 4);  
        self::$dumpTemp['HarmonyLevel'] = ($tempAttr & 0x0F);  
    }
    
    /**
    * @desc get socket options.
    * @return null.
    */
    protected static function getSocket($hex)
    {
        self::$dumpTemp['Sockect'][0] = hexdec(substr($hex, 22, 2));                    
        self::$dumpTemp['Sockect'][1] = hexdec(substr($hex, 24, 2));                    
        self::$dumpTemp['Sockect'][2] = hexdec(substr($hex, 26, 2));                    
        self::$dumpTemp['Sockect'][3] = hexdec(substr($hex, 28, 2));                    
        self::$dumpTemp['Sockect'][4] = hexdec(substr($hex, 30, 2));                  
    }
    
    /**
    * @desc get properties from database.
    * @return null.
    */
    protected static function getPropertiesFromDatabase()
    {                                                                       
        self::$dumpTemp['ItemName'] = ldItemDatabase::$dbItem[ self::$dumpTemp['ItemIdSection'] ][ self::$dumpTemp['ItemIdIndex'] ]['Name'];                  
        self::$dumpTemp['Item']['X'] = ldItemDatabase::$dbItem[ self::$dumpTemp['ItemIdSection'] ][ self::$dumpTemp['ItemIdIndex'] ]['X'];                  
        self::$dumpTemp['Item']['Y'] = ldItemDatabase::$dbItem[ self::$dumpTemp['ItemIdSection'] ][ self::$dumpTemp['ItemIdIndex'] ]['Y'];                  
        /*self::$dumpTemp['Skill'] = ldItemDatabase::$dbItem[ self::$dumpTemp['ItemIdSection'] ][ self::$dumpTemp['ItemIdIndex'] ]['Skill']; 
        self::$dumpTemp['CharacterClass'] = array(
                                                "DW/SM/GM" => ldItemDatabase::$dbItem[ self::$dumpTemp['ItemIdSection'] ][ self::$dumpTemp['ItemIdIndex'] ]['DW/SM/GM'], 
                                                "DK/BK/BM" => ldItemDatabase::$dbItem[ self::$dumpTemp['ItemIdSection'] ][ self::$dumpTemp['ItemIdIndex'] ]['DK/BK/BM'], 
                                                "ELF/ME/HE" => ldItemDatabase::$dbItem[ self::$dumpTemp['ItemIdSection'] ][ self::$dumpTemp['ItemIdIndex'] ]['ELF/ME/HE'], 
                                                "MG/DM" => ldItemDatabase::$dbItem[ self::$dumpTemp['ItemIdSection'] ][ self::$dumpTemp['ItemIdIndex'] ]['MG/DM'], 
                                                "DL/LE" => ldItemDatabase::$dbItem[ self::$dumpTemp['ItemIdSection'] ][ self::$dumpTemp['ItemIdIndex'] ]['DL/LE'], 
                                                "SU/BS/DM" => ldItemDatabase::$dbItem[ self::$dumpTemp['ItemIdSection'] ][ self::$dumpTemp['ItemIdIndex'] ]['SU/BS/DM']
        );*/              
    }
    
    /**
    * @desc is item.
    * @return boll.
    */
    protected static function isItem($hex)
    {                                                                       
        switch(self::$dbVersion)
        {
            case 1: case 2:
                if(str_pad("", 10*2, "F") == strtoupper($hex))
                {
                   self::$dumpTemp['IsItem'] = false;
                   self::$dumpTemp['IsFree'] = true;
                } 
                else
                {                                  
                    self::$dumpTemp['IsItem'] = true;
                   self::$dumpTemp['IsFree'] = false;
                }  
                break;
            case 3:   
                if(str_pad("", 16*2, "F") == $hex)      
                {
                   self::$dumpTemp['IsItem'] = false;
                   self::$dumpTemp['IsFree'] = true;
                } 
                else
                {                                  
                    self::$dumpTemp['IsItem'] = true;
                   self::$dumpTemp['IsFree'] = false;
                }    
                break; 
        }
    }
    /**
    * @desc is item.
    * @return boll.
    */
    public static function getPositionBySlot($slot, $inventory = false)
    {
        if($inventory == true) $slot -= 12;  
        self::$dumpTemp['Slot']['X'] = $slot % 8;                                                                    
        self::$dumpTemp['Slot']['Y'] = floor($slot / 8);                                                                    
    }
    
    /**
    * @desc Reading of the hex a particular item.
    * @param hexItem hexadicimal item.
    * @param dbVersion dbVersion of item.
    * @return true/false.
    */
    public static function parseHexItem($hexItem, $dbVersion = 0)
	{                                                               
        self::clearVars();
        try
        {
            if(is_numeric($dbVersion) == false)
                throw new Exception("dbVersion must be numeric.");
            if($dbVersion < 1 || $dbVersion > 3)
                throw new Exception("dbVersion invalid.");
                
            self::$dbVersion = $dbVersion;
            switch($dbVersion)
            {
                case 1:
                    self::isItem($hexItem);
                    if(self::$dumpTemp['IsItem'] == false) return true; 
                    self::getSerial($hexItem);
                    self::getIndex($hexItem);
                    self::getLevelOptionSkillLuck($hexItem);
                    self::getDurability($hexItem);
                    self::getExcellents($hexItem);
                    self::getPropertiesFromDatabase();       
                    break;
                case 2:                                                 
                    self::isItem($hexItem);
                    if(self::$dumpTemp['IsItem'] == false) return true;
                    self::getSerial($hexItem);
                    self::getIndex($hexItem);
                    self::getLevelOptionSkillLuck($hexItem);
                    self::getDurability($hexItem);
                    self::getExcellents($hexItem);
                    self::getAncient($hexItem);
                    self::getPropertiesFromDatabase(); 
                    break;
                case 3:                                                 
                    self::isItem($hexItem);
                    if(self::$dumpTemp['IsItem'] == false) return true;
                    self::getSerial($hexItem);
                    self::getIndex($hexItem);
                    self::getLevelOptionSkillLuck($hexItem);
                    self::getDurability($hexItem);
                    self::getExcellents($hexItem);
                    self::getAncient($hexItem);
                    self::getRefine($hexItem);
                    self::getHarmony($hexItem);
                    self::getSocket($hexItem);
                    self::getPropertiesFromDatabase(); 
                    break;   
            }
        } 
        catch ( Exception $msg )
        {
            self::$dumpTemp['Error'] = $msg->getMessage();
            return false;    
        }
        return true;
	}
}
?>