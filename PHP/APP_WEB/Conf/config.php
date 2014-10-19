<?php
return array(
	'APP_GROUP_LIST' => 'Home,Admin', //项目分组设定
	'DEFAULT_GROUP'  => 'Home', //默认分组
	'APP_GROUP_MODE' => 1,
	'APP_GROUP_PATH' => 'Group',

	'DB_FIELDS_CACHE'=>false,	//关闭数据库字段缓存

	'LOAD_EXT_CONFIG' => 'db.config,site.config', // 加载扩展配置文件

	'TMPL_PARSE_STRING'  =>array(
     '__PUBLIC__' => substr(APP_PATH.'/Public'), // 更改默认的__PUBLIC__ 替换规则
     '__JS__' => substr(APP_PATH.'/Public/Js/',1), // 增加新的JS类库路径替换规则
     '__CSS__' => substr(APP_PATH.'/Public/Css/',1), // 增加新的JS类库路径替换规则
     '__UPLOAD__' => substr(APP_PATH.'/Uploads',1), // 增加新的上传路径替换规则
     '__TPL__' => substr(APP_PATH.'/Tpl/',1),
     '__R__'=>substr(APP_PATH,1),
     '__IMG__'=>substr(APP_PATH.'/Public/Image/',1),
	),
	
	'TMPL_FILE_DEPR' => '_',

	'SHOW_PAGE_TRACE'=>true,
	 'SHOW_RUN_TIME'    => true, // 运行时间显示
	 'SHOW_ADV_TIME'    => true, // 显示详细的运行时间
	 'SHOW_DB_TIMES'    => true, // 显示数据库查询和写入次数
	 'SHOW_CACHE_TIMES' => true, // 显示缓存操作次数
	 'SHOW_USE_MEM'     => true, // 显示内存开销
	 'SHOW_LOAD_FILE'   => true, // 显示加载文件数
	 'SHOW_FUN_TIMES'   => true, // 显示函数调用次数


	'URL_ROUTER_ON'   => true, //开启路由
	'URL_ROUTE_RULES' => array( //定义路由规则
    'news/:year/:month/:day' => array('News/archive', 'status=1'),
    'news/:id'               => 'News/read',
    'news/read/:id'          => '/news/:1',
	),

);
?>