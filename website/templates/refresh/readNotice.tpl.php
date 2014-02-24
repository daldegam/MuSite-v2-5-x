{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                  <h1>Noticias</h1>
                  <div class="quadros">
                      {#ResultNotices}
                  </div>
                  <div class="quadros">
                  	<h1>Comentários</h1>
                    <div id="commentSelectReturn"></div>
                    <script>
                        function loadComments() { 
                            Verify('?page=ajax&require=noticeselectcomments&idNotice=<?=$_GET['id'];?>', 'commentSelectReturn', 'get');
                        } 
                        loadComments();
                    </script>
                    <div class="quadros">
                        Deixe seu comentário sobre essa notícia:<br />
                        <textarea id="comment" style="width: 100%; height: 80px;"></textarea>
                        <input type="button" value="Postar comentário" class="button" onclick="javascript: Verify('?page=ajax&require=noticecomment&idNotice=<?=$_GET['id'];?>&comment='+encodeURI(document.getElementById('comment').value), 'commentReturn', 'get');" />
                        <br /><div id="commentReturn"></div>
                    </div>
                  </div>
                </div>
                
                {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}