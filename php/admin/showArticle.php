<?php
    header('Content-type:text/html;charset=utf8');
    include '../libs/db.php';
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    include '../libs/function.php';
    $obj = new unit();
    $str = $obj ->cateTable1($mysql,'new1');
    include '../template/admin/showArticle.html';
}else{

}