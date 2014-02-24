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
                    <a class="home" href="?">INÍCIO</a> &gt; <strong>RANKINGS</strong>
                </div>
                <h3 class="subtitle">Rankings</h3>
            </div>
            <!-- //Location & Sub Title -->

            <!-- Content -->
            
            
            
            <div class="sub_wrap">
                <div id="etc">
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
                  <div class="legend" style="margin-bottom: 25px;">
                  <h3 class="legend-title"><span style="font-size: 13px;">Rankings em geral</span></h3>
                      <div style="margin-bottom: 8px; margin-top: 10px;">
                        <form action="" method="get">
                            <table border='0' width='100%'>
                              <tr>
                                <td align='center'><strong>Período: </strong>
                                <select name="period" id="period" onchange="checkType();">                   
                                    <option value="0">Tempo real</option>
                                    <option value="1">Semanal</option>
                                    <option value="2">Mensal</option>
                                </select>
                                </td>
                                <td align='center'><strong>Tipo: </strong>
                                <select name="type" id="type" onchange="checkPeriod();">                   
                                    <option value="1">Resets</option>
                                    <option value="5">Master Resets</option>
                                    <option value="2">Level</option>       
                                    <option value="4">Pk (Mortes)</option>
                                    <option value="3">Guilds</option>
                                    <?php global $RANKING_CONFIGS; echo ($RANKING_CONFIGS['GENS'] == true ? "<option value=\"8\">Gens - Familia Duprian</option><option value=\"9\">Gens - Familia Vanert</option>":NULL); ?>
                                </select>
                                </td>
                                <td align='center'><strong>Quantidade:</strong>
                                <select name="top">                   
                                    <option value="10">10</option>    
                                    <option value="50">50</option>    
                                    <option value="100">100</option>    
                                    <option value="200">200</option>  
                                </select>
                                </td>
                                <td align='center'>
                                    <input type="hidden" name="page" value="rankings" />
                                    <input type="submit" value="Carregar" class="button" />
                                </td>
                              </tr>
                            </table>
                        </form>
                      </div>
                  </div>
                </div>
                <div id="etc">
                  <div class="legend" style="margin-bottom: 25px;">
                  <h3 class="legend-title"><span style="font-size: 13px;">Busca por nome exato</span></h3>
                      <div style="margin-bottom: 8px; margin-top: 10px;">
                        <form action="" method="get">
                            <table border='0' width='100%'>
                              <tr>
                                <td align='center'><strong>Tipo: </strong>
                                <select name="type" id="type">                   
                                    <option value="6">Personagem</option>
                                    <option value="7">Guild</option> 
                                </select>
                                </td>
                                <td align='center'><strong>Nome:</strong>
                                <input type="text" name="name" value="" />
                                </td>
                                <td align='center'>
                                    <input type="hidden" name="page" value="rankings" />   
                                    <input type="submit" value="Buscar" class="button" />
                                </td>
                              </tr>
                            </table>
                        </form>
                      </div>
                  </div>
                </div>
                <div id="etc">{#ResultRankings}</div>
            </div>
            <!-- //Content -->

        </div>
        <!-- //Right Wrap -->
               
    </div>     
    <!-- //Body -->

     
        <!-- Footer -->
                          
<div id="subbottomPanel"></div>
{#INCLUDE:footer}