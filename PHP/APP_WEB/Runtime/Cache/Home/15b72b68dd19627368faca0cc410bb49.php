<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo (C("WEB_NAME")); ?></title>				
		
		<script type="text/javascript" src="__JS__/jquery.js"></script>
		<script type="text/javascript" src="__R__/Public/Js/yui_uiscroll.js"></script>
		<link rel="stylesheet" type="text/css" href="__R__/Public/Css/home.css" />
	</head>
<body>
	<!--页面头部-->
	<!--
	此模块负责顶部logo等信息展示，以及Menu的展示
-->
<script type="text/javascript" src="__R__/Public/Js/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="__R__/Public/Css/custom-theme/jquery-ui.css" />
<div class='public_header'>
	<div class='header_main'>
		<p>
			管理登陆|在线留言
		</p>
		<p>
			联系我们|服务专线 025-888888
		</p>
		<h2>
			<img class='header_logo' src='__IMG__/logo.png' />
			<span class='header_word'>助跑者</span>
			<ul id='header_menu'>				
				<?php if(is_array($menulist)): foreach($menulist as $key=>$menu): ?><li><?php echo ($menu["menu_name"]); ?></li><?php endforeach; endif; ?>
			</ul>
		</h2>
	</div>
</div>

	<!--页面滑动展示部分-->
	<div id='scrollDiv'>
		<div class='scrollItemContainer'>
			<div class='scrollItem' style='background-color:#F18989;'>1
			</div>
			<div class='scrollItem' style='background-color:#319B31;'>2
			</div>
			<div class='scrollItem' style='background-color:#4691DB;'>3
			</div>
			<div class='scrollItem' style='background-color:#F1F195;'>4
			</div>
		</div>
	</div>

	<!--页面信息分区部分-->
	<div class="Index_zone index_width">
		<div class='znoe' >1</div>
		<div class='znoe' >2</div>
		<div class='znoe' >3</div>
	</div>
	<!--页面底部-->
	<!--
	此模块负责首页面底部
-->
<div class='index_bottom index_width'>
	<hr/>
		<ul class='index_msg'>
			<li>一条信息展示</li>
		</ul>
		<div class='index_bottom_search'>
			<input />
		</div>	
	<hr/>
</div>
</body>
<script type="text/javascript">
	$(function(){
		$("#scrollDiv").UIscroll({'width':1200,'height':300});
	});
</script>
</html>