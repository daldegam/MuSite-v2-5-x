<?php            
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

class ldItemDatabase 
{
    public static $path = NULL, $databaseSerialized = NULL, $databaseTextPlain = NULL, $dbItem = NULL, $handleDatabase = NULL;
    public function __construct() { } 
    
    /**
    * @desc Set paths and names of database.
    */
    public static function setDatabases($path, $fileTextPlain, $fileSerialized)
    {
        self::$path = $path;  
        self::$databaseTextPlain = $fileTextPlain;  
        self::$databaseSerialized = $fileSerialized;  
    }
    
    /**
    * @desc Checks if the database exists.
    */
    public static function checkDatabaseExists()
    {
        try
        {                                                             
            if(empty(self::$databaseTextPlain) == true)
                throw new Exception("ldItemDatabase::\$databaseTextPlain is null."); 
            if(empty(self::$databaseSerialized) == true)
                throw new Exception("ldItemDatabase::\$databaseSerialized is null."); 
            
            if(file_exists(self::$path.self::$databaseSerialized) == false)
                return false;
            else
            {
                $dbHandle = fopen(self::$path.self::$databaseSerialized, "r");
                $dbContent = fread($dbHandle, filesize(self::$path.self::$databaseSerialized));
                fclose($dbHandle);
                self::$dbItem = unserialize($dbContent);
                      
                if(self::$dbItem["fileHash"] != @md5_file(self::$path.self::$databaseTextPlain))
                    return false;
                else
                    return true;
            }
        }
        catch ( Exception $msg )
        {
            exit( $msg->getMessage() );
        } 
    }
    
    /**
    * @desc Get token from txt.
    */
    public static function getBytesFromLine($line)
    {
        $countTmp = 0;
        $tmpResult = NULL;
        $tmpLine = str_split($line, 1);
        self::getToken($tmpLine, &$tmpResult, &$countTmp); 
        return $tmpResult;
    }
    
    public static function getToken($line, $result, $count)
    {
        for($i = 0, $y = sizeof($line); $i < $y; $i++)
        {
            $tmpString = NULL;
            if(ord($line[$i]) == 9 || ord($line[$i]) == 10 || ord($line[$i]) == 32 || ord($line[$i]) == 0 || ord($line[$i]) == 13) continue;
            
            switch(ord($line[$i]))
            {   
                case 47: // /
                    $stop = false;
                    while($stop == false)
                    {
                        $i++;
                        if(ord($line[$i]) == 10)
                            $stop = true;
                    }
                    break;
                case 34: // "
                    $stop = false;
                    while($stop == false)
                    {                           
                        $i++;
                        if(ord($line[$i]) == 34)
                            $stop = true;
                        else  
                        $tmpString .= $line[$i];    
                    }
                    break;
                case 45: // -
                    $stop = false;
                    while($stop == false)
                    {        
                        $tmpString .= $line[$i];                   
                        $i++;
                        if(ord($line[$i]) == 32 || ord($line[$i]) == 9 || ord($line[$i]) == 10 || ord($line[$i]) == 4 || ord($line[$i]) == 3 || ord($line[$i]) == 13 || ord($line[$i]) == 0)
                            $stop = true;           
                    }
                    break;
                default:                     
                    $stop = false;
                    while($stop == false)
                    {                       
                        $tmpString .= $line[$i];                    
                        $i++;
                        if(ord($line[$i]) == 32 || ord($line[$i]) == 9 || ord($line[$i]) == 10 || ord($line[$i]) == 4 || ord($line[$i]) == 3 || ord($line[$i]) == 13 || ord($line[$i]) == 0) 
                            $stop = true;           
                    }                           
                    break;
            
            } 
            $result[] = $tmpString;    
        }          
    }  
                      
    /**
    * @desc Create the database serialized.
    */
    const WAIT_CATEGORIE = 0x01;
    const WAIT_ITEM      = 0x02;
    public static function createDatabase()
    {
        try
        {                                                             
            if(file_exists(self::$path.self::$databaseTextPlain) == false)
                throw new Exception("The file ".self::$path.self::$databaseTextPlain." not exists.");
            self::$handleDatabase = file(self::$path.self::$databaseTextPlain, FILE_SKIP_EMPTY_LINES);
             
            $items = NULL;
            $tempWait = self::WAIT_CATEGORIE;
            $counts = array("section" => -1, "index" => -1);
            
            $items["fileHash"] = md5_file(self::$path.self::$databaseTextPlain);
            
            foreach(self::$handleDatabase as $line)
            {
                $arrayResult = self::getBytesFromLine($line); 
                switch($tempWait)
                {
                    case self::WAIT_CATEGORIE: 
                        if(is_numeric($arrayResult[0]) == false) continue; 
                        $items[ $arrayResult[0] ] = array(); 
                        $counts["section"] += 1; 
                        $tempWait = self::WAIT_ITEM;
                        break;
                    case self::WAIT_ITEM:                                                 
                        if($arrayResult[0] == "end")
                        {
                            $tempWait = self::WAIT_CATEGORIE; 
                            continue;
                        } 
                        if(is_numeric($arrayResult[0]) == false) continue;
                        $arrayResult = str_replace("'", "", $arrayResult);  
                        switch($counts["section"])
                        { 
                            case (0): case (1): case (2): case (3): case (4): case (5): 
                                // 29 season 2 
                                // 19 97d                                          
                                switch(sizeof($arrayResult))
                                {
                                    case 30: case 29: case 28: case 25: 
                                        $key = array("Index" => 0, "X" => 3, "Y" => 4, "Name" => 8);
                                        break;
                                    case 19: 
                                        $key = array("Index" => 0, "X" => 1, "Y" => 2, "Name" => 6);
                                        break;
                                    default:
                                        throw new Exception("O item(kor) não é compativel com o sistema ou esta danificado (Categoria: {$counts["section"]}, Index: {$arrayResult[0]} {".sizeof($arrayResult)."}).");
                                }  
                                $items[ $counts["section"] ][ $arrayResult[0] ] = array("Index" => $arrayResult[ $key["Index"] ],
                                                                                        "X" => $arrayResult[ $key["X"] ],
                                                                                        "Y" => $arrayResult[ $key["Y"] ],
                                                                                        "Name" => $arrayResult[ $key["Name"] ], 
                                                                                        );    
                                break;
                            case (6):    
                                //25 season 2
                                // 16 97d                                        
                                switch(sizeof($arrayResult))
                                {
                                    case 27: case 26: case 25: case 22: 
                                        $key = array("Index" => 0, "X" => 3, "Y" => 4, "Name" => 8);
                                        break;
                                    case 16: 
                                        $key = array("Index" => 0, "X" => 1, "Y" => 2, "Name" => 6);
                                        break;
                                    default:                                                                                                                       
                                        throw new Exception("O item(kor) não é compativel com o sistema ou esta danificado (Categoria: {$counts["section"]}, Index: {$arrayResult[0]} {".sizeof($arrayResult)."}).");
                                }  
                                $items[ $counts["section"] ][ $arrayResult[0] ] = array("Index" => $arrayResult[ $key["Index"] ],
                                                                                        "X" => $arrayResult[ $key["X"] ],
                                                                                        "Y" => $arrayResult[ $key["Y"] ],
                                                                                        "Name" => $arrayResult[ $key["Name"] ], 
                                                                                        ); 
                                break;
                            case (7): case (8): case (9): case (10): case (11):  
                                //25 season 2 
                                // 17 97d                                           
                                switch(sizeof($arrayResult))
                                {
                                    case 27: case 26: case 25: case 21: 
                                        $key = array("Index" => 0, "X" => 3, "Y" => 4, "Name" => 8);
                                        break;
                                    case 17: 
                                        $key = array("Index" => 0, "X" => 1, "Y" => 2, "Name" => 6);
                                        break;
                                    default:                                                                                                                      
                                        throw new Exception("O item(kor) não é compativel com o sistema ou esta danificado (Categoria: {$counts["section"]}, Index: {$arrayResult[0]} {".sizeof($arrayResult)."}).");
                                }  
                                $items[ $counts["section"] ][ $arrayResult[0] ] =  array("Index" => $arrayResult[ $key["Index"] ],
                                                                                        "X" => $arrayResult[ $key["X"] ],
                                                                                        "Y" => $arrayResult[ $key["Y"] ],
                                                                                        "Name" => $arrayResult[ $key["Name"] ], 
                                                                                        ); 
                                break;
                            case (12): 
                                //23 season 2 
                                //20 97d                                            
                                switch(sizeof($arrayResult))
                                {
                                    case 25: case 24: case 23: 
                                        $key = array("Index" => 0, "X" => 3, "Y" => 4, "Name" => 8);
                                        break;
                                    case 20: case 19: 
                                        $key = array("Index" => 0, "X" => 1, "Y" => 2, "Name" => 6);
                                        break;
                                    default:                                                                                                                      
                                        throw new Exception("O item(kor) não é compativel com o sistema ou esta danificado (Categoria: {$counts["section"]}, Index: {$arrayResult[0]} {".sizeof($arrayResult)."}.");
                                }   
                                $items[ $counts["section"] ][ $arrayResult[0] ] = array("Index" => $arrayResult[ $key["Index"] ],
                                                                                        "X" => $arrayResult[ $key["X"] ],
                                                                                        "Y" => $arrayResult[ $key["Y"] ],
                                                                                        "Name" => $arrayResult[ $key["Name"] ], 
                                                                                        ); 
                                break;
                            case (13): 
                                //24 season 2   
                                //17 97d                                                 
                                switch(sizeof($arrayResult))
                                {
                                    case 26: case 25: case 24: 
                                        $key = array("Index" => 0, "X" => 3, "Y" => 4, "Name" => 8);
                                        break;
                                    case 17: 
                                        $key = array("Index" => 0, "X" => 1, "Y" => 2, "Name" => 6);
                                        break;
                                    default:                                                                                                                     
                                        throw new Exception("O item(kor) não é compativel com o sistema ou esta danificado (Categoria: {$counts["section"]}, Index: {$arrayResult[0]} {".sizeof($arrayResult)."}).");
                                }    
                                $items[ $counts["section"] ][ $arrayResult[0] ] = array("Index" => $arrayResult[ $key["Index"] ],
                                                                                        "X" => $arrayResult[ $key["X"] ],
                                                                                        "Y" => $arrayResult[ $key["Y"] ],
                                                                                        "Name" => $arrayResult[ $key["Name"] ], 
                                                                                        );  
                                break;
                            case (14):                         
                                //11 season 2 
                                //9 97d                          
                                switch(sizeof($arrayResult))
                                {
                                    case 11: 
                                        $key = array("Index" => 0, "X" => 3, "Y" => 4, "Name" => 8);
                                        break;
                                    case 9: 
                                        $key = array("Index" => 0, "X" => 1, "Y" => 2, "Name" => 6);
                                        break;
                                    default:                                                                                                                      
                                        throw new Exception("O item(kor) não é compativel com o sistema ou esta danificado (Categoria: {$counts["section"]}, Index: {$arrayResult[0]} {".sizeof($arrayResult)."}).");
                                }          
                                $items[ $counts["section"] ][ $arrayResult[0] ] = array("Index" => $arrayResult[ $key["Index"] ],
                                                                                        "X" => $arrayResult[ $key["X"] ],
                                                                                        "Y" => $arrayResult[ $key["Y"] ],
                                                                                        "Name" => $arrayResult[ $key["Name"] ], 
                                                                                        ); 
                                break;
                            case (15):                              
                                switch(sizeof($arrayResult))
                                {
                                    case 20: case 19: case 18: 
                                        $key = array("Index" => 0, "X" => 3, "Y" => 4, "Name" => 8);
                                        break;
                                    case 15: 
                                        $key = array("Index" => 0, "X" => 1, "Y" => 2, "Name" => 6);
                                        break;
                                    default:                                                                                                                       
                                        throw new Exception("O item(kor) não é compativel com o sistema ou esta danificado (Categoria: {$counts["section"]}, Index: {$arrayResult[0]} {".sizeof($arrayResult)."}).");
                                }  
                                //18 season 2 
                                //15 97d        
                                $items[ $counts["section"] ][ $arrayResult[0] ] = array("Index" => $arrayResult[ $key["Index"] ],
                                                                                        "X" => $arrayResult[ $key["X"] ],
                                                                                        "Y" => $arrayResult[ $key["Y"] ],
                                                                                        "Name" => $arrayResult[ $key["Name"] ], 
                                                                                        ); 
                                break;
                        }                                         
                        break; 
                }
                //print_r($arrayResult);
            }
            //print_r($items);
            $handle = fopen(self::$path.self::$databaseSerialized, "w");
            fwrite($handle, serialize($items));
            fclose($handle); 
            
            if(file_exists(self::$path.self::$databaseSerialized) == false)
                throw new Exception("Não foi possivel criar o banco de dados!<br />Verifique as permissões de escrita na pasta: modules/classes/ldItemClass/data/.");
        }
        catch ( Exception $msg )
        {
            exit( $msg->getMessage() );
        }  
    }
}
?>