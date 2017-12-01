<?php
    header('Content-type:text/html;charset=utf8');
    include '../libs/db.php';
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        include '../libs/function.php';
        $obj = new unit();
        $str = $obj ->cateTable2($mysql,'banner');
        include '../template/admin/showbanner.html';
    }else{

    }