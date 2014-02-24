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
                            
                    <h1 style="margin-top: 20px;">Golden Archer</h1>
                        
                    <div id="etc">
                        <table>
                        <tr>
                            <td style="margin: 0px; padding: 0px; background-color: transparent;">
                            <form id="goldeArcherForm">
                            <div class="goldenArcherBox">
                                <div id="goldenArcherName">Golden Archer</div>
                                <div id="serialText">
                                     <p>Aqui você pode registrar os seriais que você possui em troca de vários itens!</p>
                                     <p>&nbsp;</p>
                                     <p>Os seriais podem ser obtidos em:</p>
                                      <p>- Eventos no site</p>
                                      <p>- Eventos no jogo</p>
                                      <p>- Eventos no forum</p>
                                     <p>E também pode ser concedidos como brindes por compras de golds e vips!</p>
                                     <p>&nbsp;</p>
                                     <p>Os itens aqui obtidos através dos seriais serão colocados no seu baú 0 do jogo.</p>
                                     <p>&nbsp;</p>
                                     <p>Os seriais são únicos! Ou seja, seu serial não pode ser registrado pelo login do seu amigo, ele pertence somente a você!</p>
                                     <p>&nbsp;</p>
                                     <p class="goldText bold">Digite o seu serial abaixo,<br />depois clique em Registrar serial.</p>
                                     <p>&nbsp;</p> 
                                     <p class="goldText">Por favor tenha certeza de diferenciar a letra O e número 0, a letra I e numero 1.</p> 
                                </div>
                                <div id="serialInput"><input type="text" name="serial" id="serial" value="0000-0000-0000" maxlength="14" onkeyup="this.value=this.value.toUpperCase()"></div>
                                <div id="serialCheck"><input type="submit" value="Registrar serial"></div>
                                <div id="serialResponse">
                                     <!--p class="yellow">Serial registrado!</p>
                                     <p class="yellow">Recebido: Bone Blade</p>
                                     <p class="white">Serial inválido!</p-->
                                </div>
                            </div>
                            </form>
                            <script type="text/javascript">
                            $("#goldeArcherForm").submit(function(){
                                
                                Verify ('?page=paneluser&option=GOLDEN_ARCHER&action=check&serial='+$("#serial").val(), 'serialResponse', 'get');
                                
                                return false;
                            });
                            </script>
                            </td>                                                     
                            <!--td style="margin: 0px; padding: 0px 0px 0px 10px; width: 100%; background-color: transparent; vertical-align: top;">
                            Atenção, esse sistema não é interligado com o Golden Archer do jogo!
                            </td-->
                        </tr> 
                        </table>
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