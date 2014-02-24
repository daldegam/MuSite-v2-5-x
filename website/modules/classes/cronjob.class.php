<?php  
require("../settings.php");
DEFINE("LANGUAGE_MSSQL_LANG_CRONJOB", true);
require("ldlanguage.class.php");
require("ldmssql.class.php");
                                
class Cronjob extends ldMssql
{
    private $active, $debug, $image, $y = 5, $cy = 0;
    public function __construct()
    {                      
        global $CRON_JOB; 
        $this->active = ($_GET['active'] == true ? true : $CRON_JOB['Active']);                                                 
        $this->debug  = ($_GET['debug'] == true ? true : $CRON_JOB['Debug']);
        parent::connect(); 
        $this->cronjob = true; //enable special treatment;                                                
        error_reporting(E_ALL & ~E_NOTICE);
        ignore_user_abort(1);
        @set_time_limit(0); 
        $this->createImg();
        if($this->checkExecute() == true)
        {
            $this->checkTableCreate(); 
            $this->checkTasks(); 
        }
        $this->finalSentence();
    }
	
    public function __destruct()
    {                             
        header("Content-type: image/png");  
        imagepng($this->image);
        imagedestroy($this->image);    
    } 
       
    public function createImg()
    {
        if($this->active == false) 
        {
            $this->image = imagecreate(1,1);
            imagecolorallocate($this->image, 0xF6, 0xF8, 0xFA);
            $this->__destruct();
            exit();
        }
        
        if($this->debug == true)
        {
            $img = array("x" => 600, "y" => 2500);
            $this->image = imagecreate($img['x'],$img['y']);                            
        }
        else $this->image = imagecreate(1,1);
        
        $this->colors = array("white"      => imagecolorallocate($this->image, 0xF6, 0xF8, 0xFA),
                              "black"      => imagecolorallocate($this->image, 0x00, 0x00, 0x00), 
                              "yellow"     => imagecolorallocate($this->image, 0xFF, 0xFF, 0x6A),
                              "red"        => imagecolorallocate($this->image, 0xFF, 0x00, 0x00),
                              "green"      => imagecolorallocate($this->image, 0x00, 0xFF, 0x00),
                              "blue"       => imagecolorallocate($this->image, 0x00, 0x00, 0xFF),
                              "lightred"   => imagecolorallocate($this->image, 0xFF, 0x55, 0x55),
                              "lightblue"  => imagecolorallocate($this->image, 0x84, 0x84, 0xFF),
                              "lightgreen" => imagecolorallocate($this->image, 0x84, 0xFF, 0x84),
                              "border"     => imagecolorallocate($this->image, 0xCE, 0xD0, 0xD2));  
        
        if($this->debug == true)
        {
            imagefilledrectangle($this->image, 0, 0, $img['x'], $img['y'], $this->colors['white']);
            imagerectangle($this->image, 0, 0, $img['x'] - 1, $img['y'] - 1, $this->colors['border']); 
            $this->addStringImg(5, "CRONJOB SYSTEM - DEBUG MODE", $this->colors['black']);                 
        }                                   
    }
    
    protected function addSymbol($posX, $colorOut, $colorIn)
    {   
        $this->cy = $this->y + 4;                                                                      
        imagefilledellipse($this->image, $posX, $this->cy, 8, 8, $colorOut);
        imagefilledellipse($this->image, $posX, $this->cy, 6, 6, $colorIn);    
    }
    
    protected function addStringImg($posX, $string, $color)
    {                    
        imagestring($this->image, 1, $posX, (int)$this->y, $string, $color); 
        $this->y += 12;       
    }
    
    private function checkTableCreate()
    {
        $tempCheck = $this->query("SELECT * FROM [".DATABASE."].[dbo].[sysobjects] WHERE id = object_id(N'[".DATABASE."].[dbo].[webCronjob]')"); 
        if(@mssql_num_rows($tempCheck) == 0)
        {                            
            $this->addSymbol(10, $this->colors['black'], $this->colors['red']);  
            $this->addStringImg(20, "A tabela [".DATABASE."].[dbo].[webCronjob] não existe.", $this->colors['black']); 
            $tempCreate = $this->query("CREATE TABLE [".DATABASE."].[dbo].[webCronjob](
                                            [idTask] [smallint] IDENTITY(1,1) NOT NULL,
                                            [scriptName] [varchar](50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
                                            [lastExecution] [varchar](10) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
                                            [intervalExecution] [varchar](10) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
                                            [runTimes] [int] NOT NULL,
                                            [active] [bit] NOT NULL
                                        ) ON [PRIMARY]"); 
            $tempCreate = $this->query("ALTER TABLE [dbo].[webCronjob] WITH NOCHECK ADD 
                                            CONSTRAINT [PK_webConjob] PRIMARY KEY  CLUSTERED 
                                            (
                                                [scriptName]
                                            )  ON [PRIMARY] 
                                        GO"); 
            $tempCreate = $this->query("INSERT INTO [".DATABASE."].[dbo].[webCronjob] ([scriptName],[lastExecution],[intervalExecution],[runTimes],[active]) VALUES ('sincronizeVip',0,60,0,1);
                                        INSERT INTO [".DATABASE."].[dbo].[webCronjob] ([scriptName],[lastExecution],[intervalExecution],[runTimes],[active]) VALUES ('sincronizeBans',0,60,0,1);
                                        INSERT INTO [".DATABASE."].[dbo].[webCronjob] ([scriptName],[lastExecution],[intervalExecution],[runTimes],[active]) VALUES ('resetRankingWeek',0,604800,0,0);
                                        INSERT INTO [".DATABASE."].[dbo].[webCronjob] ([scriptName],[lastExecution],[intervalExecution],[runTimes],[active]) VALUES ('resetRankingMonth',0,2592000,0,0);
                                        INSERT INTO [".DATABASE."].[dbo].[webCronjob] ([scriptName],[lastExecution],[intervalExecution],[runTimes],[active]) VALUES ('clearEmailsTimeLimit',0,60,0,1);
                                        INSERT INTO [".DATABASE."].[dbo].[webCronjob] ([scriptName],[lastExecution],[intervalExecution],[runTimes],[active]) VALUES ('clearIpsTimeLimit',0,60,0,1);
                                        INSERT INTO [".DATABASE."].[dbo].[webCronjob] ([scriptName],[lastExecution],[intervalExecution],[runTimes],[active]) VALUES ('gerateCharacterRankingResets',0,1800,0,1);
                                        INSERT INTO [".DATABASE."].[dbo].[webCronjob] ([scriptName],[lastExecution],[intervalExecution],[runTimes],[active]) VALUES ('gerateCharacterRankingResetsWeek',0,1800,0,1);
                                        INSERT INTO [".DATABASE."].[dbo].[webCronjob] ([scriptName],[lastExecution],[intervalExecution],[runTimes],[active]) VALUES ('gerateCharacterRankingResetsMonth',0,1800,0,1);
                                        INSERT INTO [".DATABASE."].[dbo].[webCronjob] ([scriptName],[lastExecution],[intervalExecution],[runTimes],[active]) VALUES ('gerateCharacterRankingMasterReset',0,1800,0,1);
                                        INSERT INTO [".DATABASE."].[dbo].[webCronjob] ([scriptName],[lastExecution],[intervalExecution],[runTimes],[active]) VALUES ('gerateCharacterRankingLevel',0,1800,0,1);
                                        INSERT INTO [".DATABASE."].[dbo].[webCronjob] ([scriptName],[lastExecution],[intervalExecution],[runTimes],[active]) VALUES ('gerateCharacterRankingPk',0,1800,0,1);
                                        INSERT INTO [".DATABASE."].[dbo].[webCronjob] ([scriptName],[lastExecution],[intervalExecution],[runTimes],[active]) VALUES ('clearIpsTimeLimitScreenshot',0,60,0,1);
                                        INSERT INTO [".DATABASE."].[dbo].[webCronjob] ([scriptName],[lastExecution],[intervalExecution],[runTimes],[active]) VALUES ('convertVipStampToInteger',0,21600,0,1);");
            if($tempCreate == true)
            {
                $this->addSymbol(22, $this->colors['black'], $this->colors['green']);  
                $this->addStringImg(30, "A tabela [".DATABASE."].[dbo].[webCronjob] foi criada.", $this->colors['black']); 
            } 
            else
            {
                $this->addSymbol(22, $this->colors['black'], $this->colors['lightred']);  
                $this->addStringImg(30, "A tabela [".DATABASE."].[dbo].[webCronjob] não pode ser criada.", $this->colors['black']); 
                $this->finalSentence();
                $this->__destruct();
            }
        } 
        else
        {
            $this->addSymbol(10, $this->colors['black'], $this->colors['green']);  
            $this->addStringImg(20, "A tabela [".DATABASE."].[dbo].[webCronjob] existe.", $this->colors['black']); 
        }                                                                         
    }
    
    private function queryStatement($query)
    {
        $query = $this->query($query);
        $getErrorsSql = mssql_get_last_message();
        if(empty($getErrorsSql) == false)
        {
            $this->addSymbol(42, $this->colors['black'], $this->colors['lightred']);  
            $this->addStringImg(50, $getErrorsSql, $this->colors['black']);
        }
        return $query;
    }
    
    private function checkTasks()
    {          
        $this->addSymbol(10, $this->colors['black'], $this->colors['green']);  
        $this->addStringImg(20, "Procurando tarefas.", $this->colors['black']); 
            
        $tasksQ = $this->query("SELECT * FROM ".DATABASE.".dbo.webCronjob WHERE active = 1");
        if(@mssql_num_rows($tasksQ) == 0)
        {
            $this->addSymbol(22, $this->colors['black'], $this->colors['lightred']);  
            $this->addStringImg(30, "Nenhuma tarefa foi cadastrada.", $this->colors['black']); 
        }
        else
        {
            while($tasks = @mssql_fetch_object($tasksQ))
            {
                $this->addSymbol(22, $this->colors['black'], $this->colors['yellow']);  
                $this->addStringImg(30, "Tarefa encontrada: ". $tasks->scriptName .".", $this->colors['black']);
                $scriptAddress = "cronjobTasks/".$tasks->scriptName.".txt";
                if(file_exists($scriptAddress) == true) 
                {
                    $scriptHandle = fopen($scriptAddress, "r");
                    $scriptContent = fread($scriptHandle, filesize($scriptAddress));
                    fclose($scriptHandle);
                    if($scriptHandle == false)
                    {
                        $this->addSymbol(32, $this->colors['black'], $this->colors['red']);  
                        $this->addStringImg(40, "Não foi possivel abrir o arquivo, verifique as permissões de pasta.", $this->colors['black']);
                    }
                    elseif((int)($tasks->lastExecution + $tasks->intervalExecution) < time())
                    {
                        $this->addSymbol(32, $this->colors['black'], $this->colors['lightblue']);  
                        $this->addStringImg(40, "Arquivo {$tasks->scriptName}.txt carregado.", $this->colors['black']);
                        $this->query("UPDATE ".DATABASE.".dbo.webCronjob SET lastExecution='".time()."', runTimes = runTimes + 1 WHERE idTask = ". $tasks->idTask);
                        eval($scriptContent);
                    }
                    else
                    {
                        $this->addSymbol(32, $this->colors['black'], $this->colors['lightred']);  
                        $this->addStringImg(40, "Essa tarefa será executa em: ".date("d/m/Y \a\s G:i:s", (int)($tasks->lastExecution + $tasks->intervalExecution)).".", $this->colors['black']);
                    }
                }
                else
                {
                    $this->addSymbol(32, $this->colors['black'], $this->colors['lightred']);  
                    $this->addStringImg(40, "Tarefa não invocada, arquivo {$scriptAddress} não encontrado.", $this->colors['black']);
                }
            } 
        }
        $this->query("UPDATE [".DATABASE."].[dbo].[webCronjobConfig] SET [execute] = 0;"); 
    }
    
    private function finalSentence() 
    {                   
        $this->addSymbol(10, $this->colors['black'], $this->colors['green']);  
        $this->addStringImg(20, "Fim da execução / debugger.", $this->colors['black']); 
    }   
    
    private function checkExecute()
    {
        $tempCheckQ = $this->query("SELECT [execute],[lastExecution] FROM [".DATABASE."].[dbo].[webCronjobConfig];"); 
        $tempCheck = mssql_fetch_object($tempCheckQ);
        if($tempCheck->execute == 0)
        {
            $this->query("UPDATE [".DATABASE."].[dbo].[webCronjobConfig] SET [execute] = 1, [lastExecution] = ".time().";");
            return true;
        }
        else
        {
            $this->addSymbol(10, $this->colors['black'], $this->colors['red']);  
            $this->addStringImg(20, "O cronjob ja esta em execução.", $this->colors['black']);
            
			$this->addSymbol(20, $this->colors['black'], $this->colors['yellow']);  
            $this->addStringImg(30, "Ultima invocação: ". date("d/m/Y \a\s G:i:s", $tempCheck->lastExecution), $this->colors['black']); 
			
			if($tempCheck->lastExecution+(60*10) < time())
			{
				$this->addSymbol(30, $this->colors['black'], $this->colors['lightred']);  
            	$this->addStringImg(40, "Tempo de limite atingido, execução liberada.", $this->colors['black']);
				return true;
			}
			else
	            return false;
        }   
    } 
}
new Cronjob();
?>