<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldTpl" ) == false ) {
    new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    class ldTpl
	{
      var $file;
      var $content_file;
	  var $includeFile;
	  var $includeContent_file;
	  var $tags = array();
	  var $tags_count = 0; 
	  
		public function open($file) 
        {
            $file = urlencode($file);
            $file = str_replace(array("%2F","%5B","%5D"), array("/","[","]"), $file);
            $this->file = @fopen($file, "r");
            if($this->file == false) exit( printf(FILE_NOT_FOUND, $file) );
            $this->content_file = @fread($this->file, filesize($file));
            if($this->content_file == false) exit(ERROR_READING_FILE." ".$file);        
        }
        
        public function includeOpen($file) 
		{
			$this->includeFile = @fopen($file, "r");
			if($this->includeFile == false) exit( printf(FILE_NOT_FOUND, $file) );
			$this->includeContent_file = @fread($this->includeFile, filesize($file));
			if($this->includeContent_file == false) exit(ERROR_READING_FILE." ".$file);		
		}
        
		public function set($tag,$value) 
		{
            $value = preg_replace(array('/<\s*((?i)\?|\%|script(\s*language)?)\=?((?i)php)?(>)?/', '/(\%|\?)>/'), array('',''), $value);
			$this->tags[$this->tags_count++] = array("Name" => $tag, "Value" => $value);
		}
        
        public function includes()
        {
            $lastPos = 0;
            while($stop == false)
            {
                if(($beginCurrentPos = stripos($this->content_file, "{#INCLUDE:", $lastPos)) !== false)
                {
                    //echo "Posição de inicio: {$beginCurrentPos}<br />";
                    $lastPos = ++$beginCurrentPos;
                    
                    if(($endCurrentPos = stripos($this->content_file, "}", $lastPos)) !== false)
                    {
                        //echo "Posição de fim: {$endCurrentPos}<br />";
                        $lastPos = ++$endCurrentPos;
                        
                        $fileNameInclude = substr($this->content_file, $beginCurrentPos+9, (($endCurrentPos-1) - ($beginCurrentPos+9)));
                        
                        $this->includeOpen("templates/".constant("TEMPLATE_DIR")."/".$fileNameInclude.".tpl.php");
                        $this->content_file = str_replace("{#INCLUDE:".$fileNameInclude."}", $this->includeContent_file, $this->content_file);
                    } 
                    else
                        $stop = true;     
                } 
                else
                    $stop = true;
            }
        }
        
		public function show() 
		{
            global $PANELUSER_MODULE;
            $this->includes();
            for($Count_Sets = 0; $Count_Sets < count($this->tags); $Count_Sets++) 
			{
                $this->content_file = str_replace("{#".$this->tags[$Count_Sets]['Name']."}", $this->tags[$Count_Sets]['Value'], $this->content_file);
			}
			eval("?>".$this->content_file."<?");
		
		}
	}
	
}

?>