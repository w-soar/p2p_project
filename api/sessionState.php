<?php

session_start();
if (isset($_SESSION['username'])) {

    $username = $_SESSION['username'];
    $rst = ["isSuccess" => true, "msg" => "登录成功!","username"=>$username];
    echo json_encode($rst);
} else {
    $rst = ["isSuccess" => false, "msg" => "登录失败!"];
    echo json_encode($rst);
}



?>