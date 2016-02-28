<?php
return array(
	//'配置项'=>'配置值'
	'SHOW_PAGE_TRACE'=>True,		//开启页面调试

    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '115.159.47.194', // 服务器地址
    'DB_NAME'               =>  'myblog',          // 数据库名
    'DB_USER'               =>  'wml',      // 用户名
    'DB_PWD'                =>  'wml',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8

	//自定义success和error的提示页面模板
	'TMPL_ACTION_SUCCESS'=>'Public:success',
	'TMPL_ACTION_ERROR'=>'Public:error',
);