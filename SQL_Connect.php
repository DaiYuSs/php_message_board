<?php
//定义连接数据库的常量
//define('host', 'localhost', false);
//define('users', 'root', false);
//define('pws', '', false);
//define('db_name', 'php10', false);
//define('DB_NAME', 'msg', false);
$host = 'localhost';
$users = 'root';
$pws = '';
$db_name = 'php10';
//连接数据库和默认查询表
$link = new mysqli($host, $users, $pws, $db_name);
//$link->select_db(DB_NAME);
//数据库连接是否正确判断
if ($link->connect_errno <> 0) {
    echo $link->connect_error . '</br>';
    die('数据库连接失败');
}
//设置默认数据传输编码
$link->set_charset('utf8');
$link->query("SET NAMES UTF8");