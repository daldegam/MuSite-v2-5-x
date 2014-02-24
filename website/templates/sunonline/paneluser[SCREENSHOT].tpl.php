{#INCLUDE:header} 

        <!-- Body -->
        <div id="subbody">

        <!-- Left Wrap --> 
            <!-- Body Left -->
            {#INCLUDE:menuLeft}
            <!-- //Body Left --> 
        <!-- //Left Wrap -->

        <!-- Right Wrap -->
        <div id="subright">
                                             
            <!-- Location & Sub Title -->
            <div class="locationtitle">
                <div class="location">
                    <a class="home" href="?">INÍCIO</a> &gt; <strong>PAINEL DO USUÁRIO</strong>
                </div>
                <h3 class="subtitle">Painel do usuário</h3>
            </div>
            <!-- //Location & Sub Title -->

            <!-- Content -->
            
            
            
            <div class="sub_wrap">
                <div id="etc">
                    {#INCLUDE:menuPanelUser} 
                            
                    <h1 style="margin-top: 20px;">Screenshots</h1>
                    <br />
                    
                    <div id="etc" style="margin-bottom: 26px;">
                    {#RespostWrite}
                    </div>
                    
                    <div class="legend" style="margin-bottom: 25px;">
                        <h3 class="legend-title"><span style="font-size: 13px;">Enviar novas screenshots</span></h3>
                        <div style="margin-bottom: 8px; margin-top: 10px;">
                        <form action='?page=loadModule&module=screenshots&action=panelManager&subAction=upload' method='post' enctype='multipart/form-data'>
                        <table width='100%'>
                            <tr>               
                                <td>
                                    <strong>Quantidade de screenshots que já enviei:</strong> <strong>{#SCREENSHOTS_AMOUNT}</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Enviar nova screenshot:</strong> <em>Somente são aceitos os formatos: .jpg, .png, .gif, .bmp</em> <br />
                                    Legenda da screenshot: <input type='text' name='legend' maxlength="50" /><br />
                                    Selecione a foto: <input type='file' name='photo' />
                                    <input type='submit' class='button' value='Enviar' /> 
                                </td>
                            </tr>
                        </table>
                        </form>
                        </div>
                    </div>
                    <div class="legend" style="margin-bottom: 25px;">
                        <h3 class="legend-title"><span style="font-size: 13px;">Apagar screenshots</span></h3>
                        <div style="margin-bottom: 8px; margin-top: 10px;">
                        <form action='?page=loadModule&module=screenshots&action=panelManager&subAction=delete' method='post'>
                        <table width='100%'>
                            <tr>
                                <td>
                                    <strong>Selecione abaixo a screenshot a ser apagada:</strong><br /><select name="id">{#SCREENSHOTS_OPTIONS_DELETE}</select><input type='submit' class='button' value='Deletar' /> 
                                </td>
                            </tr>
                        </table>
                        </form>
                        </div>
                    </div>
                    
                                                 
                </div>           
            </div>
            <!-- //Content -->

        </div>
        <!-- //Right Wrap -->
               
    </div>     
    <!-- //Body -->

     
        <!-- Footer -->
                          
<div id="subbottomPanel"></div>
{#INCLUDE:footer}