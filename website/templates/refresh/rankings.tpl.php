{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                  <h1>Rankings</h1>    
                  <div class="quadros">
                      <script type='text/javascript'>   
                        function checkType()
                        {    
                            var period = document.getElementById('period').value; 
                            if(period > 0) document.getElementById('type').value = 1;
                        }
                        function checkPeriod()
                        {   
                            var type = document.getElementById('type').value; 
                            if(type > 1) document.getElementById('period').value = 0;  
                        }
                      </script>
                      <form action="" method="get">
                      <input type="hidden" name="page" value="rankings" />
                        Período: 
                        <select name="period" id="period" onchange="checkType();">                   
                            <option value="0">Tempo real</option>
                            <option value="1">Semanal</option>
                            <option value="2">Mensal</option>
                        </select>
                        Tipo: 
                        <select name="type" id="type" onchange="checkPeriod();">                   
                            <option value="1">Resets</option>
                            <option value="5">Master Resets</option>
                            <option value="2">Level</option>       
                            <option value="4">Pk (Mortes)</option>
                            <option value="3">Guilds</option>
                            <?php global $RANKING_CONFIGS; echo ($RANKING_CONFIGS['GENS'] == true ? "<option value=\"8\">Gens - Familia Duprian</option><option value=\"9\">Gens - Familia Vanert</option>":NULL); ?>
                        </select>
                        Quantidade: 
                        <select name="top">                   
                            <option value="10">10</option>    
                            <option value="50">50</option>    
                            <option value="100">100</option>    
                            <option value="200">200</option>  
                        </select>
                        <input type="submit" value="Carregar" class="button" />
                      </form>
                      <h2>Busca por nome exato</h2>
                      <form action="" method="get">
                        <input type="hidden" name="page" value="rankings" />
                        Tipo: 
                        <select name="type" id="type">                   
                            <option value="6">Personagem</option>
                            <option value="7">Guild</option> 
                        </select>
                        Nome:
                        <input type="text" name="name" value="" />
                        <input type="submit" value="Buscar" class="button" />
                      </form>   
                  </div>
                  {#ResultRankings}
                </div>
                
                {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}