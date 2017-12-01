<?php
    header('Content-type:text/html;charset=utf8');
    include '../libs/db.php';
    $nid = $_GET['nid'];
    $sql ="delete from new1 where nid ={$nid}";
    $mysql->query($sql);
    if($mysql->affected_rows){
        $message = '删除成功';
        $url = 'showArticle.php';
        include 'message.html';
    }else{
        $message ='删除失败';
        $url = 'showArticle.php';
        include 'message.html';
    }