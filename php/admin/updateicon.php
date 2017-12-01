<?php
    header('Content-type:text/html;charset=utf8');
    include '../libs/db.php';
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        include '../libs/function.php';
        $id = $_GET['id'];
        $obj = new unit();
        $obj->model = 'icon';
        $iconname =$obj->selectOne3($mysql,'icon',$id,'iconname');
        $sketch =$obj->selectOne3($mysql,'icon',$id,'sketch');
        $description =$obj->selectOne3($mysql,'icon',$id,'description');
        $com1 =$obj->selectOne3($mysql,'icon',$id,'com1');
        $com2 = $obj->selectOne3($mysql,'icon',$id,'com2');
        $introduction = $obj->selectOne3($mysql,'icon',$id,'introduction');
        $img = $obj->selectOne3($mysql,'icon',$id,'img');
        include '../template/admin/updateicon.html';
    }else{
        $id = $_POST['id'];
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
        $sql = "update icon set iconname = '{$iconname}',sketch = '{$sketch}',description = '{$description}',com1 = '{$com1}',com2 = '{$com2}',introduction = '{$introduction}',img= '{$src}'where id ={$id}";
        $mysql->query($sql);
        if($mysql->affected_rows){
            $message = '修改文章成功';
            $url = 'showicon.php';
        }else{
            $message = '修改文章失败';
            $url = 'showicon.php';
        }
        include 'message.html';
    }