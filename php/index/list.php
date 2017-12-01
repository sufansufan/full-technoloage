<?php
    include '../libs/db.php';
    include 'header.php';
    $cid = $_GET['cid'];
    $sql = "select template,cname from category where cid = '{$cid}'";
    $data = $mysql->query($sql)->fetch_all(MYSQL_ASSOC)[0];
    $template = $data['template'];
    $cname = $data['cname'];
//    根据cid获取文章
//    规定一下页数默认额情况是1页；
    $page = isset($_GET['page'])?$_GET['page']:1;
    $num = 3;
    $totle = $mysql->query("select count(*) as totle from new1 where cid = $cid")->fetch_assoc()['totle'];
    $pages = ceil($totle/$num);
    $offset =($page-1)*$num;
    $sql = "select * from new1 where cid ='{$cid}' limit $offset,3";
    $data = $mysql->query($sql)->fetch_all(MYSQL_ASSOC);
    $sql = "select * from new1 where cid ='{$cid}'";
    $data1 = $mysql->query($sql)->fetch_all(MYSQL_ASSOC);
    include '../template/index/'.$template;
    include 'footer.php';