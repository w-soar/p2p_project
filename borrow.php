<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0",user-scalable=no>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>借款中心</title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="./dist/css/minCss/common.min.css">
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
    <link rel="stylesheet" href="./dist/css/minCss/personal.min.css">

</head>
<script src="./libs/jquery/jquery.min.js"></script>
<script src="./src/js/checkSession.js"></script>

<body>
    <!-- 导航 -->
    <header class="el-topbar">
        <?php
        require_once('topNav.php');
        ?>
        <!-- 内容导航 -->
        <?php
        require_once('header.php');
        ?>
    </header>
    <!-- 内容 -->
    <section class='container el-borrow' style="margin-top:30px;">
      
    <div class="container">
            <div class="row mgt30 mgb20">
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title bold">信用贷</h3>
                        </div>
                        <div class="panel-body">
                            <p class="font18">可借金额 ¥ 2,000.00</p>
                            <p><a href="#">申请条件</a></p>
                            <p>仅限成都地区</p>
                            <p><img src="./images/sequare.png" alt="sequare">填写基本资料</p>
                            <p><img src="./images/sequare.png" alt="sequare">身份认证</p>
                            <p><img src="./images/sequare.png" alt="sequare">视频认证</p>
                            <p><a href='./borrow_apply.php?id=p1' class="col-sm-offset-5">立刻申请</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title bold">车易贷</h3>
                        </div>
                        <div class="panel-body">
                            <p class="font18">可借金额 ¥ 2,000.00</p>
                            <p><a href="#">申请条件</a></p>
                            <p>仅限成都地区</p>
                            <p><img src="./images/sequare.png" alt="sequare">填写基本资料</p>
                            <p><img src="./images/sequare.png" alt="sequare">身份认证</p>
                            <p><img src="./images/sequare.png" alt="sequare">视频认证</p>
                            <p><a href='borrow_apply.php?id=p2' class="col-sm-offset-5">立刻申请</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title bold">房易贷</h3>
                        </div>
                        <div class="panel-body">
                            <p class="font18">可借金额 ¥ 2,000.00</p>
                            <p><a href="#">申请条件</a></p>
                            <p>仅限成都地区</p>
                            <p><img src="./images/sequare.png" alt="sequare">填写基本资料</p>
                            <p><img src="./images/sequare.png" alt="sequare">身份认证</p>
                            <p><img src="./images/sequare.png" alt="sequare">视频认证</p>
                            <a href="./borrow_apply.php?id=p3" class="col-sm-offset-5">立刻申请</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


      
    </section>



    <?php
    require_once('footer.php');
    ?>


    <!-- <script src="./libs/jquery/jquery.min.js"></script> -->
    <script src="./libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/index.min.js"></script>
   
   
</body>

</html>