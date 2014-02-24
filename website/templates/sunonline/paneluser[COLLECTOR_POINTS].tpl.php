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
                            
                    <h1 style="margin-top: 20px;">Coletor de pontos</h1>
                    <br />
                    
                    
                    <div id="etc">
                        
                        <div class="legend" style="margin-bottom: 25px;">
                            <h3 class="legend-title"><span style="font-size: 13px;">Leia as instru&ccedil;&atilde;es abaixo:</span></h3>
                            <div style="margin-bottom: 8px; margin-top: 10px;">
                                
                                O coletor de pontos é um serviço oferecido no site para trocar determinados itens do jogo por pontos no site.<br />
                                Esses pontos podem ser utilizados nos eventos do site, como bolões, leilões e entre outros.<br /><br />
                                
                                <strong>O sistema atualmente, esta oferecendo <u>{#POINTS_PER_ITEM}</u> pontos por cada unidade que você dispor do item <u>{#ITEM_NAME}</u> (não importa suas condições como level e etc.).</strong><br /><br /> 
                                
                                Caso você possua alguma unidade desse item no seu bau principal do jogo, clique no botão abaixo e converta os mesmos por pontos no site.<br /><br />
                                <form action="?page=paneluser&option=COLLECTOR_POINTS&action=collect" method="post">
                                <input type="submit" value="Coletar itens e converter em pontos" class="button" />
                                </form>
                                <br />
                                {#RESPONSE_WRITE}
                                
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
