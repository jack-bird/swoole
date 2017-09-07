<?php
    //定义更目录路径
    define('PATH',__DIR__.'/');

    //载入自动加载
    require_once 'autoload.php';
    require_once 'vendor/autoload.php';

//定义数据库连接常量;
define('DB_TYPE', 'mysql');
define('DB_NAME', 'coin_system');
define('DB_HOST', '180.76.176.2');
define('DB_USER', 'root');
define('DB_PASSWORD', 'password');
//定义redis链接常量;
define('REDIS_HOST', '180.76.176.2');
define('REDIS_PASSWORD', NULL);
define('REDIS_PORT', '6379');

//启动服务
$service = new service();
$service->start();