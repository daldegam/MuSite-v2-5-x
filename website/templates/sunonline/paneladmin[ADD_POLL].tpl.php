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
                    <a class="home" href="?">INÍCIO</a> &gt; <strong>PAINEL DO ADMIN</strong>
                </div>
                <h3 class="subtitle">Painel do admin</h3>
            </div>
            <!-- //Location & Sub Title -->

            <!-- Content -->
            
            
            
            <div class="sub_wrap">
                <div id="etc">
                    {#INCLUDE:menuPanelAdmin} 
                            
                    <h1 style="margin-top: 20px;">Adicionar Enquete</h1>
                    
                    <div class="legend" style="margin-top: 25px; padding: 10px;">
                      <h3 class="legend-title"><span style="font-size: 13px;">Preencha os dados abaixo:</span></h3>
                          <form action="?page=paneladmin&option=ADD_POLL&action=insert" method="post" class="quadros">
                            Pergunta da enquete: <br /><input name="question" type="text" value="" maxlength="50" class="inputbox" /><br />
                            Resposta 01: <br /><input name="answer[]" type="text" value="" maxlength="50" class="inputbox" /><br />
                            Resposta 02: <br /><input name="answer[]" type="text" value="" maxlength="50" class="inputbox" /><br />
                            Resposta 03: <br /><input name="answer[]" type="text" value="" maxlength="50" class="inputbox" /><br />
                            Resposta 04: <br /><input name="answer[]" type="text" value="" maxlength="50" class="inputbox" /><br />
                            Resposta 05: <br /><input name="answer[]" type="text" value="" maxlength="50" class="inputbox" /><br />                                              
                            <input type="submit" class="button" value="Cadastrar" />
                          </form>
                         <div class="quadrosOut">
                            {#POLL_RESULT_ADMIN}
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
