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
                            
                    <h1 style="margin-top: 20px;">Abrir ticket</h1>
                    <br />
                    
                    <div id="etc">
                        <div class="legend" style="margin-bottom: 25px;">
                            
                           <form action='?page=paneluser&amp;option=OPEN_TICKET&amp;Write=true' method="post">
                            <table border='0' cellpadding='1' cellspacing='1' width='438'>
                              <tr><td colspan='2' align='left' style="background: none;"><strong>Preencha todos os campos abaixo para abrir o pedido!</strong></td></tr>
                              <tr><td height=15 colspan="2" style="background: none;">&nbsp;</td></tr>
                              <tr>
                                <td align='right' width="20%" style="background: none;"><strong>Personagem:</strong></td>
                                <td align='left' style="background: none;"> <select name="character" class="inputbox">{#CHARACTER_LIST_TAG_OPTION}</select></td>
                              </tr>
                              <tr>
                                <td align='right' width="20%" style="background: none;"><strong>Setor:</strong></td>
                                <td align='left' style="background: none;"><input type="radio" name="sector" checked="checked" value="Suporte Tecnico" />Suporte Técnico<br /><input type="radio" name="sector" value="Suporte Financeiro" />Suporte Financeiro</td>
                              </tr>
                              <tr>
                                <td align='right' width="20%" style="background: none;"><strong>Assunto:</strong></td>
                                <td align='left' style="background: none;"><input name="subject" type="text" class="inputbox" size="50" maxlength="30" /></td>
                              </tr>
                              <tr>
                                <td align='right' width="20%" style="background: none;"><strong>Descrição:</strong></td>
                                <td align='left' style="background: none;"><textarea name="description" cols="40" rows="6">Descreva aqui o motivo para que nossa equipe possa analizar.</textarea></td>
                              </tr>
                              <tr>
                                <td colspan="2" style="background: none;"><div class="qdestaques">Não use os caracteres: " (aspas) ' (apostofro) ; (ponto e virgula)</div></td>
                              </tr>
                              <tr>
                                <td align='center' colspan="2" style="background: none;"><input type='Submit' class='button' value='Abrir Pedido' /></td>
                              </tr>
                            </table>
                           </form>
                            
                        </div>
                        <div class="quadrosOut">
                           {#RespostWrite}
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
