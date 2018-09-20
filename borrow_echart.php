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
            <!-- Nav tabs -->
         
            <!-- 右侧的内容 -->
            <div class="col-sm-9 col-xs-12" id="mainContent">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">借款类别及金额统计</h3>
                    </div>
                    <div class="panel-body">
                        <!-- 1. 为ECharts准备一个具备大小（宽高）的Dom -->    
                        <div id="mybox" style="width: 100%; height:400px"></div>
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
    <script src="./libs/echarts/echarts-all.js"></script>
    <script src="./src/js/echart.js"></script>
   
</body>

</html>