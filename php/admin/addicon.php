<?php
    header('Content-type:text/html;charset=utf8');
    include '../libs/db.php';
    if($_SERVER['REQUEST_METHOD'] =='GET'){
        include '../template/admin/addicon.html';
    }else{
        $iconname = $_POST['iconname'];
        $sketch = $_POST['sketch'];
        $description = $_POST['description'];
        $com1 = $_POST['com1'];
        $com2 = $_POST['com2'];
        $introduction = $_POST['introduction'];
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
        $sql="insert into icon(iconname,sketch,description,com1,com2,introduction,img) VALUES ('{$iconname}','{$sketch}','{$description}','{$com1}','{$com2}','{$introduction}','{$src}')";
        $mysql->query($sql);
        if($mysql->affected_rows){
            $message = '内容成果插入';
            $url = 'showicon.php';
        }else{
            $message = '内容插入失败';
            $url = 'addAicon.php';
        }
        include 'message.html';
    }