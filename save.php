<?php
$user = $_POST['user'];
$text = $_POST['text'];

function post($text)
{
    //所有数据不能为空
    if ($text == '') return false;
    //判断非法字符串
    $n = ['世界级', '独一无二'];
    foreach ($n as $value) {
        if ($text == $value) {
            return false;
        }
    }
    return true;
}

if (!post($user)) {
    die ('用户名错误');
}
if (!post($text)) {
    die('留言内容错误');
}
//数据载入数据库并回退
require_once('savesql.php');
insert_query($text, $user);
//echo "<script type='text/javascript'>".
//        "function sleep(d){ ".
//            "for(var t = Date.now();Date.now() - t <= d;);}".
//        "sleep(1000);".
//        "alert('留言成功');".
//        "location.replace('index.php');".
//    "</script>";
header('location:index.php');
//select_query();