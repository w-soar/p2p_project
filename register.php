<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
       <!-- <link rel="stylesheet" href="./libs/bootstrapvalidator/dist/css/bootstrapvalidator.min.css"> -->
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
                            <li><span class="el-page-title">用户注册</span></li>
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
                <div class="panel-title ">用户注册</div> 
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-sm-3 "></div>
                    <div class="col-sm-4 login_tit"  > 请填写注册信息，点击“提交注册”即可完成注册！</div>
                </div>
                 <form action="usersReg.php" method="POST"  id="regForm">
                    <div class="row">
                        <label class="col-sm-4 col-xs-3  text-right" style='line-height:35px;'>用户名</label>
                        <div class=" col-sm-3  col-xs-7  form-group">
                            <input type="text" class="form-control" data-bv-trigger='blur' name="username" placeholder="请输入用户名" />
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-xs-3 text-right" style='line-height:30px;'>密&emsp;码</label>
                        <div class=" col-sm-3 col-xs-7  form-group">
                            <input type="text" class="form-control" name="password"/>
                        </div>
                    </div>
                     <div class="row">
                        <label class="col-sm-4 col-xs-3 text-right" style='line-height:30px;'>确认密码</label>
                        <div class=" col-sm-3 col-xs-7  form-group">
                            <input type="text" class="form-control" name="repeatPassword"/>
                        </div>
                    </div>
                     <div class="row">
                        <label class="col-sm-4 col-xs-3 text-right" style='line-height:30px;'>电话</label>
                        <div class=" col-sm-3 col-xs-7  form-group">
                            <input type="text" class="form-control" name="mobile"/>
                        </div>
                    </div>
                     <div class="row">
                        <label class="col-sm-4 col-xs-3 text-right" style='line-height:30px;'>邮件</label>
                        <div class=" col-sm-3 col-xs-7  form-group">
                            <input type="text" class="form-control" name="email"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-xs-4"></div>
                        <div class="col-sm-4 col-xs-8 form-group">
                            <input type="checkbox" class="pull-left" >
                           <span>阅读并接受</span> <a href="#" class="">  《使用协议说明书》</a>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-xs-4"></div>
                        <div class="col-sm-4 col-xs-8 form-group">
                            <input type="submit" class=" btn btn-success pull-left" value="同意协议并注册">
                            <a href="#" class="new pull-left">已有账号，马上登录</a>
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



    <script src="./libs/jquery/jquery.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="./libs/bootstrapvalidator/dist/jsbootstrapvalidator.min.js"></script> -->
     <script src="./libs/bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script>
    <script src="./dist/js/index.min.js"></script>
    <script src="./dist/js/regLogin.min.js"></script>
</body>
</html>

