/*------------------------------------------------------------------------
# $JA#PRODUCT_NAME$ - Version $JA#VERSION$ - Licence Owner $JA#OWNER$
# ------------------------------------------------------------------------
# Copyright (C) 2004-2008 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: J.O.O.M Solutions Co., Ltd
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
# This file may not be redistributed in whole or significant part.
-------------------------------------------------------------------------*/
var wrap_W = 0;
var JATabs = new Class({	
	initialize: function(element, options) {
		this.options = Object.extend({
			position:			'top',
			width:				'100%',
			height:				'auto',
			skipAnim:			false,
			animType:			'animMoveHor',
			mouseType:			'mouseover',
			changeTransition:	Fx.Transitions.Pow.easeIn,
			duration:			1000,
			mouseOverClass:		'hover',
			activateOnLoad:		'first',
			useAjax: 			false,
			ajaxUrl: 			'',
			ajaxOptions: 		'get',
			ajaxLoadingText: 	'Loading...',
			fixheight :			 1,
			fixwidth :			 1,
			colors: ''
		}, options || {});

		this.el = $(element);
		this.elid = element;				
				
		this._W = this.el.offsetWidth.toInt();
		wrap_W = this._W;
		
		if(this.options.height=='auto'){
			this.options.fixheight = 0;
		}
		//tab colors
		if($type(this.options.colors)=='string'){
			regex = /(\d*):([^,]*)/gi;
			var colors = [];
			while((result = regex.exec (this.options.colors)))
				colors[result[1]]=result[2];
			
			this.options.colors = colors;
		}
		
		//this._H = this.el.getParent().getStyle('height').toInt();
		this._H = this.el.getParent().offsetHeight.toInt();		
		this.panels = $$('#' + this.elid + ' .ja-tab-content');
		this.panelwrap = $E('.ja-tab-panels-'+this.options.position, this.el);	
				
		this.divtitles = $$('#' + this.elid + ' .ja-tabs-title-'+this.options.position);
		
		this.titles = $$('#' + this.elid + ' div.ja-tabs-title-'+this.options.position+' ul li');		

		//add 
		if (this.panels.length <= 1)
		{
			this.panels.setStyle ('position', 'relative');
			return;
		}	
		
		this.titles.each(function(item,i) {
			var color = item.getElement('h3').className;
			if (!color) color=this.options.colors[i];
			item._color = '';
			if (color) {
				item.addClass (color);
				item._color = color;
			}
			
			item.addEvent(this.options.mouseType, function(){
					if (item.className.indexOf('active') != -1)	return;
					
					item.removeClass(this.options.mouseOverClass);
					this.activate(item,  this.options.skipAnim);						
				}.bind(this)
			);
			
			item.addEvent('mouseover', function() {
				if(item != this.activeTitle)
				{
					item.addClass(this.options.mouseOverClass);
				}
			}.bind(this));
			
			item.addEvent('mouseout', function() {
				if(item != this.activeTitle)
				{
					item.removeClass(this.options.mouseOverClass);
					
				}
			}.bind(this));
		}.bind(this));
		

		this.titles[0].addClass('first');
		this.titles[this.titles.length-1].addClass('last');		
		this.titles[0].addClass ('active');
		
		//height of title (for left, right, bottom)
		//this.tabHeight = $E('.ja-tabs-title-'+this.options.position, this.el);
		this.tabHeight = this.el.getElement('.ja-tabs-title-'+this.options.position);
		
		//Panel contents
		this.minHeight = 0;
		if((this.options.position=='left') || (this.options.position=='right')){
	      	this.minHeight = this.tabHeight.offsetHeight;	
		    if (!this.options.fixheight ){				
				this.divtitles.setStyle ('height', this.minHeight);														
			}							
	    }		
     
		/* Set height for DIV tabswrap and position Top*/						
		if (!this.options.fixheight )
		{			
			this.panelwrap.setStyle ('height', this.minHeight+10);
		}	
		else{
			this.panelwrap.setStyle ('height', this._H - this.titles[0].offsetHeight.toInt());	
		}												

		/* Set set width for left/right tabs*/	
		if((this.options.position=='left') || (this.options.position=='right')){									
			var maxw = eval(this._W - this.divtitles[0].offsetWidth.toInt() -10);
			this.panelwrap.setStyle ('width', maxw);
		}		
				
		this.titles.each(function(el,i){
			el.panel = this.panels[i];
			el.panel._idx = i;
		},this);		
				
		if (this.options.skipAnim) this.options.animType = 'animNone';
		
		//Set default type for animation if needed
		if ((eval('typeof '+this.options.animType) == 'undefined') || (eval('$type ('+this.options.animType+')') != 'class')){
			this.options.animType = 'animFade';
		}
		
		//Create animation object
		this.anim = eval ('new '+this.options.animType + '(this)');

		if(this.options.activateOnLoad != 'none')
		{
			if(this.options.activateOnLoad == 'first')
			{
				this.activate(this.titles[0],  true);				
			}
			else
			{
				this.activate(this.options.activateOnLoad, true);	
			}
		}		
				
		if (window.ie) this.firstload = true;
		window.addEvent('resize', this.resize.bind(this));
		
	},
	
	resize: function () {
			
		/* Set set width for left/right tabs*/	
		this._W = this.el.offsetWidth;
		
		maxW = this._W;
			
    	if((this.options.position=='left') || (this.options.position=='right')){			
	      	this.minHeight = this.tabHeight.offsetHeight + 10;		
		    if (!this.options.fixheight ){				
				this.divtitles.setStyle ('height', Math.max(this.minHeight,this.activeTitle.panel.offsetHeight+10));														
				}	
				maxW = this._W - this.divtitles[0].offsetWidth.toInt() -10;	
				this.panelwrap.setStyle('width', maxW);  
	    }		
		  
		if(wrap_W!=this._W){this.anim.reposition();};
	},
	
	activate: function(tab, skipAnim){
	    if (this.options.useAjax) this.cancelAjax();
		 
		  if (this.options.useAjax && !tab.loaded) {
					this._getContent(tab);
	        return;	     
	    }

		if(! $defined(skipAnim))
		{
			skipAnim = false;
		}
		if($type(tab) == 'string') 
		{
			myTab = $$('#' + this.elid + ' ul li').filterByAttribute('title', '=', tab)[0];
			tab = myTab;
		}
		
		if($type(tab) == 'element')
		{
			//add 5
			var newTab = tab.panel;
			var curTab = this.activePanel;
			this.activePanel = newTab;
			
			this.anim.move (curTab, newTab, skipAnim);
			
			this.titles.removeClass('active');
			tab.addClass('active');
			if (this.activeTitle && this.activeTitle._color) this.panelwrap.removeClass (this.activeTitle._color);
			if (tab._color) this.panelwrap.addClass (tab._color);
			/*
			if (this.activeTitle ){
				this.activeTitle.className = this.activeTitle.className.replace(new RegExp("active"), "");
			}
			tab.className = tab.className.replace(new RegExp(this.options.mouseOverClass), "");
			tab.className += 'active';
			*/
			
			this.activeTitle = tab;
			
			if (!this.options.fixheight) {
				if (skipAnim) {
					this.panelwrap.setStyle('height', Math.max(this.minHeight,this.activeTitle.panel.offsetHeight+10));
					if((this.options.position=='left') || (this.options.position=='right')){
						this.tabHeight.setStyle('height', Math.max(this.minHeight, this.panelwrap.offsetHeight));
					}
				} else {
					new Fx.Style(this.panelwrap, 'height',{duration:this.options.duration}).start(this.panelwrap.offsetHeight, Math.max(this.minHeight,this.activeTitle.panel.offsetHeight+10));
	
					if((this.options.position=='left') || (this.options.position=='right')){
						new Fx.Style(this.tabHeight, 'height',{duration:this.options.duration}).start(this.tabHeight.offsetHeight, Math.max(this.minHeight, this.activeTitle.panel.offsetHeight));					
					}
				}
			}
		}	
		
	},
	cancelAjax: function() {
	  if (this.loadingTab) {
	    	this.tabRequest.cancel();
	      	this.loadingTab.imgLoading.remove();
	  		this.tabRequest = null;
	  		this.loadingTab = null;
	    }
  	},
	
	_getContent: function(tab){
	  
		this.loadingTab = tab;
		
		var h3 = $(this.loadingTab.getElementsByTagName('H3')[0]);
		var imgloading = new Element('img', {'src': 'plugins/content/ja_tabs/loading.gif','width': 13});
		if (this.options.position=='right') imgloading.inject(h3,'top');
		else imgloading.inject(h3);
		this.loadingTab.imgLoading = imgloading;
		this.tabRequest = new Ajax(this.options.ajaxUrl+ '&tab=' + this.loadingTab.getProperty('title'), {method:this.options.ajaxOptions,onComplete:this.update.bind(this)});
		this.tabRequest.request();
		
	},
	update: function (text) {
		this.loadingTab.loaded = true;
		this.loadingTab.panel.subpanel = $E('.ja-tab-subcontent', this.loadingTab.panel);		
		this.loadingTab.panel.subpanel.innerHTML = text;
		this.loadingTab.imgLoading.remove();
		var tab = this.loadingTab;
		this.tabRequest = null;
		this.loadingTab = null;
		this.anim.reposition();
		this.activate (tab);
		
	}
});
var animNone = new Class ({
	initialize: function(tabwrap) {
		this.options = tabwrap.options || {};
		this.tabwrap = tabwrap;

		this.tabwrap.panels.setStyle('position', 'absolute');
		this.tabwrap.panels.setStyle('left', 0);
	},

	move: function (curTab, newTab, skipAnim) {
		this.tabwrap.panels.setStyle('display', 'none');
		newTab.setStyle('display', 'block');
	}
});

var animFade = new Class ({
	initialize: function(tabwrap) {
		this.options = tabwrap.options || {};
		this.tabwrap = tabwrap;
		this.changeEffect = new Fx.Elements(this.tabwrap.panels, {duration: this.options.duration});
		this.tabwrap.panels.setStyles({'opacity':0,'width':'100%'});
	},

	move: function (curTab, newTab, skipAnim) {
		if(this.options.changeTransition != 'none' && skipAnim==false)
		{
			if (curTab)
			{
				curOpac = curTab.getStyle('opacity');
				var changeEffect = new Fx.Style(curTab, 'opacity', {duration: this.options.duration, transition: this.options.changeTransition});
				changeEffect.stop();
				changeEffect.start(curOpac,0);
			}
			curOpac = newTab.getStyle('opacity');
			var changeEffect = new Fx.Style(newTab, 'opacity', {duration: this.options.duration, transition: this.options.changeTransition});
			changeEffect.stop();
			changeEffect.start(curOpac,1);
		} else {
			if (curTab) curTab.setStyle('opacity', 0);
			newTab.setStyle('opacity', 1);
		}
	},
	reposition: function() {
	    if (this.tabwrap.activePanel) {
			this.changeEffect.stop();

			for (var i=this.tabwrap.activePanel._idx-1;i>=0;i--) {
			    this.tabwrap.panels[i].setStyle('opacity',0);
			}
		    for (i=this.tabwrap.activePanel._idx+1;i<this.tabwrap.panels.length;i++) {
		       this.tabwrap.panels[i].setStyle('opacity',0);
		     }		     		   
	    }
	}
});

var animMoveHor = new Class ({
	initialize: function(tabwrap) {
		this.options = tabwrap.options || {};
		this.tabwrap = tabwrap;
		this.changeEffect = new Fx.Elements(this.tabwrap.panels, {duration: this.options.duration});
	    var left = 0;
	    this.tabwrap.panels.each (function (panel) {
	      panel.setStyle('left', left);
	      left += panel.offsetWidth;
	    });
	    this.tabwrap.panels.setStyle('top', 0);
	},

	move: function (curTab, newTab, skipAnim) {
		if(this.options.changeTransition != 'none' && !skipAnim)
		{
			this.changeEffect.stop();
			var obj = {};
			var offset = newTab.offsetLeft.toInt();
			i=0;			
			
			this.tabwrap.panels.each(function(panel) {
				obj[i++] = {'left':[panel.offsetLeft.toInt(), panel.offsetLeft.toInt() - offset] };			
			});
			
			this.changeEffect.start(obj);
		}
	},
	reposition: function() {
	    if (this.tabwrap.activePanel) {
			this.changeEffect.stop();
	       	var left = this.tabwrap.activePanel.offsetLeft;
		    for (var i=this.tabwrap.activePanel._idx-1;i>=0;i--) {
		       left -= this.tabwrap.panels[i].offsetWidth;
		       this.tabwrap.panels[i].setStyle('left',left);
		     }
	       	var left = this.tabwrap.activePanel.offsetLeft;
		    for (i=this.tabwrap.activePanel._idx+1;i<this.tabwrap.panels.length;i++) {
		       left += this.tabwrap.panels[i-1].offsetWidth;
		       this.tabwrap.panels[i].setStyle('left',left);
		     }
	    }
	}
});

var animMoveVir = new Class ({
	initialize: function(tabwrap) {
		this.options = tabwrap.options || {};
		this.tabwrap = tabwrap;
		this.changeEffect = new Fx.Elements(this.tabwrap.panels, {duration: this.options.duration});
	
	    var top = 0;
	    this.tabwrap.panels.each (function (panel) {
	      panel.setStyle('top', top);     
	      top += Math.max(panel.offsetHeight,  panel.getParent().getParent().offsetHeight);
	    });
	    this.tabwrap.panels.setStyle('left', 0);
	},
	move: function (curTab, newTab, skipAnim) {
		if(this.options.changeTransition != 'none' && skipAnim==false)
		{
      //reposition newTab
      
			this.changeEffect.stop();
			var obj = {}; 
			var offset = newTab.offsetTop.toInt();
			i=0;
			this.tabwrap.panels.each(function(panel) {
				obj[i++] = {'top':[panel.offsetTop.toInt(), panel.offsetTop.toInt() - offset]};			
			});
			this.changeEffect.start(obj);
		}
	},
	reposition: function() {
	    if (this.tabwrap.activePanel) {
				 this.changeEffect.stop();
	       var top = this.tabwrap.activePanel.offsetTop;
		     for (var i=this.tabwrap.activePanel._idx-1;i>=0;i--) {
		       top -= this.tabwrap.panels[i].offsetHeight;
		       this.tabwrap.panels[i].setStyle('top',top-10);
		     }
	       var top = this.tabwrap.activePanel.offsetTop;
		     for (i=this.tabwrap.activePanel._idx+1;i<this.tabwrap.panels.length;i++) {
		       top += this.tabwrap.panels[i-1].offsetHeight+10;
		       this.tabwrap.panels[i].setStyle('top',top);
		     }
	    }
	}
});