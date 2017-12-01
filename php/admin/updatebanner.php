<?php
    header('Content-type:text/html;charset=utf8');
    include '../libs/db.php';
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        include '../libs/function.php';
        $bid = $_GET['bid'];
        $obj = new unit();
        $obj->model = 'new1';
        $company =$obj->selectOne2($mysql,'banner',$bid,'company');
        $title =$obj->selectOne2($mysql,'banner',$bid,'title');
        $begins =$obj->selectOne2($mysql,'banner',$bid,'begins');
        $about =$obj->selectOne2($mysql,'banner',$bid,'about');
        $bimg = $obj->selectOne2($mysql,'banner',$bid,'bimg');
        include '../template/admin/updatebanner.html';
    }else{
        $bid = $_POST['bid'];
        $company = $_POST['company'];
        $title = $_POST['title'];
        $begins = $_POST['begins'];
        $about = $_POST['about'];
        $file = $_FILES['bimg'];
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
        $sql = "update banner set company = '{$company}',title = '{$title}',begins = '{$begins}',about = '{$about}',bimg= '{$src}'where bid ={$bid}";
        $mysql->query($sql);
        if($mysql->affected_rows){
            $message = '修改文章成功';
            $url = 'showbanner.php';
        }else{
            $message = '修改文章失败';
            $url = 'showbanner.php';
        }
        include 'message.html';
    }