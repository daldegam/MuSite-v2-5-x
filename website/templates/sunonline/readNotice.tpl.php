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
                    <a class="home" href="?">INÍCIO</a> &gt; <strong>NOTÍCIAS</strong>
                </div>
            </div>
            <!-- //Location & Sub Title -->

            <!-- Content --> 
            
            <div class="sub_wrap">
                <div id="etc">
                    <div class="legend" style="margin-bottom: 25px;">
                      <h3 class="legend-title"><span style="font-size: 13px;">Notícia:</span></h3>
                          <div style="margin-bottom: 8px; margin-top: 10px;">
                            {#ResultNotices} 
                          </div>
                    </div>
                    <div class="legend" style="margin-bottom: 25px;">
                      <h3 class="legend-title"><span style="font-size: 13px;">Comentários:</span></h3>
                          <div style="margin-bottom: 8px; margin-top: 10px;">
                            <div id="commentSelectReturn"></div>
                            <script>
                                function loadComments() { 
                                    Verify('?page=ajax&require=noticeselectcomments&idNotice=<?=$_GET['id'];?>', 'commentSelectReturn', 'get');
                                } 
                                loadComments();
                            </script>
                            <div class="quadros" style="color: black;">
                                Deixe seu comentário sobre essa notícia:<br />
                                <textarea id="comment" style="width: 100%; height: 80px;"></textarea>
                                <input type="button" value="Postar comentário" class="button" onclick="javascript: Verify('?page=ajax&require=noticecomment&idNotice=<?=$_GET['id'];?>&comment='+encodeURI(document.getElementById('comment').value), 'commentReturn', 'get');" />
                                <br /><div id="commentReturn"></div>
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