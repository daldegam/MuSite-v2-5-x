{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <div class="contentBox">
            	<h2 class="noMargin">Rankings</h2>
                <form action="" method="get" id="formRank" style="float: left; width: 45%;">
                	<p>
                    	<strong>Buscar por per&iacute;odo</strong>
                    </p>
                      <input type="hidden" name="page" value="rankings" />
                    <p>
                        <label>Período:</label>
                        <select name="period" id="period" onchange="checkType();">                   
                            <option value="0">Tempo real</option>
                            <option value="1">Semanal</option>
                            <option value="2">Mensal</option>
                        </select>
                    </p>
                    <p>
                        <label>Tipo:</label> 
                        <select name="type" id="type" onchange="checkPeriod();">                   
                            <option value="1">Resets</option>
                            <option value="5">Master Resets</option>
                            <option value="2">Level</option>       
                            <option value="4">Pk (Mortes)</option>
                            <option value="3">Guilds</option>
                            <?php global $RANKING_CONFIGS; echo ($RANKING_CONFIGS['GENS'] == true ? "<option value=\"8\">Gens - Familia Duprian</option><option value=\"9\">Gens - Familia Vanert</option>":NULL); ?>
                        </select>
                    </p>
                    <p>
                        <label>Quantidade:</label>
                        <select name="top">                   
                            <option value="10">10</option>    
                            <option value="50">50</option>    
                            <option value="100">100</option>    
                            <option value="200">200</option>  
                        </select>
                    </p>
                    <p>
                        <input type="submit" value="Carregar" class="button" />
                    </p>    
                </form>
                <form action="" method="get" style="float: right; width: 45%;">
                	<p>
                    	<strong>Buscar por nome</strong>
                    </p>
                        <input type="hidden" name="page" value="rankings" />
                    <p>
                        <label>Tipo:</label>
                        <select name="type" id="type">                   
                            <option value="6">Personagem</option>
                            <option value="7">Guild</option> 
                        </select>
                    </p>
                    <p>
                        <label>Nome:</label>
                        <input type="text" name="name" value="" />
                    </p>
                    <p>
                        <input type="submit" value="Buscar" class="button" />
                    </p>
              </form>
                <div class="style" style="clear: both">
                  {#ResultRankings}
                </div>
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}