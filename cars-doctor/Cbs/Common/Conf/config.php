<?php
/*PDO定义
    'DB_TYPE'   => 'pdo', // 数据库类型
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '951031', // 密码
    'DB_PREFIX' => 'think_', // 数据库表前缀
    'DB_DSN'=>'mysql:host=localhost;dbname=cars_doctor,charset=UTF-8'
*/
return array(
	//'配置项'=>'配置值'
    //禁止模块访问
    'MODULE_DENY_LIST'=>array('Common','Runtime'),
    'MODULE_ALLOW_LIST'=>array('Admin','Home'),
    'DEFAULT_MODULE'=>'Home',
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'cars_doctor', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '951031', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'think_', // 数据库表前缀
    ///页面调试工具
    'SHOW_PAGE_TRACE'=>true,

);