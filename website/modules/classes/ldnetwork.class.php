<?php 
class ldNetwork 
{
    private $host = NULL, $port = NULL, $limit = NULL, $objCon = NULL, $strRespose = NULL;
    
    public function __construct($host, $port, $limit = 5)
    {
        $this->host     = $host;
        $this->port     = $port;
        $this->limit    = $limit;   
    }
     
    public function openConnection()
    {
        $this->objCon = @fsockopen($this->host, $this->port, $errno, $errstr, $this->limit);
        if($this->objCon == false)
            exit("Error ({$errno}): {$errstr}");
    } 
     
    public function getResponse()
    {
        $this->strRespose = NULL;
        $this->strRespose = fread($this->objCon, 4098);
    }
    
    public function printResponse($ascii = false, $return = false)
    {
        $tmpResponse = $ascii == false ? strtoupper(bin2hex($this->strRespose)) : $this->strRespose;
        if($return == true) return $tmpResponse;
        else printf("Last response: %s\n", $tmpResponse);
    }
     
    public function sendPacket($packet)
    {
        fwrite($this->objCon, $packet, strlen($packet));
    }
}

?>