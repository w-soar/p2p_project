<?php
require_once('../common.php');

//    连接数据库
$link = mysqli_connect('localhost', 'root', 'root', 'finance', 3306);
$username = $_POST["username"];
$sql = "select * from reg where username='".$username."'";
$rst = mysqli_query($link, $sql);

$arr = mysqli_fetch_assoc($rst);

// var_dump($arr);

 if($arr){
    $rstArr=['valid'=>false,'msg'=>'不可用~~'];
    echo json_encode($rstArr);
    //   echo json_encode(array("valid"=>false));
 }else{
    $rstArr=['valid'=>true,'msg'=>'可用~~'];
    echo json_encode($rstArr);
    // echo json_encode(array("valid"=>true));
 }
?>