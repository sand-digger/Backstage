<?php
return array(
	//'配置项'=>'配置值'
	'MODULE_ALLOW_LIST' => array('Home','Admin'),
	'DEFAULT_MODULE' => 'Admin',
	//默认视图层
	'DEFAULT_V_LAYER' => 'View',
	//操作方法后缀
//	'ACTION_SUFFIX' => 'Action',
	
	'DB_TYPE' => 'mysql',
	'DB_PORT' => '3306',
	'DB_CHARSET' =>	'utf8',
	'DB_PREFIX' => 'db_',
	'DB_DEBUG' => true, 			// 数据库调试模式 开启后可以记录SQL日志
	'DB_HOST' => 'qdm160286537.my3w.com',
	'DB_NAME' => 'qdm160286537_db',
	'DB_USER' => 'qdm160286537',
	'DB_PWD' => 'Bjl12345',
	
	'SHOW_PAGE_TRACE' => false,   		// 显示页面Trace信息	
		
	'TMPL_ACTION_SUCCESS'=>'Public:dispatch_jump',		//自定义success跳转页面
	'TMPL_ACTION_ERROR'=>'Public:dispatch_jump',		//自定义error跳转页面
	
	//自动参数绑定
	'DB_BIND_PARAM' => true,
	
	'TMPL_VAR_IDENTIFY' => 'array',
//	'TMPL_FILE_DEPR' => '_',
);