<?php
require_once ('SQL_Connect.php');
//执行sql
function query($sql)
{
    global $link;
    $is = $link->query($sql);
    if ($is === false) {
        die('sql失败');
    }
}

//sql插入函数
function insert_query($text, $users)
{
    $sql = "insert"." into msg(content,`user`,intime) values ('{$text}','{$users}',NOW())";
    query($sql);
}

function select_print_query()
{
    global $link;
    $sql = "SELECT"." * FROM msg ORDER BY id DESC";
    $ret_val = $link->query($sql);
    if (is_object($ret_val) == false) die('查询失败');
    $rows = [];
    while ($row = $ret_val->fetch_array(MYSQLI_ASSOC)) {
        $row['intime'] = substr($row['intime'], 0, 16);
        $rows[] = $row;
    }
    foreach ($rows as $row) {
        echo "<div class='msg'>" .
            "<div class='info'>" .
            "<span class='user'>{$row['user']}</span>" .
//            "<a class='time' src=''>删除</a>".
            "<span class='time'>{$row['intime']}</span>" .

            "</div>" .
            "<div class='content'>{$row['content']}</div>" .
            "</div>";
    }
}
