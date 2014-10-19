/*
*提供一个滚动展示的控件
eg:
*****************************************
	<div id='scrollDiv'>
		<div class='scrollItemContainer'>
			<div class='scrollItem' style='background-color:red;'>1
			</div>
			<div class='scrollItem' style='background-color:green;'>2
			</div>
			<div class='scrollItem' style='background-color:blue;'>3
			</div>
			<div class='scrollItem' style='background-color:yellow;'>4
			</div>
		</div>
	</div>
*******************************************
	$(function(){
			$("#scrollDiv").UIscroll();
	});
*******************************************	
*/
;(function( $, undefined ) 
	{
		$.uiscroll;
		var _childen,me,indexBtn,indexArr=[],_auto,_speed,_curIndex,itemContainer,_options,_height=100,_width=500;
		show = function(index) 
		{			
			var _item,itemBtn,_preItem,_nextItem,_tempItem;
			var _index = index || 0;
			if(_curIndex == _index ) return;
			
			indexArr.length == 0 ? indexArr = me.find('.btnItem') : "";
			
			_item = _childen.eq(_index);
			_index > 0 ? _preItem = _childen.eq(_curIndex):'';
			_index < (_childen.length - 1) ? _nextItem = _childen.eq(_curIndex):'';
			
			//还需修改此处
			 if(_preItem)_tempItem=_preItem;
			 if(_nextItem)_tempItem=_nextItem;;
			 
			 _tempItem.stop();
			 _tempItem.css({'left':0,'top':0});
			 _tempItem.show();
			 _tempItem.siblings().stop().hide();

			 
			itemBtn = indexArr.eq(_index);
			
			indexArr.removeClass('selected');
			itemBtn.addClass('selected');
			
			_item.siblings('.scrollItem').hide();
			
			//右点击
			if(_curIndex >= 0 && _index > _curIndex)
			{				
				_preItem.show();
				_preItem.animate({'left':me.width()},_speed,function(){$(this).hide()});
				
				_item.css({'left':-me.width(),'top':-_height});
				_item.show();
				_item.animate({'left':0},_speed,function(){$(this).css({'top':0})});
			}
			else if(_curIndex >= 0 && _index < _curIndex)	//左点击
			{				
				_nextItem.css({'top':-_height});
				_nextItem.show();
				_nextItem.animate({'left':-me.width()},_speed,function(){$(this).hide()});
				
				_item.css({'left':me.width(),'top':0});
				_item.show();
				_item.animate({'left':0},_speed,function(){$(this).css({'top':0})});
			}									
			_curIndex = _index;
		};		
		createIndexBtn = function()
		{
			indexBtn = $("<div class='indexBtn'></div>");
			
			for(var i = 0 , len = _childen.length; i < len; i++)
			{
				var indexBtnItem = $("<span class='btnItem' _index='"+i+"'>"+i+"</span>");
				_childen.eq(i).css({'position':'relative'});
				indexBtn.append(indexBtnItem);
				indexBtnItem.click(function(){
					var _i = $(this).attr("_index");
					show(_i);
				});
			}
			
			me.append(indexBtn);
		};
		autoLoop = function()
		{
			var _i = _curIndex;
			if(_curIndex == (_childen.length - 1))
			{
				_i = 0;
			}
			else
			{
				_i++;
			}
			show(_i);
		};
		$.fn.UIscroll = function(options)
		{
			_options = $.extend( {}, options );
			_height = _options.height || 100;
			_width = _options.width || 500;
			_speed = _options.speed || 1000;
			_auto = _options.auto || true;
			//alert($(this).attr("id"));
			me = this;
			me.addClass('yui');
			me.css({'width':_width,'height':_height,'overflow':'hidden','margin':'0 auto'});
			itemContainer = me.find('.scrollItemContainer');
			itemContainer.css({'position':'relative','width':_width,'height':_height});
			_childen = itemContainer.children('.scrollItem');
			_childen.css({'width':_width,'height':_height});
			createIndexBtn();
			show();
			
			if(_auto)
			{
				setInterval("autoLoop()",_speed*5);
			}
		};
	}(jQuery));