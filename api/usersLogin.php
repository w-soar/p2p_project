<?php
require_once('../common.php');

//    连接数据库
$link = mysqli_connect('localhost', 'root', 'root', 'finance', 3306);
$username = $_POST["userName"];
$password = $_POST["passWord"];
$sql = "select * from reg where username='".$username."' and  password='".$password."'";
$rst = mysqli_query($link, $sql);

$arr = mysqli_fetch_assoc($rst);
     
  

if($arr!=null){
    $rstArr=['isSuccess'=>true,'msg'=>'成功yeah~~~'];
    echo json_encode($rstArr);
}else{
    $rstArr=['isSuccess=>false','msg'=>'失败~~~'];
    echo json_encode($rstArr);
}


// var_dump($arr);

//  if($arr){
//       echo json_encode(array("valid"=>true));
//  }else{
//     echo json_encode(array("valid"=>false));
//  }
?>