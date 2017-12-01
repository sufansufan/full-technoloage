<?php
    header('Content-type:text/html;charset=utf8');
    include '../libs/db.php';
    if($_SERVER['REQUEST_METHOD'] =='GET'){
        include '../template/admin/banner.html';
    }else{
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
        $sql="insert into banner(company,title,begins,about,bimg) VALUES ('{$company}','{$title}','{$begins}','{$about}','{$src}')";
        $mysql->query($sql);
        if($mysql->affected_rows){
            $message = '内容成果插入';
            $url = 'showArticle.php';
        }else{
            $message = '内容插入失败';
            $url = 'addArticle.php';
        }
        include 'message.html';
    }

    /*$company = $_POST['company'];
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
    $sql = "insert into banner(company,title,begins,about,bimg) VALUES ('$company','$title','$bagins','$about','$file')";
    $mysql->query('$sql');
    if($mysql->affected_rows){
        $message = '内容添加成功';
        $url = 'showbanner.php';
    }else{
        $message = '内容添加失败';
        $url = 'showbanner.php';
    }
    include 'message.html';*/

