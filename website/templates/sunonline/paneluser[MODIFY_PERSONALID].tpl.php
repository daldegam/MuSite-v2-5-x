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
                            
                    <h1 style="margin-top: 20px;">Alterar Personal ID</h1>
                    <br />
                    <div id="etc" style="margin-bottom: 26px;">
                    {#RespostWrite}
                    </div>
                    
                    <div class="legend" style="margin-bottom: 25px;">
                          <h3 class="legend-title"><span style="font-size: 13px;">Digite os dados abaixo:</span></h3>
                             <div style="margin-bottom: 8px; margin-top: 10px;">
                               <form action="?page=paneluser&amp;option=MODIFY_PERSONALID&amp;Write=true" method="post">
                                <div class="qdestaques2" style="margin-bottom: 16px;"><strong>Atenção</strong>, o personal ID serve para quando você vai deletar ou sair de uma guild ou deletar um personagem.<br />
                                Com o Personal ID sua conta estará mais segura.</div>
                                Digite um número de 7 caracters: <input name='pid' type='text' class="inputbox" value='' maxlength='7' /><br />
                                Digite sua senha: <input name='pwd' type='password' class="inputbox" value='' maxlength='10' /><br />
                                <input type='submit' class='button' value='Alterar Personal ID' style="margin-top: 8px;"/>
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