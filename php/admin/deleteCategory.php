<?php
    include '../libs/db.php';
    $cid = $_GET['cid'];
    /*是否存在子栏目*/
    $sql = "select * from category where pid ='{$cid}'";
    if($mysql->query($sql)->fetch_assoc()){
        $message = '存在子栏目';
        $url = 'show.php';
        include 'message.html';
        exit();
    }

    $sql = "delete from category where cid={$cid}";
    $mysql->query($sql);
    if($mysql->affected_rows){
        $message = '删除成功';
        $url = 'showCate.php';
        include 'message.html';
    }else{
        $message ='删除失败';
        $url = 'showCate.php';
        include 'message.html';
    }