<?php
include_once('./common.php');
 
//    连接数据库
$link = mysqli_connect('localhost', 'root', 'root', 'finance', 3306);


$username = $_POST["username"];
$password = $_POST["password"];
$repeatPassword = $_POST["repeatPassword"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];

//  构造sql 语句 （增加）
$sql = "insert into reg (username,password,repeatPassword,mobile,email) values('" . $username . "','" . $password . "','" . $repeatPassword . "','" . $mobile . "','" . $email . "')";
//  操作
$rst = mysqli_query($link, $sql);

// echo $rst;
if (!$rst) {
    echo '失败!!!!';
} else {
    echo "<script>;location.href='./login.php';</script>";
    // echo "alert('添加成功!');location.href='./login.php';";
}



?>