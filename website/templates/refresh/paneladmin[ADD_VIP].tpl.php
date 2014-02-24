{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                <h1>Painel do admin</h1>
                {#INCLUDE:menuPanelAdmin}
                    <br /> 					
                    <h1>Adcionar Vips</h1>
                    <div class='quadros'>
                      <form action="?page=paneladmin&amp;option=ADD_VIP&amp;Write=true" method="post">
                       	<em>Login:</em><br /><input name="account" type="text" value="" /> <br />
                       	<em>Plano:</em><br /><select name="flat"><option value="1">{#VIP_NAME_1}</option><option value="2">{#VIP_NAME_2}</option><option value="3">{#VIP_NAME_3}</option><option value="4">{#VIP_NAME_4}</option><option value="5">{#VIP_NAME_5}</option></select> <br />
                       	<em>Dias:</em><br /><input name="days" type="text" value="0" /> dias.<br />
                        <input type="submit" value="Adicionar." class="button" />
                      </form>
                    </div>
                    {#RESULTTPL}
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}
