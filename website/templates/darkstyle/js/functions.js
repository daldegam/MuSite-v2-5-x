$(function()
{
	
	$('#sidebar h4').attr('title', 'Clique aqui para abrir/fechar o bloco abaixo.').click(function()
	{
		$(this).next().toggle('slow');
	});
	
	$('.openPanel').css('cursor', 'pointer').click(function()
	{
		var next = $(this).next();
		if(next.is(':visible'))
		{
			next.fadeOut('normal');
		}
		else
		{
			next.fadeIn('slow');
		}
	});
	
	$('div#equipe a').click(function(e)
	{
		e.preventDefault();
		Verify('?page=ajax&require=membersstaff', 'equipe', 'get');
	});
	
	$('#noticeFrom').submit(function()
	{
		$('textarea#content').val(base64Encode($('textarea#content').val()));
		return true;
	});
	
	var vip1 = $('span#VIP_NAME_1').text();
    var vip2 = $('span#VIP_NAME_2').text();
    var vip3 = $('span#VIP_NAME_3').text();
    var vip4 = $('span#VIP_NAME_4').text();
    var vip5 = $('span#VIP_NAME_5').text();
    
    var vip1Active = $('span#VIP_ACTIVE_1').text();
    var vip2Active = $('span#VIP_ACTIVE_2').text();
    var vip3Active = $('span#VIP_ACTIVE_3').text();
    var vip4Active = $('span#VIP_ACTIVE_4').text();
	var vip5Active = $('span#VIP_ACTIVE_5').text();
	
	$('a.tooltip').each(function()
	{
		var permissions = $(this).attr('rel').split(',');
		var text = '<h1>' + $(this).text() + '</h1>';
		
		text += 'Free: ';
		text += (permissions[0] == 1) ? '<span class="yes">Sim</span>' : '<span class="no">N&atilde;o</span>';
		text += '<br />';
		
        if(vip1Active == "true")
        {
		    text += vip1 + ': ';
		    text += (permissions[1] == 1) ? '<span class="yes">Sim</span>' : '<span class="no">N&atilde;o</span>';
		    text += '<br />';
        }
        if(vip2Active == "true")
        {
            text += vip2 + ': ';
            text += (permissions[2] == 1) ? '<span class="yes">Sim</span>' : '<span class="no">N&atilde;o</span>';
            text += '<br />';
        }
        if(vip3Active == "true")
        {
            text += vip3 + ': ';
            text += (permissions[3] == 1) ? '<span class="yes">Sim</span>' : '<span class="no">N&atilde;o</span>';
            text += '<br />';
        }
        if(vip4Active == "true")
        {
            text += vip4 + ': ';
            text += (permissions[4] == 1) ? '<span class="yes">Sim</span>' : '<span class="no">N&atilde;o</span>';
            text += '<br />';
		}
        if(vip5Active == "true")
        {
		    text += vip5 + ': ';
		    text += (permissions[5] == 1) ? '<span class="yes">Sim</span>' : '<span class="no">N&atilde;o</span>';
		    text += '<br />';
		}
		$(this).tooltip(text, {
			width: 200
		});
	});
	
	$('#openVipOne').click(function(e)
	{
		e.preventDefault();
        $('.buyCashForm#five').hide();
        $('.buyCashForm#four').hide();
        $('.buyCashForm#three').hide();
		$('.buyCashForm#two').hide();
		$('.buyCashForm#one').fadeIn('slow');
	});
    
    $('#openVipTwo').click(function(e)
    {
        e.preventDefault();
        $('.buyCashForm#five').hide();
        $('.buyCashForm#four').hide();
        $('.buyCashForm#three').hide();
        $('.buyCashForm#one').hide(); 
        $('.buyCashForm#two').fadeIn('slow');
    });
    
    $('#openVipThree').click(function(e)
    {
        e.preventDefault();            
        $('.buyCashForm#four').hide();  
        $('.buyCashForm#one').hide(); 
        $('.buyCashForm#two').hide();
        $('.buyCashForm#five').hide();
        $('.buyCashForm#three').fadeIn('slow');
    });
    
    $('#openVipFour').click(function(e)
    {
        e.preventDefault();
        $('.buyCashForm#five').hide();   
        $('.buyCashForm#three').hide();
        $('.buyCashForm#one').hide(); 
        $('.buyCashForm#two').hide();
        $('.buyCashForm#four').fadeIn('slow');
    });
	
    $('#openVipFive').click(function(e)
    {
        e.preventDefault();              
        $('.buyCashForm#four').hide();
        $('.buyCashForm#three').hide();
        $('.buyCashForm#one').hide(); 
        $('.buyCashForm#two').hide();
        $('.buyCashForm#five').fadeIn('slow');
    });
	
	$('#charSelect').change(function()
	{
		window.location = "?page=paneluser&option=CHANGE_CLASS&character=" + $(this).val();
	});
	
	$('#charSelectChangeName').change(function()
	{
		window.location = "?page=paneluser&option=CHANGE_NICK&character=" + $(this).val();
	});
	
	$('#charSelectCleanInventory').change(function()
	{
		window.location = "?page=paneluser&option=CLEAN_INVENTORY&character=" + $(this).val();
	});
	
	$('#charSelectCleanPK').change(function()
	{
		window.location = "?page=paneluser&option=CLEAN_PK&character=" + $(this).val();
	});
	
	$('#charSelectDistributePoints').change(function()
	{
		window.location = "?page=paneluser&option=DISTRIBUTE_POINTS&character=" + $(this).val();
	});
	
	$('#charSelectManagerPhoto').change(function()
	{
		window.location = "?page=paneluser&option=MANAGER_PHOTO&character=" + $(this).val();
	});
	
	$('#charSelectMasterReset').change(function()
	{
		window.location = "?page=paneluser&option=MASTER_RESET&character=" + $(this).val();
	});
	
	$('#charSelectMoveChar').change(function()
	{
		window.location = "?page=paneluser&option=MOVE_CHARACTER&character=" + $(this).val();
	});
	
    $('#charSelectReset').change(function()
    {
        window.location = "?page=paneluser&option=RESET&character=" + $(this).val();
    });
	$('#charSelectRedistributePoints').change(function()
	{
		window.location = "?page=paneluser&option=REDISTRIBUTE_POINTS&character=" + $(this).val();
	});
	
	$('.openBank').bind('click', show_hide_blocks);
	
	function show_hide_blocks() 
	{	
		var name = $(this).attr('id');		
		if(name == "Opt_Bradesco") 
		{
			$('div#Opt_Bradesco').show(); 
			$('input#Opt_Bradesco_nterminal').disabled = ''; 
			$('input#Opt_Bradesco_ntransferencia').disabled = ''; 
			$('input#Opt_Bradesco_agencia_acolhedora').disabled = ''; 
			$('input#Opt_Bradesco_nsequencia').disabled = ''; 
		} 
		else 
		{
			$('div#Opt_Bradesco').hide();
			$('input#Opt_Bradesco_nterminal').disabled = 'disabled'; 
			$('input#Opt_Bradesco_ntransferencia').disabled = 'disabled'; 
			$('input#Opt_Bradesco_agencia_acolhedora').disabled = 'disabled'; 
			$('input#Opt_Bradesco_nsequencia').disabled = 'disabled';
		}
		if(name == "Opt_Itau") 
		{
			$('div#Opt_Itau').show(); 
			$('input#Opt_Itau_ctr').disabled = ''; 
			$('input#Opt_Itau_caixa_eletronico').disabled = ''; 
		} 
		else 
		{
			$('div#Opt_Itau').hide();
			$('input#Opt_Itau_ctr').disabled = 'disabled'; 
			$('input#Opt_Itau_caixa_eletronico').disabled = 'disabled';
		}
		if(name == "Opt_BBrasil") 
		{
			$('div#Opt_BBrasil').show(); 
			$('input#Opt_BBrasil_nenvelope').disabled = ''; 
			$('input#Opt_BBrasil_ndocumento').disabled = ''; 
		} 
		else 
		{
			$('div#Opt_BBrasil').hide();
			$('input#Opt_BBrasil_nenvelope').disabled = 'disabled'; 
			$('input#Opt_BBrasil_ndocumento').disabled = 'disabled';
		}
		if(name == "Opt_CXEcon") 
		{
			$('div#Opt_CXEcon').show(); 
			$('input#Opt_CXEcon_nterminal').disabled = ''; 
		} 
		else 
		{
			$('div#Opt_CXEcon').hide();
			$('input#Opt_CXEcon_nterminal').disabled = 'disabled'; 
		}
		if(name == "Opt_Loterica") 
		{
			$('div#Opt_Loterica').show(); 
			$('input#Opt_Loterica_ncontrole').disabled = ''; 
			$('input#Opt_Loterica_nterminal').disabled = ''; 
		} 
		else 
		{
			$('div#Opt_Loterica').hide();
			$('input#Opt_Loterica_ncontrole').disabled = 'disabled'; 
			$('input#Opt_Loterica_nterminal').disabled = 'disabled'; 
		}
		if(name == "Opt_CXAqui") 
		{
			$('div#Opt_CXAqui').show(); 
			$('input#Opt_CXAqui_noperador').disabled = '';  
		} 
		else 
		{
			$('div#Opt_CXAqui').hide();
			$('input#Opt_CXAqui_noperador').disabled = 'disabled'; 
		}
		return true;
	}
	
	$('#formRank select#period').change(function()
	{    
		if($(this).val() > 0)
		{
			$('select#type').val(1);
		}
	});
	
	$('#formRank select#type').change(function()
	{   
		if($(this).val() > 1)
		{
			$('select#period').val(0);  
		}
	});
	
	$('#formRegister #login').keyup(function()
	{
		$(this).val($(this).val().toLowerCase());
	})
	.blur(function()
	{
		Verify('?page=ajax&require=register&login=' + $(this).val(), 'resultados', 'get');
	});
	
	$('#formRegister #senha, #formRegister #resenha').blur(function()
	{
		Verify ('?page=ajax&require=register&senha=' + $('#formRegister #senha').val() + '&resenha=' + $('#formRegister #resenha').val(), 'resultados', 'get');
	});
	
	$('#formRegister #email, #formRegister #reemail').blur(function()
	{
		Verify('?page=ajax&require=register&email=' + $('#formRegister #email').val() + '&reemail='+ $('#formRegister #reemail').val(), 'resultados', 'get');
	});
	
	$('#formRegister #resposta, #formRegister #codigo').keyup(function()
	{
		$(this).val($(this).val().toLowerCase());
	});
	
});