<?php
new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
class ldGame extends ldNetwork
{
    public function disconnectPlayer($account)
    {
        try
        {                            
            if(empty($account) == true || strlen($account) > 10)
                throw new Exception(GAME_INCORRENCT_LOGIN);
            
            $this->openConnection();
            
            $this->sendPacket("\xC1\x13\xA0\x00\x00\x00\x00\x00".str_pad($account, 10, "\x00")."\x00");

            $this->getResponse();
            $tmpResponse = $this->printResponse(false, true);
            $tmpResponse = hexdec(substr($tmpResponse, 16, 2));
            if($tmpResponse == 1)
            {
                sleep(1);
                $this->sendPacket("\xC1\x13\xA0\x00\x00\x00\x00\x00".str_pad($account, 10, "\x00")."\x00");
                sleep(1);
                $this->sendPacket("\xC1\x13\xA0\x00\x00\x00\x00\x00".str_pad($account, 10, "\x00")."\x00");
                sleep(1);
                $this->sendPacket("\xC1\x13\xA0\x00\x00\x00\x00\x00".str_pad($account, 10, "\x00")."\x00"); 
                throw new Exception(GAME_SUCCESS_DISCONNECT." ".$account);
            }
            else
                throw new Exception(GAME_ERROR_DISCONNECT);
        } 
        catch ( Exception $msg ) 
        {
            return $msg->getMessage();
        }
    }
    
    public function sendMessageToAll($message)
    {
        try
        {                            
            if(empty($message) == true || strlen($message) > 60)
                throw new Exception(GAME_MSG_INVALID);
            
            $this->openConnection();
                                                                                                                                 
            $this->sendPacket("\xC1\x45\xA1\x00\x00\x00\x00\x00".str_pad($message, 60, "\x00")."\x00");

            $this->getResponse();
            $tmpResponse = $this->printResponse(true, true);          
            $tmpResponse = substr($tmpResponse, 3, strlen($message)); 
            if($tmpResponse == $message)
                throw new Exception(true);
        } 
        catch ( Exception $msg ) 
        {
            return $msg->getMessage();
        }
    }
    
    public function sendMessage($account, $message)
    {
        try
        {                            
            if(empty($account) == true || strlen($account) > 10)
                throw new Exception(GAME_INCORRENCT_LOGIN);
            
            if(empty($message) == true || strlen($message) > 60)
                throw new Exception(GAME_MSG_INVALID);
            
            $this->openConnection();
                                                                                                                                 
            $this->sendPacket("\xC1\x4F\xA2\x00\x00\x00\x00\x00".str_pad($message, 60, "\x00")."".str_pad($account, 10, "\x00")."\x00");

            $this->getResponse();
            /*$tmpResponse = $this->printResponse(false, false);          
            $tmpResponse = substr($tmpResponse, 3, strlen($message)); 
            if($tmpResponse == $message) */
                throw new Exception(true); 
        } 
        catch ( Exception $msg ) 
        {
            return $msg->getMessage();
        }
    }
}

/*$joinserver = new joinserver("season2.mudkt.com.br", "55970"); 
$joinserver->sendMessageToAll("Atenção: Esta mensagem de teste foi enviada pelo site!");
echo "<br><br>";
$joinserver->sendMessage("daldegam", "Atenção: Esta mensagem foi enviada pelo site!");
echo "<br><br>"; 
$joinserver->disconnectPlayer("daldegam");
 */
?>
