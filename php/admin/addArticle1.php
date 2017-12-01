<?php
    header('Content-type:text/html;charset=utf8');
    include '../libs/db.php';
    if($_SERVER['REQUEST_METHOD'] =='GET'){
        include '../libs/function.php';
        $obj = new unit();
        $str = $obj->cateTree(0,$mysql,'category',0);
        include '../template/admin/addArticle1.html';
    }else{
        $cid = $_POST['cid'];
        $title1 = $_POST['title1'];
        $title2 = $_POST['title2'];
        $notes = $_POST['notes'];
        $date = $_POST['date'];
        $content = $_POST['content'];
        $file = $_FILES['img'];
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
       $sql="insert into new1(cid,title1,title2,notes,date1,content,thumb) VALUES ('{$cid}','{$title1}','{$title2}','{$notes}','{$date}','{$content}','{$src}')";
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