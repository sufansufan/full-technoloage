<?php
//    $_FILES 接收前台发过来的文件
// echo time();
// date('Y-M-D',time());  时间
//    $file =$_FILES['img']['tmp_name'];
    $file =$_FILES['img'];
    if(is_uploaded_file($_FILES['img']['tmp_name'])){
        if(!file_exists('upload')){
            mkdir('upload');
        }
        $path = 'upload/' . date('y-m-d');
        if(!file_exists($path)){
            mkdir($path);
        }
        /*上传*/
        $imgPath = $path . '/' .$file['name'];
        move_uploaded_file($file['tmp_name'],$imgPath);
        $src = '/php/demo/'.$imgPath;
        echo "<img src='{$src}'>";

    }

