<?php            
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

class ldItemMake
{
    private static $dumpFinalItem, $ruleHex = NULL, $dbVersion = NULL, $properties = NULL;
	public function __construct() { }
	
    /**
    * @desc Check the dbVersion and creates the mask of the hex.
    * @return BOOL.
    */
    private static function dbVersionRule()
    {
        if(self::$dbVersion < 1 || self::$dbVersion > 3) return false;
        switch(self::$dbVersion)
        {
            case 1: self::$ruleHex = "%02X%02X%02X%08X%02X0000";
                    /* Item ID, Level/Option/Skill/Luck, Durability, Serial, Unique/Excellents, NOPs */ break;   
            case 2: self::$ruleHex = "%02X%02X%02X%08X%02X0%01X00"; 
                    /* Item ID, Level/Option/Skill/Luck, Durability, Serial, Unique/Excellents, NOP, Ancient, NOPs */ break;   
            case 3: self::$ruleHex = "%02X%02X%02X%08X%02X0%01X%01X%01X%01X%01X%02X%02X%02X%02X%02X";
                    /* Item ID, Level/Option/Skill/Luck, Durability, Serial, Excellents, NOP, Ancient, Id Categorie, Refine (380), Harmony Type, Harmony Level, Socket Op1, Socket Op2, Socket Op3, Socket Op4, Socket Op5  */  break;   
        }
        return true;  
    }
    
    /**
    * @desc Checks if the properties are correct in accordance with the dbVersion.
    * @return BOOL.
    */
    private static function checkProperties()
    {
        switch(self::$dbVersion)
        {
            case 1:
                if(isset(self::$properties['Level']) == false) return false;
                if(isset(self::$properties['Option']) == false) return false;
                if(isset(self::$properties['Skill']) == false) return false;
                if(isset(self::$properties['Luck']) == false) return false;
                if(isset(self::$properties['Serial']) == false) return false;
                if(isset(self::$properties['Excellent'][0]) == false || isset(self::$properties['Excellent'][1]) == false || isset(self::$properties['Excellent'][2]) == false || isset(self::$properties['Excellent'][3]) == false || isset(self::$properties['Excellent'][4]) == false || isset(self::$properties['Excellent'][5]) == false) return false;
                break;
            case 2:
                if(isset(self::$properties['Level']) == false) return false;
                if(isset(self::$properties['Option']) == false) return false;
                if(isset(self::$properties['Skill']) == false) return false;
                if(isset(self::$properties['Luck']) == false) return false;
                if(isset(self::$properties['Serial']) == false) return false;
                if(isset(self::$properties['Excellent'][0]) == false || isset(self::$properties['Excellent'][1]) == false || isset(self::$properties['Excellent'][2]) == false || isset(self::$properties['Excellent'][3]) == false || isset(self::$properties['Excellent'][4]) == false || isset(self::$properties['Excellent'][5]) == false) return false;
                if(isset(self::$properties['Ancient']) == false) return false;
                break;
            case 3:
                if(isset(self::$properties['Level']) == false) return false;
                if(isset(self::$properties['Option']) == false) return false;
                if(isset(self::$properties['Skill']) == false) return false;
                if(isset(self::$properties['Luck']) == false) return false;
                if(isset(self::$properties['Serial']) == false) return false;
                if(isset(self::$properties['Excellent'][0]) == false || isset(self::$properties['Excellent'][1]) == false || isset(self::$properties['Excellent'][2]) == false || isset(self::$properties['Excellent'][3]) == false || isset(self::$properties['Excellent'][4]) == false || isset(self::$properties['Excellent'][5]) == false) return false;
                if(isset(self::$properties['Ancient']) == false) return false;
                if(isset(self::$properties['Refine']) == false) return false;
                if(isset(self::$properties['HarmonyType']) == false) return false;
                if(isset(self::$properties['HarmonyLevel']) == false) return false;
                if(isset(self::$properties['SocketOption'][0]) == false || isset(self::$properties['SocketOption'][1]) == false || isset(self::$properties['SocketOption'][2]) == false || isset(self::$properties['SocketOption'][3]) == false || isset(self::$properties['SocketOption'][4]) == false) return false;
                break;
            default: return false;
        }
        return true;   
    }  
    
    /**
    * @desc Calculate the durability of the standard item.
    * @param indexItem Id item.
    * @param indexCategorie Id of the category to which the item belongs.
    * @param durBase Default durability of the item.
    * @param itemLevel Item Level.
    * @param excellentItem If the item is excellent or not.
    * @param setItem If the item is ancient or not
    * @return Returns the durability (int).
    */
    private static function ItemGetDurability($indexItem, $indexCategorie, $durBase, $itemLevel, $excellentItem, $setItem)
    {                                                                                   
        if($indexCategorie == 14 && $indexItem == 27 && $itemLevel == 3) $itemLevel = 0;
        if($indexCategorie == 14 && $indexItem == 29) return 1;
        $durability = 0;
        if($itemLevel < 5)
            $durability = $durBase + $itemLevel;
        else
            switch($itemLevel)
            {
                case 10: $durability = $durBase + $itemLevel*2-3; break;    
                case 11: $durability = $durBase + $itemLevel*2-1; break;    
                case 12: $durability = $durBase + $itemLevel*2+2; break;    
                case 13: $durability = $durBase + $itemLevel*2+6; break;    
                default: $durability = $durBase + $itemLevel*2-4; break;    
            }
                                                    
        if( ( $indexCategorie == 12 && $indexItem == 3 ) == false 
            && ( $indexCategorie == 12 && $indexItem == 4 ) == false 
            && ( $indexCategorie == 12 && $indexItem == 5 ) == false 
            && ( $indexCategorie == 12 && $indexItem == 6 ) == false 
            && ( $indexCategorie == 12 && $indexItem == 36 ) == false
            && ( $indexCategorie == 12 && $indexItem == 37 ) == false
            && ( $indexCategorie == 12 && $indexItem == 38 ) == false
            && ( $indexCategorie == 12 && $indexItem == 39 ) == false
            && ( $indexCategorie == 12 && $indexItem == 40 ) == false
            && ( $indexCategorie == 12 && $indexItem == 43 ) == false 
            && ( $indexCategorie == 0 && $indexItem == 19 ) == false 
            && ( $indexCategorie == 4 && $indexItem == 18 ) == false 
            && ( $indexCategorie == 5 && $indexItem == 10 ) == false 
            && ( $indexCategorie == 2 && $indexItem == 13 ) == false
            && ( $indexCategorie == 13 && $indexItem == 30 ) == false )
            if($setItem != 0) $durability += 20;
            elseif($excellentItem != 0) $durability += 15;
        if($durability > 255) $durability = 255;
        return $durability;     
    } 
    
    /**
    * @desc Get last serial from database.
    * @return Int value with last serial.
    */
    private static function ItemGetSerial()
    {
        if(self::$properties["Serial"] == true)
        {
            global $ldMssql;
            $dumpTemp = $ldMssql->query("EXEC ".constant("DATABASE_CHARACTERS").".[dbo].[WZ_GetItemSerial]");
            $dumpTemp = mssql_fetch_row($dumpTemp);
            return $dumpTemp[0];
        }
        else
            return 0;
    }                
    
	/**
	 * @desc Generates the binary code of a particular item.
     * @param hexItem Variable that will return the result in hex.
     * @param indexItem Item Id.
	 * @param indexCategorie Id of the category to which the item belongs.
     * @param dbVersion Version database: 1 = (10 bytes, not personal store), 2 = (10 bytes, with personal store), 1 = (16 bytes, with personal store and harmony)
     * @param properties Properties of the item, level, excellent, etc.
	 * @return BOOL.
	 */ 
	public static function makeHexItem(&$hexItem, $indexItem, $indexCategorie, $dbVersion, $properties)
	{
        self::$dbVersion = $dbVersion;
	    self::$properties = $properties;
        if(self::dbVersionRule() == false) return false;
        if(self::checkProperties() == false) return false;
        
        $dumpTemp['ItemId'] = NULL;
        $dumpTemp['ItemLOSL'] = NULL;
        $dumpTemp['ItemDurability'] = NULL;
        $dumpTemp['ItemSerial'] = NULL;
        $dumpTemp['ItemExcellents'] = NULL;
        $dumpTemp['ItemAncient'] = NULL;
        $dumpTemp['CategorieId'] = NULL;
        $dumpTemp['ItemRefine'] = NULL;
        $dumpTemp['HarmonyType'] = NULL;
        $dumpTemp['HarmonyLevel'] = NULL;
        $dumpTemp['Sockect'] = array(NULL, NULL, NULL, NULL, NULL);
        
        switch(self::$dbVersion)
        {
            case 1: 
                $dumpTemp['ItemId'] = ((($indexItem & 0x1F) | (($indexCategorie << 5) & 0xE0)) & 0xFF);
                $dumpTemp['ItemLOSL'] = (int)(self::$properties['Level']*8) + (self::$properties['Skill'] == true ? 128 : 0) + (self::$properties['Luck'] == true ? 4 : 0) + (self::$properties['Option'] < 4 ? self::$properties['Option'] : (self::$properties['Option'] - 4));
                $dumpTemp['ItemDurability'] = self::ItemGetDurability($indexItem, $indexCategorie, self::$properties['Durability'], self::$properties['Level'], (self::$properties['Excellent'][0] == true || self::$properties['Excellent'][1] == true || self::$properties['Excellent'][2] == true || self::$properties['Excellent'][3] == true || self::$properties['Excellent'][4] == true || self::$properties['Excellent'][5] == true ? 1 : 0) , self::$properties['Ancient']);   
                $dumpTemp['ItemSerial'] = self::ItemGetSerial();
                $dumpTemp['ItemExcellents'] = (int)(($indexCategorie * 32) > 255 ? 128 : 0) + (self::$properties['Option'] >= 4 ? 64 : 0) + (self::$properties['Excellent'][0] == true ? 1 : 0) + (self::$properties['Excellent'][1] == true ? 2 : 0) + (self::$properties['Excellent'][2] == true ? 4 : 0) + (self::$properties['Excellent'][3] == true ? 8 : 0) + (self::$properties['Excellent'][4] == true ? 16 : 0) + (self::$properties['Excellent'][5] == true ? 32 : 0);
                break;
            case 2:
                $dumpTemp['ItemId'] = ((($indexItem & 0x1F) | (($indexCategorie << 5) & 0xE0)) & 0xFF); 
                $dumpTemp['ItemLOSL'] = (int)(self::$properties['Level']*8) + (self::$properties['Skill'] == true ? 128 : 0) + (self::$properties['Luck'] == true ? 4 : 0) + (self::$properties['Option'] < 4 ? self::$properties['Option'] : (self::$properties['Option'] - 4));
                $dumpTemp['ItemDurability'] = self::ItemGetDurability($indexItem, $indexCategorie, self::$properties['Durability'], self::$properties['Level'], (self::$properties['Excellent'][0] == true || self::$properties['Excellent'][1] == true || self::$properties['Excellent'][2] == true || self::$properties['Excellent'][3] == true || self::$properties['Excellent'][4] == true || self::$properties['Excellent'][5] == true ? 1 : 0) , self::$properties['Ancient']);   
                $dumpTemp['ItemSerial'] = self::ItemGetSerial();
                $dumpTemp['ItemExcellents'] = (int)(($indexCategorie * 32) > 255 ? 128 : 0) + (self::$properties['Option'] >= 4 ? 64 : 0) + (self::$properties['Excellent'][0] == true ? 1 : 0) + (self::$properties['Excellent'][1] == true ? 2 : 0) + (self::$properties['Excellent'][2] == true ? 4 : 0) + (self::$properties['Excellent'][3] == true ? 8 : 0) + (self::$properties['Excellent'][4] == true ? 16 : 0) + (self::$properties['Excellent'][5] == true ? 32 : 0);
                $dumpTemp['ItemAncient'] = (int)(self::$properties['Ancient'] == 1 ? 5 : 0) + (self::$properties['Ancient'] == 2 ? 9 : 0);
                break;
            case 3: 
                $dumpTemp['ItemId'] = $indexItem; 
                $dumpTemp['ItemLOSL'] = (int)(self::$properties['Level']*8) + (self::$properties['Skill'] == true ? 128 : 0) + (self::$properties['Luck'] == true ? 4 : 0) + (self::$properties['Option'] < 4 ? self::$properties['Option'] : (self::$properties['Option'] - 4));
                $dumpTemp['ItemDurability'] = self::ItemGetDurability($indexItem, $indexCategorie, self::$properties['Durability'], self::$properties['Level'], (self::$properties['Excellent'][0] == true || self::$properties['Excellent'][1] == true || self::$properties['Excellent'][2] == true || self::$properties['Excellent'][3] == true || self::$properties['Excellent'][4] == true || self::$properties['Excellent'][5] == true ? 1 : 0) , self::$properties['Ancient']);   
                $dumpTemp['ItemSerial'] = self::ItemGetSerial();
                $dumpTemp['ItemExcellents'] = (int)(self::$properties['Option'] >= 4 ? 64 : 0) + (self::$properties['Excellent'][0] == true ? 1 : 0) + (self::$properties['Excellent'][1] == true ? 2 : 0) + (self::$properties['Excellent'][2] == true ? 4 : 0) + (self::$properties['Excellent'][3] == true ? 8 : 0) + (self::$properties['Excellent'][4] == true ? 16 : 0) + (self::$properties['Excellent'][5] == true ? 32 : 0);
                $dumpTemp['ItemAncient'] = (int)(self::$properties['Ancient'] == 1 ? 5 : 0) + (self::$properties['Ancient'] == 2 ? 10 : 0);
                $dumpTemp['CategorieId'] = $indexCategorie;
                $dumpTemp['ItemRefine'] = (int)(self::$properties['Refine'] == true ? 8 : 0);
                $dumpTemp['HarmonyType'] = (int)self::$properties['HarmonyType'];
                $dumpTemp['HarmonyLevel'] = (int)self::$properties['HarmonyLevel'];
                $dumpTemp['Sockect'][0] = (int)self::$properties['SocketOption'][0];
                $dumpTemp['Sockect'][1] = (int)self::$properties['SocketOption'][1];
                $dumpTemp['Sockect'][2] = (int)self::$properties['SocketOption'][2];
                $dumpTemp['Sockect'][3] = (int)self::$properties['SocketOption'][3];
                $dumpTemp['Sockect'][4] = (int)self::$properties['SocketOption'][4];
                break;
        } 
        
        
        switch(self::$dbVersion)
        {
            case 1: $hexItem = sprintf(self::$ruleHex, $dumpTemp['ItemId'], $dumpTemp['ItemLOSL'], $dumpTemp['ItemDurability'], $dumpTemp['ItemSerial'], $dumpTemp['ItemExcellents']); break; 
            case 2: $hexItem = sprintf(self::$ruleHex, $dumpTemp['ItemId'], $dumpTemp['ItemLOSL'], $dumpTemp['ItemDurability'], $dumpTemp['ItemSerial'], $dumpTemp['ItemExcellents'], $dumpTemp['ItemAncient']); break;
            case 3: $hexItem = sprintf(self::$ruleHex, $dumpTemp['ItemId'], $dumpTemp['ItemLOSL'], $dumpTemp['ItemDurability'], $dumpTemp['ItemSerial'], $dumpTemp['ItemExcellents'], $dumpTemp['ItemAncient'], $dumpTemp['CategorieId'], $dumpTemp['ItemRefine'], $dumpTemp['HarmonyType'], $dumpTemp['HarmonyLevel'], $dumpTemp['Sockect'][0], $dumpTemp['Sockect'][1], $dumpTemp['Sockect'][2], $dumpTemp['Sockect'][3], $dumpTemp['Sockect'][4]); break;
        }                                                                        
        return true;
	}
}
?>
