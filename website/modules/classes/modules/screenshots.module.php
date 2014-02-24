<?php
/**
* Modulo de Screenshots
*/
class screenshots implements InterfaceModules
{
    /**
    * Função onde ficam as informações principais da classe
    * 
    */
    public function settings() //Função obrigatória
    {                                           
    }
    
    /**
    * Carrega um template para mostrar para o usuario
    */
    public function loadTemplate($name)
    {
        global $ldTpl;
        $ldTpl->open("templates/".TEMPLATE_DIR."/{$name}.tpl.php");
    }
    
    /**
    * Registra variaveis para os templates
    * Exemplo: {#BLABLABLA} significa: Texto definido...
    * Como usar: $this->registerVariable("BLABLABLA", "Texto definido...");
    */
    public function registerVariable($tag, $value)
    {
        global $ldTpl;
        $ldTpl->set($tag, $value);
    }
    
    /**
    * Buscar as top X screeshots no banco de dados, chamada na index.tpl.php
    */
    public function getScreenshots()
    {
        global $ldMssql, $SCREENSHOTS;
        $getScreens = $ldMssql->query("SELECT TOP ".(int)$SCREENSHOTS['TOP_HOME']." [id],[image],[uploadBy],[rate],[sw],[sy] FROM [dbo].[webScreenshots] ORDER BY [rate] DESC");
        if(mssql_num_rows($getScreens) == 0)
            echo "<td>Nenhuma Screenshot foi enviada.</td>";
        else
        {
            $tmpTplReturn = NULL;
            while($screen = mssql_fetch_object($getScreens))
            {
                $getCharacterQ = mssql_query("SELECT [GameIDC] FROM [".DATABASE_CHARACTERS."].[dbo].[AccountCharacter] WHERE [Id] = '{$screen->uploadBy}'");
                $getCharacter = mssql_fetch_object($getCharacterQ);
                $getCharacter = empty($getCharacter->GameIDC) || strlen($getCharacter->GameIDC) < 2 ? $screen->uploadBy : $getCharacter->GameIDC; 
                $tmpTplReturn .= "<td><a href=\"?page=loadModule&module=screenshots&action=viewImage&id={$screen->id}\">{$getCharacter}<br /><img src=\"modules/uploads/screenshots/{$screen->image}.small.jpg\" style=\"width: {$screen->sw}px; height: {$screen->sy}px;\" /><br />Voto".($screen->rate > 0 ? "s":"").": {$screen->rate}</a></td>";
            }
            echo $tmpTplReturn;
        }                                
    }
    
    /**
    * View screenshot, chamada via get 
    */
    public function viewScreenshot()
    {
        global $ldMssql;
        $getScreen = $ldMssql->query("SELECT [id],[image],[legend],[uploadBy],[date],[rate],[cw],[cy] FROM [dbo].[webScreenshots] WHERE [id] = ".(int)$_GET['id']);
        if(mssql_num_rows($getScreen) == 0)
            $tmpTplReturn .= "<td>Screenshot não encontrada.</td>";
        else
        {
            $screen = mssql_fetch_object($getScreen);
            $getCharacterQ = mssql_query("SELECT [GameIDC] FROM [".DATABASE_CHARACTERS."].[dbo].[AccountCharacter] WHERE [Id] = '{$screen->uploadBy}'");
            $getCharacter = mssql_fetch_object($getCharacterQ);
            $getCharacter = empty($getCharacter->GameIDC) || strlen($getCharacter->GameIDC) < 2 ? $screen->uploadBy : $getCharacter->GameIDC;
            $this->tmpTplReturn .= "<tr>
                                          <td align=\"center\">
                                            <img src=\"modules/uploads/screenshots/{$screen->image}.common.jpg\" style=\"width: {$screen->cw}px; height: {$screen->cy}px;\" />
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                            <strong>Legenda:</strong> {$screen->legend}<br />
                                            <strong>Foto enviada por:</strong> {$getCharacter}<br />
                                            <strong>Enviada em:</strong> ". date("d/m/y \a\s G:i:s", $screen->date) ."<br />
                                            <strong>Quantidade de voto".($screen->rate > 0 ? "s":"").":</strong> {$screen->rate}<br />
                                            <form action=\"?page=loadModule&module=screenshots&action=voteImage&id={$_GET['id']}\" method=\"post\">
                                                <strong>Gostou da imagem:</strong> 
                                                <input type=\"submit\" value=\"Votar\" class=\"button\" />
                                            </form>
                                          </td>
                                      </tr>";
        }
        $this->registerVariable("SCREENSHOT_VIEW", $this->tmpTplReturn);
        $this->loadTemplate("screenshots");                                
    }
    
    /**
    * Vote screenshot, chamada via get 
    */
    public function voteScreenshot()
    {
        global $ldMssql;
        $getScreen = $ldMssql->query("SELECT [id],[image],[uploadBy],[rate],[cw],[cy] FROM [dbo].[webScreenshots] WHERE [id] = ".(int)$_GET['id']);
        $tmpTplReturn = NULL;
        if(mssql_num_rows($getScreen) > 0)                                                            
        {   
            $checkVoteQ = mssql_query("SELECT [timestamp] FROM [dbo].[webScreenshotsIps] WHERE [ip] = '".$_SERVER['REMOTE_ADDR']."'");
            $checkVote = mssql_fetch_object($checkVoteQ);
            if((int)$checkVote->timestamp < time())
            {
                $ldMssql->query("UPDATE [dbo].[webScreenshots] SET [rate]=[rate]+1 WHERE [id] = ".(int)$_GET['id']);
                mssql_query("INSERT INTO [dbo].[webScreenshotsIps] ([login],[ip],[timestamp]) VALUES ('".$_SESSION['LOGIN']."','".$_SERVER['REMOTE_ADDR']."', ". ( time()+(60*60*24) ).")");
                $this->tmpTplReturn = "<tr><td><div class=\"qdestaques2\">Voto computado com sucesso.</div></td></tr>";
            }
            else
                $this->tmpTplReturn = "<tr><td><div class=\"qdestaques\">Você só pode votar novamente nessa screenshot em 24 horas.</div></td></tr>";
        }
    }
    
    /**
    * Checa se o usuário esta logado, e retorna um objecto com o numero do previlegio dele caso esteja logado.
    */
    public function checkLogin()
    {
         global $ldMssql;
         if(!isset($_SESSION['LOGIN']) && empty($_SESSION['LOGIN']))
            return false;
         $checkPrevilegy = $ldMssql->query("SELECT previlegy FROM dbo.webPrevilegy WHERE username='". $_SESSION['LOGIN'] ."'");
         if(mssql_num_rows($checkPrevilegy) == 0)
            return (int)0;
         else
            return mssql_fetch_object($checkPrevilegy);
    }
    
    /**
    * Verificar se o plano da conta possui permissão para acessar a opção
    */
    private function checkPermissionModule($module)
    {
        global $PANELUSER_PREMISSIONS, $TABLES_CONFIGS, $ldMssql;
        $findAccountVipQ = $ldMssql->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='". $_SESSION['LOGIN'] ."'");
        $findAccountVip = mssql_fetch_object($findAccountVipQ);            
        if($PANELUSER_PREMISSIONS[$module][(int)$findAccountVip->type + 1] == 1) return true;
        else return false;
    }
    
    /**
    * Painel de controle que gerencia as screenshots
    */
    public function panelManager()
    {
         global $ldMssql, $PANELUSER_PREMISSIONS, $SCREENSHOTS;
         if($this->checkLogin() === false)
         {
             $this->loadTemplate("loginerror");
             return;
         }
         elseif($PANELUSER_PREMISSIONS['SCREENSHOT'][0] == 0)
         {
             $this->loadTemplate("paneluser[DESACTIVE]");
             return;
         }
         elseif($this->checkPermissionModule("SCREENSHOT") == false)
         {
             $this->loadTemplate("paneluser[ACCESSDANIED]");
             return;
         }
         
         if($_GET['subAction'] == "delete")
         {
             if(is_numeric($_POST['id']) == false)
             {
                $writeRespost = "<div class=\"qdestaques\">Sem fotos para deletar.</div>";
             }
             else
             {                                                                              
                 $screen = $ldMssql->query("SELECT [image] FROM [dbo].[webScreenshots] WHERE ". ($this->checkLogin()->previlegy != 2 ? "[uploadBy] = '".$_SESSION['LOGIN']."' AND" : "") ." [id] = ".(int)$_POST['id']);
                 $screen = mssql_fetch_object($screen);
                 @unlink("modules/uploads/screenshots/{$screen->image}.common.jpg");
                 @unlink("modules/uploads/screenshots/{$screen->image}.small.jpg");
                 $ldMssql->query("DELETE FROM [dbo].[webScreenshots] WHERE ". ($this->checkLogin()->previlegy != 2 ? "[uploadBy] = '".$_SESSION['LOGIN']."' AND" : "") ." [id] = ".(int)$_POST['id']);
                 $writeRespost = "<div class=\"qdestaques\">Screenshot deletada com sucesso.</div>"; 
             }
         }
         elseif($_GET['subAction'] == "upload")
         {
             if(is_uploaded_file($_FILES['photo']['tmp_name']) == false)
                 $writeRespost = "<div class=\"qdestaques\">Selecione o arquivo para enviar.</div>"; 
             elseif(empty($_POST['legend']) == true)
                 $writeRespost = "<div class=\"qdestaques\">Escreva uma legenda para a screenshot.</div>"; 
             else
             {                
                 $dlImage = new DLImage();
                 if($dlImage->uploadImage($_FILES['photo'], true, "modules/uploads/screenshots/") == true)
                 {
                     if($dlImage->info['width'] > $SCREENSHOTS['MAX_WIDTH'])
                        $common = $dlImage->resizeAndSave($SCREENSHOTS['MAX_WIDTH'] ,0, false, true, false, "modules/uploads/screenshots/", "jpg", false, 'common');
                     else
                     {
                        $dlImage->saveImage(false, "modules/uploads/screenshots/", 'jpg', 'common');
                        $common = array(0 => NULL, $dlImage->info['width'], $dlImage->info['height']);
                     }
                     $small = $dlImage->resizeAndSave(100, 100, false, true, false, "modules/uploads/screenshots/", "jpg", false, 'small');
                     $dlImage->deleteBufferImage();
                     
                     $ldMssql->query("INSERT INTO [dbo].[webScreenshots] ([image] ,[uploadBy] ,[date] ,[rate] ,[legend] ,[sw] ,[sy] ,[cw] ,[cy]) VALUES ('{$dlImage->finalName}' ,'{$_SESSION['LOGIN']}' ,".time()." ,0  ,'{$_POST['legend']}' ,{$small[1]} ,{$small[2]} ,{$common[1]} ,{$common[2]})");
                     $writeRespost = "<div class=\"qdestaques2\">Screenshot enviada com sucesso.</div>";
                 }     
                 else $writeRespost = "<div class=\"qdestaques\">Arquivo inválido.</div>";
             }
         }
         
         $amountScreens = $ldMssql->query("SELECT count([id]) count FROM [dbo].[webScreenshots] WHERE [uploadBy] = '".$_SESSION['LOGIN']."'");
         $this->registerVariable("SCREENSHOTS_AMOUNT", mssql_fetch_object($amountScreens)->count);
         
         $deleteOptScreens = $ldMssql->query("SELECT [id], [legend], [rate] FROM [dbo].[webScreenshots] ". ($this->checkLogin()->previlegy != 2 ? "WHERE [uploadBy] = '".$_SESSION['LOGIN']."'" : ""));
         while($screen = mssql_fetch_object($deleteOptScreens))
         {
             $tmpOpt .= "<option value=\"{$screen->id}\">{$screen->legend} - Votos: {$screen->rate}</option>";
         }
         $this->registerVariable("SCREENSHOTS_OPTIONS_DELETE", $tmpOpt);
         
         $this->registerVariable("RespostWrite", $writeRespost);
         $this->loadTemplate("paneluser[SCREENSHOT]");
    }
    
    
    /**
    * View all, chamada via get 
    */
    public function viewAll()
    {
        global $ldMssql;
        $getScreen = $ldMssql->query("SELECT [id],[image],[rate],[sw],[sy] FROM [dbo].[webScreenshots] ORDER BY [rate] DESC");
        if(mssql_num_rows($getScreen) == 0)
            $tmpTplReturn .= "<td>Screenshot não encontrada.</td>";
        else
        {
            $this->tmpTplReturn .= "<tr>";
            while($screen = mssql_fetch_object($getScreen))
            {                                                    
                $this->tmpTplReturn .= "<td align=\"center\">
                                        <a href=\"?page=loadModule&module=screenshots&action=viewImage&id={$screen->id}\">
                                        <img src=\"modules/uploads/screenshots/{$screen->image}.small.jpg\" style=\"width: {$screen->sw}px; height: {$screen->sy}px;\" /><br />
                                        <strong>Quantidade de voto".($screen->rate > 0 ? "s":"").":</strong> {$screen->rate}
                                        </a>
                                        </td>";
                if((++$i % 5) == 0) $this->tmpTplReturn .= "</tr><tr>";
                
            }
            $this->tmpTplReturn .= "</tr>";
        }
        $this->registerVariable("SCREENSHOT_VIEW", $this->tmpTplReturn);
        $this->loadTemplate("screenshots");                                
    }
    
    /**
    * Aqui você monta a estrutura inicial do seu modulo
    */
    public function __construct()
    {
        /**
        * Exemplos de como usar as funções base
        * 
        * Registra variaveis para os templates, {#BLABLABLA} significa: Texto definido...
        * Codigo: $this->registerVariable("BLABLABLA", "Texto definido...");
        * 
        * Abrindo o template screenshots.tpl.php que estana pasta de templates: 
        * Codigo: $this->loadTemplate("screenshots"); 
        */
        switch($_GET['action'])
        {
            case "viewAll":
                $this->viewAll();
                break;
            case "viewImage":
                $this->viewScreenshot();
                break;
            case "voteImage":
                $this->voteScreenshot();
                $this->viewScreenshot();
                break;
            case "panelManager":
                $this->panelManager();
                break;
        }
    }
}
$screenshot = new screenshots();  
?>