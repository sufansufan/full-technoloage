<?php
    if($_SERVER['REQUEST_METHOD'] =='GET'){
        include '../libs/db.php';
        include '../libs/function.php';
        $obj = new unit();
        $str = $obj->cateTable($mysql,'category');
        include '../template/admin/showCate.html';
    }else{

    }