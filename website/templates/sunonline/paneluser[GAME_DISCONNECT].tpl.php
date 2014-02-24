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
                            
                    <h1 style="margin-top: 20px;">Desconectar conta</h1>
                    <br />
                    
                    <div class="legend" style="margin-bottom: 25px;">
                        <h3 class="legend-title"><span style="font-size: 13px;">Digite os dados abaixo:</span></h3>
                        <div style="margin-bottom: 8px; margin-top: 10px;">
                            
                            <p><strong>Essa opção irá desconectar sua conta do jogo.</strong></p>
                            <form action="?page=paneluser&amp;option=GAME_DISCONNECT&amp;Write=true" method="post">
                                <p>
                                    <label>Minha senha:</label>
                                    <input name='password' type='password' maxlength='10' />
                                </p>
                                <p>
                                    <input type='submit' value='Desconectar' class='button' />
                                </p>
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