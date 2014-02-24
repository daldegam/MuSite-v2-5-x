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
                            
                    <h1 style="margin-top: 20px;">Limpar Bau</h1>
                    <div>
                        <div style="margin-bottom: 8px;">{#RespostWrite}</div>
                        <div class="qdestaques">Atenção, as ações realizadas nessa página não podem ser desfeitas.</div>
                        <div id="classe_change"  style="margin-top: 10px; padding-left: 4px;">
                        <form action="?page=paneluser&amp;option=CLEAN_VAULT&amp;Write=true" method="post">
                        <em>Limpar bau 1:</em><br /><select name='Vault1' class="inputbox"><option value='0'>Não</option><option value='1'>Sim</option></select><br />
                        <em>Limpar bau 2:</em><br /><select name='Vault2' class="inputbox"><option value='0'>Não</option><option value='1'>Sim</option></select><br />
                        <em>Limpar zen:</em><br /><select name='Zen' class="inputbox"><option value='0'>Não</option><option value='1'>Sim</option></select><br />
                        <em>Minha senha:</em><br /><input name='Pwd' type='password' class="inputbox" maxlength='10' /><br />
                        <input type='submit' class='button' value='Limpar' style="margin-top: 6px;"/><br />
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