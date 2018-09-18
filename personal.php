<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <section class='container el-main'>
        
            <!-- 左边 -->
            <div class="col-sm-3 el-main-left asideBar">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel  panel-default" id="panel">
                        <div class="panel-heading left-tit" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    投资项目
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    借款项目
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <ul>
                                    <li>
                                        <a href="">借款详情</a>
                                    </li>
                                    <li>
                                        <a href="">还款项目</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    我的账户
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <ul>
                                    <li class="active">
                                        <a href="">账户信息</a>
                                    </li>
                                    <li>
                                        <a href="">实名认证</a>
                                    </li>
                                    <li>
                                        <a href="">银行卡管理</a>
                                    </li>
                                    <li>
                                        <a href="">登陆记录</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    资产详情
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                                <ul>
                                    <li>
                                        <a href="">账户流水</a>
                                    </li>
                                    <li>
                                        <a href="">充值明细</a>
                                    </li>
                                    <li>
                                        <a href="">提现记录</a>
                                    </li>
                                    <li>
                                        <a href="">收款明细</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>





                    <!-- <ul class="list-group">
                        <li class="list-group-item">
                            <a href="">投资项目</a>
                        </li>
                        <li class="list-group-item">
                            <a href="">借款项目</a>
                            <ul>
                                <li>
                                    <a href="">借款详情</a>
                                </li>
                                <li>
                                    <a href="">还款项目</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-group-item  ">
                            <a href=""> 我的账户</a>

                            <ul>
                                <li class="active">
                                    <a href="">账户信息</a>
                                </li>
                                <li>
                                    <a href="">实名认证</a>
                                </li>
                                <li>
                                    <a href="">银行卡管理</a>
                                </li>
                                <li>
                                    <a href="">登陆记录</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-group-item ">
                            <a href=""></a>

                            <ul>
                                <li>
                                    <a href="">账户流水</a>
                                </li>
                                <li>
                                    <a href="">充值明细</a>
                                </li>
                                <li>
                                    <a href="">提现记录</a>
                                </li>
                                <li>
                                    <a href="">收款明细</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-group-item ">
                            <a href="">个人资料</a></li>
                    </ul> -->
                </div>
        </div>






        
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
                            <a href="#" class="asideBtn btn btn-primary visible-xs">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </a>

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
                                        <div class="pull-left">
                                            <h5>实名认证</h5>
                                            <p>
                                                未认证
                                                <a href="#">马上认证</a>
                                            </p>
                                        </div>
                                        <p class="pull-left">
                                            实名认证之后才能在平
                                        </p>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="pull-left">
                                            <img src="./images/shouji.jpg" alt="">
                                        </div>
                                        <div class="pull-left">
                                            <h5>手机认证</h5>
                                            <p>
                                                已认证
                                                <a href="#">查看</a>
                                            </p>
                                        </div>
                                        <p class="pull-left">
                                            可以收到系统操作信息
                                        </p>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="pull-left">
                                            <img src="./images/youxiang.jpg" alt="">
                                        </div>
                                        <div class="pull-left">
                                            <h5>邮箱认证</h5>
                                            <p>
                                                已认证
                                                <a href="#">查看</a>
                                            </p>
                                        </div>
                                        <p class="pull-left">
                                            您可以设置邮箱来接收重要信息
                                        </p>
                                    </div>

                                    <div class="col-sm-4 col-xs-6">
                                        <div class="pull-left">
                                            <img src="./images/baozhan.jpg" alt="">
                                        </div>
                                        <div class="pull-left">
                                            <h5>VIP会员</h5>
                                            <p>
                                                普通用户
                                                <a href="#">查看</a>
                                            </p>
                                        </div>
                                        <p class="pull-left">
                                            VIP会员，让你更快捷的投资
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
    <script>
        $("#contract").tooltip();

        // 为展开按钮添加样式
        $(".asideBtn").on('touchend', function (event) {

            // 阻止事件冒泡
            event.stopPropagation();
            //            console.debug('asideBtn');

            // 判断是否已经展开
            if ($('.offcanvas').hasClass("active")) {
                // 关闭时，隐藏菜单，并修改箭头
                $('.offcanvas').removeClass('active');
                $(this).html('<i class="fa fa-angle-double-right" aria-hidden="true"></i>');
            } else {
                // 展开时，显示菜单，并修改箭头
                $('.offcanvas').addClass('active');
                $(this).html('<i class="fa fa-angle-double-left" aria-hidden="true"></i>');
            }

        });


        /**
         * 移动端触屏事件，分为3种
         *  touchstart : 手指开始触摸时，触发一次
         *  touchmove  ： 手动在屏幕上，移动时触发N次
         *  touchend   ： 手机离开屏幕时，触发一次
         */
        // 设定2个变量，记录开始和结束坐标
        var startX, endX;
        $(".el-main-center")
            .on('touchstart', function (event) {

                //                console.debug('center');
                // 记录开始触摸的坐标值
                startX = event.originalEvent.changedTouches[0].pageX;
            }).on('touchend', function (event) {

                endX = event.originalEvent.changedTouches[0].pageX;


                console.log(startX, endX);

                // 验证如果滑动距离大于30px
                if (endX - startX > 30) {
                    // 意为展开
                    // 展开时，显示菜单，并修改箭头
                    $('.offcanvas').addClass('active');
                    $('.asideBtn').html('<i class="fa fa-angle-double-left" aria-hidden="true"></i>');
                } else {
                    // 只有在展开菜单时，才触发收缩
                    if ($('.offcanvas').hasClass("active")) {
                        // 关闭时，隐藏菜单，并修改箭头
                        $('.offcanvas').removeClass('active');
                        $('.asideBtn').html('<i class="fa fa-angle-double-right" aria-hidden="true"></i>');
                    }
                }
            });
    </script>
</body>

</html>