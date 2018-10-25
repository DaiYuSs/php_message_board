<?php //  require_once ('SQL_Connect.php');?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="index_form.css" type="text/css">
    <meta charset="UTF-8"/>
    <title>留言板</title>
    <style>

    </style>
</head>
<body>
<div class="wrap">
    <form action="save.php" method="post">
        <div class="add">
            <textarea class="content" cols="50" rows="5" id="text" name="text"></textarea>
            <input class="user" type="text" id="user" name="user"/>
            <input class="btn" type="submit" value="发表留言"/>
        </div>
    </form>
    <!-- 查看留言 -->
    <!--    <div class="msg">-->
    <!--        <div class="info">-->
    <!--            <span class="user">用户名</span>-->
    <!--            <span class="time">2018-9-17 10:21</span>-->
    <!--        </div>-->
    <!--        <div class="content">我是留言内容。我是留言内容。我是留言内容。我是留言内容。我是留言内容。我是留言内容。我是留言内容。</div>-->
    <!--    </div>-->
    <?php
    require_once('savesql.php');
    select_print_query();
    ?>
</div>
</body>
</html>
