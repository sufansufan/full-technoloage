<?php
    header('Contebnt-type:text/html;charset=utf8');
    if($_SERVER['REQUEST_METHOD']=='GET'){
        include '../libs/db.php';
        include '../libs/function.php';
        $cid = $_GET['cid'];
        $obj = new unit();
        $obj->model = 'category';
        $str = $obj->cateTree(0,$mysql,'category','0',$cid);
        /*$sql = "select cname from category where cid='{$_GET['cid']}'";
        $data = $mysql->query($sql)->fetch_assoc();
        $cname = $data['cname'];*/
        $cname = $obj->selectOne($mysql,'category',$cid,'cname');
        include '../template/admin/updateCategory.html';
    }else{
        include '../libs/db.php';
        $pid = $_POST['pid'];
        $cname = $_POST['cname'];
        $cid = $_POST['cid'];
        $sql = "update category set cname = '{$cname}',pid='{$pid}' where cid ={$cid}";
        $mysql->query($sql);
        if($mysql->affected_rows){
            $message = '修改成功';
            $url = 'showCate.php';
            include 'message.html';
        }else{
            $message = '修改失败';
            $url = 'showCate.php';
            include 'message.html';
        }
    }