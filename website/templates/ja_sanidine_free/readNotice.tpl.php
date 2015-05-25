{#INCLUDE:header}
	<div id="ja-containerwrap-fr">
		<div id="ja-container" class="clearfix">
			<div id="ja-mainbody" class="clearfix">  
				<div id="ja-content">
                    <div id="ja-content-top">
                        <div id="ja-content-bot" class="clearfix">
                            
                            <div id="ja-current-content" class="clearfix"> 

                                <div id="notice_read">
                                    {#ResultNotices}
                                </div>

                            </div>
                        </div>
                    </div>
					<div id="ja-content-top">
						<div id="ja-content-bot" class="clearfix">
							
							<div id="ja-current-content" class="clearfix"> 

								<div id="notice_read">
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
						</div>
					</div>
				</div>
			{#INCLUDE:menuLeft}
			<br />
			<div id="ja-tabs" class="clearfix"></div>
			</div>
		</div>
 	</div>
{#INCLUDE:footer}
