<?php
    header('Content-type:text/html;charset=utf8');
    include '../libs/db.php';
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        include '../libs/function.php';
        $nid = $_GET['nid'];
        $obj = new unit();
        $obj->model = 'new1';
        $str = $obj->cateTree(0,$mysql,'category',0,$nid);
        $title1 =$obj->selectOne1($mysql,'new1',$nid,'title1');
        $title2 =$obj->selectOne1($mysql,'new1',$nid,'title2');
        $notes =$obj->selectOne1($mysql,'new1',$nid,'notes');
        $date1 = $obj->selectOne1($mysql,'new1',$nid,'date1');
        $content = $obj->selectOne1($mysql,'new1',$nid,'content');
        $thumb = $obj->selectOne1($mysql,'new1',$nid,'thumb');
        include '../template/admin/updateArticle.html';
    }else{
        $nid = $_POST['nid'];
        $title1 = $_POST['title1'];
        $title2 = $_POST['title2'];
        $notes = $_POST['notes'];
        $date1 = $_POST['date1'];
        $content = $_POST['content'];
        $file = $_FILES['img'];
        $cid = $_POST['cid'];
        $src = '';
        if(is_uploaded_file($file['tmp_name'])){
            if(!file_exists('../static/upload')){
                mkdir('../static/upload');
            }
            $path = '../static/upload/'.date('y-m-d');
            if(!file_exists($path)){
                mkdir($path);
            }
            $imgPath = $path.'/'.$file['name'];
            move_uploaded_file($file['tmp_name'],$imgPath);
            $src = '/php/'. substr($imgPath,3);
        }
        $sql = "update new1 set title1 = '{$title1}',title2 = '{$title2}',notes = '{$notes}',date1 = '{$date1}',content = '{$content}',thumb = '{$src}',cid = '{$cid}' where nid ={$nid}";
        $mysql->query($sql);
        if($mysql->affected_rows){
            $message = '修改文章成功';
            $url = 'showArticle.php';
        }else{
            $message = '修改文章失败';
            $url = 'showArticle.php';
        }
        include 'message.html';
    }