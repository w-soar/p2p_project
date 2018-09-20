<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0",user-scalable=no>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人中心</title>
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
    <section class='container el-main' style="margin-top:30px;">
      
      <?php 
        require_once('./left.php');
      ?>




        <!-- 右边 -->
        <div class="col-sm-9 el-main-center">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#personalInfo" aria-controls="personalInfo" role="tab"
                        data-toggle="tab" aria-expanded="true">个人信息</a></li>
                <li role="presentation" class=""><a href="#income" aria-controls="income" role="tab" data-toggle="tab"
                        aria-expanded="false">收益详情</a></li>
            </ul>

            <!-- 选项卡内容 -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="personalInfo">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <!--操作按钮-->
                            <!-- <a href="#" class="asideBtn btn btn-primary visible-xs">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </a> -->

                            <section class="el-accountInfo clearfix ">
                                <div class="pull-left el-accountInfo-photo">
                                    <img src="./images/head_icon.jpg" alt="请添加头像..">
                                </div>
                                <div class="pull-left el-accountInfo-text">
                                    <p>昵 称：源码时代</p>
                                    <p>用户名：小源</p>
                                    <p>最后登录时间：2016-10-25 15:30:10</p>
                                </div>
                            </section>
                            <section class="el-accountMoney">
                                <div class="row text-center">
                                    <div class="col-sm-4">
                                        总金额:<span class="text-primary">10000</span>
                                    </div>
                                    <div class="col-sm-4">
                                        可用金额:<span class="text-primary">8000</span>
                                    </div>
                                    <div class="col-sm-4">
                                        冻结金额:<span class="text-primary">2000</span>
                                    </div>
                                </div>
                            </section>
                            <section class="el-accountBtn text-center">
                                <a href="" class="btn btn-primary btn-lg">账户充值</a>
                                 
                                <a href="" class="btn btn-danger btn-lg">账户提现</a>
                            </section>
                            <section class="el-authInfo">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="pull-left">
                                            <img src="./images/shiming.png" alt="">
                                        </div>
                                        <div class="pull-left el-cont">
                                            <h5>实名认证</h5>
                                            <p>
                                                未认证
                                                <a href="#">马上认证</a>
                                            </p>
                                        </div>
                                        <p class="pull-left emp">
                                            实名认证之后才能在平
                                        </p>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="pull-left">
                                            <img src="./images/shouji.jpg" alt="">
                                        </div>
                                        <div class="pull-left el-cont">
                                            <h5>实名认证</h5>
                                            <p>
                                                未认证
                                                <a href="#">马上认证</a>
                                            </p>
                                        </div>
                                        <p class="pull-left emp">
                                            实名认证之后才能在平
                                        </p>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="pull-left">
                                            <img src="./images/youxiang.jpg" alt="">
                                        </div>
                                        <div class="pull-left el-cont">
                                            <h5>实名认证</h5>
                                            <p>
                                                未认证
                                                <a href="#">马上认证</a>
                                            </p>
                                        </div>
                                        <p class="pull-left emp">
                                            实名认证之后才能在平
                                        </p>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="pull-left">
                                            <img src="./images/baozhan.jpg" alt="">
                                        </div>
                                        <div class="pull-left el-cont">
                                            <h5>实名认证</h5>
                                            <p>
                                                未认证
                                                <a href="#">马上认证</a>
                                            </p>
                                        </div>
                                        <p class="pull-left emp">
                                            实名认证之后才能在平
                                        </p>
                                    </div>
                              
                                   
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="income">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div id="incomeChart"></div>
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