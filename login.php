<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./libs/bootstrapvalidator/dist/css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="./dist/css/minCss/common.min.css">
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
    <link rel="stylesheet" href="./dist/css/minCss/login.min.css">

</head>

<body>
    <!-- 导航 -->
    <header class="el-topbar">
        <?php
        require_once('topNav.php');
        ?>
        
        <!-- 内容导航 -->
        <div class="cont_nav">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="container cont_nav_hover">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#"><img src="./images/logo.png" alt=""></a>
                        </div>
                        <ul class="nav navbar-nav none">
                            <li><span class="el-page-title">用户登录</span></li>
                        </ul>
                        <!-- </div>/.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </div>
            </nav>
        </div>
    </header>
   
    <section class="el-main container">
        <div class="panel panel-default ">
            <div class="panel-heading">
                <div class="panel-title">用户登录</div> 
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-sm-4 "></div>
                    <div class="col-sm-3 login_tit"  > 请输入用户名和密码</div>
                </div>
                 <form  method="POST" role="form" id="loginForm">
                        <div class="row">
                            <div class="col-sm-4 col-xs-3  text-right" style='line-height:35px;'>用户名</div>
                            <div class="col-sm-3  col-xs-7 form-group">
                                <input type="text"  class="form-control" name="userName">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-xs-3 text-right" style='line-height:30px;'>密&emsp;码</div>
                            <div class="col-sm-3 col-xs-7 form-group">
                                <input type="text" class="form-control" name="passWord">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 col-xs-4"></div>
                            <div class="col-sm-4 col-xs-8 form-group">
                                <input type="submit" class=" btn btn-success pull-left" value="登录">
                                <a href="#" class="new pull-left">新用户，马上注册</a>

                            </div>
                        </div>
               </form>
            </div>
        </div>
    </section>

<!-- 页脚 -->
<?php
require_once('footer.php');
?>

   <!-- 蒙层的html结构 -->
   <div class="modal fade" id="msgShowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="msgShowTitle">标题</h4>
        </div>
        <div class="modal-body" id="msgShowContent">
            内容
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button>
        </div>
        </div>
    </div>
    </div>







    <script src="./libs/jquery/jquery.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="./libs/bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script>
    <script src="./dist/js/index.min.js"></script>
    <script src="./dist/js/regLogin.min.js"></script>

</body>

</html>