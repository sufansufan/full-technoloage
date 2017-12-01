<?php
    header('Content-type:text/html;charset=utf8');
    include '../libs/db.php';
    $id = $_GET['id'];
    $sql ="delete from new1 where id ={$id}";
    $mysql->query($sql);
    if($mysql->affected_rows){
        $message = '删除成功';
        $url = 'showicon.php';
        include 'message.html';
    }else{
        $message ='删除失败';
        $url = 'showicon.php';
        include 'message.html';
    }