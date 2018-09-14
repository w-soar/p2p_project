<?php
require_once('common.php');

//    连接数据库
$link = mysqli_connect('localhost', 'root', 'root', 'finance', 3306);
$username = $_POST["userName"];
$sql = "select * from reg where username='".$username."'";
$rst = mysqli_query($link, $sql);

$arr = mysqli_fetch_assoc($rst);
     
  
// var_dump($arr);

 if($arr){
      echo json_encode(array("valid"=>true));
 }else{
    echo json_encode(array("valid"=>false));
 }
?>