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
                            
                    <h1 style="margin-top: 20px;">Abrir denuncias</h1>
                    <br />
                    
                    <div class="legend" style="margin-bottom: 25px;">
                        <h3 class="legend-title"><span style="font-size: 13px;">Digite os dados abaixo:</span></h3>
                        <div style="margin-bottom: 8px; margin-top: 10px;">
                            
                            <form action='?page=paneluser&amp;option=OPEN_COMPLAINTS&amp;Write=true' method='post' enctype='multipart/form-data'>
                               <table border="0" cellpadding="0" cellspacing="2">
                                 <tr>
                                   <td style="background: none;"><strong>Foto para denuncia:</strong></td>
                                   <td style="background: none;"><input name='image' type='file' size="16" />
                                     (.jpg / .gif / .png)</td>
                                 </tr>
                                 <tr>
                                   <td style="background: none;"><strong>Descri&ccedil;&atilde;o:</strong></td>
                                   <td style="background: none;"><textarea name='descricao' cols="40" rows="4"></textarea></td>
                                 </tr>
                                 <tr>
                                   <td align='center' colspan='2' style="background: none;"><input type='submit' class='button' value='Enviar Denuncia' /></td>
                                 </tr>
                               </table>
                            </form>
               
                            <div style="margin-top: 16px; margin-bottom: 16px; padding-left: 5px;" id="classe_change">
                               {#RespostWrite}
                            </div>
                            
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