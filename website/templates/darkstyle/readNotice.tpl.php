{#INCLUDE:header}
<script type="text/javascript">
function loadComments()
{
	Verify('?page=ajax&require=noticeselectcomments&idNotice=<?=$_GET['id'];?>', 'commentSelectReturn', 'get');
}
$(function()
{	
	loadComments();

	$('#btnPostComment').click(function()
	{
		Verify('?page=ajax&require=noticecomment&idNotice=<?=$_GET['id'];?>&comment='  +encodeURI($('#comment').val()), 'commentReturn', 'get');
	});
});
</script>
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <div class="contentBox">
                {#ResultNotices}
                
                <h2>Comentários</h2>
                <div id="commentSelectReturn"></div>
                <p>
                    <label>Deixe seu comentário sobre essa notícia:</label>
                    <textarea id="comment" style="width: 100%; height: 80px;"></textarea>
                    <input type="button" value="Postar comentário" class="button" id="btnPostComment" />
                </p>
                <div id="commentReturn"></div>
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}