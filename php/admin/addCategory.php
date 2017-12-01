<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    /*下拉菜单*/
    include '../libs/db.php';
    include '../libs/function.php';
    $cate = new unit();
    $str = $cate->cateTree(0,$mysql,'category',0);
    include '../template/admin/addCategory.html';
}else{
    include '../libs/db.php';
    $cname =$_POST['cname'];
    $pid = $_POST['pid'];
    $sql = "insert into category(cname,pid) values('{$cname}','{$pid}')";
    $mysql ->query($sql);
    if($mysql->affected_rows){
        $message ='插入成功';
        $url ='addCategory.php';
    }else{
        $message='插入失败';
        $url ='addCategory.php';

    }
    include 'message.html';
}