<?php
    header('Content-type:text/html;charset=utf8');
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        include '../template/admin/login.html';
    }else{
//        验证
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $mysql =new mysqli('localhost','root','','full',3306);
        $mysql ->query('set names utf8');
        if($mysql -> connect_errno){
            echo '数据库链接失败，失败信息'.$mysql -> connect_errno;
            exit ;
        }
        $sql = "select *from admin";
        /*$sql ="select *from admin where uname = '$user'"*/
        /*$sql ="select *from admin where uname = '{$user}'"*/
        $result = $mysql ->query($sql);
        $arr = $result->fetch_all(MYSQL_ASSOC);
        //print_r
        for($i=0;$i<count($arr);$i++){
            if($arr[$i]['uname'] == $user && $arr[$i]['upass'] == $pass){
                header('location:main.php');
                exit ;
            }
            $message = '登录失败!';
            $url = 'login.php';
            include 'message.html';
            exit ;
        }
    }
?>