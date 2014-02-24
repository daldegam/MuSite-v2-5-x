{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser} 

            <div class="contentBox">
                <h2 class="noMargin">Transferir {#CASH_NAME}/{#CASH_NAME2}</h2>
                <p><strong>Dados da minha conta</strong></p>                                     
                <form action="?page=paneluser&amp;option=TRANSFER_CASH&amp;action=transfer" method="post">
                	<p>
                        <label>Meu login:</label>
                        <input type='text' class="inputbox" value="{#MEMB___ID}" disabled="disabled" />
                    </p>
                    <p>
                        <label>Quantidade de {#CASH_NAME}:</label>                              
                        <input type='text' class="inputbox" value="{#CASH_AMOUNT}" disabled="disabled" />
                    </p>
                    <p>
                        <label>Quantidade de {#CASH_NAME2}:</label>
                        <input type='text' class="inputbox" value="{#CASH_AMOUNT2}" disabled="disabled" />
                    </p>
                
                <p style="margin-top: 20px;"><strong>Dados para trasferencia</strong></p>
                	<p>
                        <label>Login de destino:</label>
                        <input name='usernameDestine' type='text' class="inputbox" maxlength='10' />
                    </p>
                    <p>
                        <label>Tipo de moeda a transferir:</label>
                        <select name='typeCash'><option value='1'>{#CASH_NAME}</option><option value='2'>{#CASH_NAME2}</option></select>
                    </p>
                    <p>
                        <label>Quantidade a transferir:</label>
                        <input name='amount' type='text' class="inputbox" maxlength='10' />
                    </p> 
                    <p>
                        <input type='submit' value='Transferir' class='button'/>
                    </p>
                </form>
                
                {#RespostWrite}
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}
