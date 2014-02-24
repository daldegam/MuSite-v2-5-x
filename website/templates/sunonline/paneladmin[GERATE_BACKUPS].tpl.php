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
                            
                    <h1 style="margin-top: 20px;">Gerar Backup</h1>
                    
                    <div class="legend" style="margin-top: 25px; padding: 10px;">
                      <h3 class="legend-title"><span style="font-size: 13px;">Preencha os dados abaixo:</span></h3>
                         <form action="?page=paneladmin&amp;option=GERATE_BACKUPS&amp;Write=true" method="post">
                            <em>Banco de dados:</em> <select name='database' class="inputbox">{#DATABASE_LIST}</select><br />
                            <em>Nome do arquivo:</em> <input name="filename" type="text" value="{#FILE_NAME_SUGESTION}" class="inputbox"/> <strong>(Recomendamos não alterar)</strong><br />
                            <em>Salvar em:</em> <input name="dirname" type="text" value="C:\Backups\"  class="inputbox"/><br />
                            <input type="submit" value="Criar Backup" class="button" />
                         </form>
                         
                         <div class="quadrosOut">
                            {#RESULTTPL}
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