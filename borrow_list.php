<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0",user-scalable=no>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>借款列表</title>
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
    <!-- 模板的内容开始 -->
    <div class="container" id="personal">
        <div class="row">
            <!-- 左侧的菜单 -->
            <?php
               require_once("./left.php");
            ?>

            <!-- 右侧的内容 -->
            <div class="col-sm-9 col-xs-12" id="mainContent">
              
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">我的借款信息列表</h3>
                    </div>
                    <div class="panel-body">
                    <div class="row">
                    <table class="table table-striped __web-inspector-hide-shortcut__">
                        <thead>
                        <tr>
                            <th>标题</th>
                            <th>时间</th>
                            <th>借款金额(元)</th>
                            <th>期限</th>
                            <th>利率</th>
                            <th>状态</th>
                        </tr>
                        </thead>
                        <tbody id="borrowData">
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 模板的内容结尾 -->

		



     
    </section>



    <?php
			require_once('footer.php');
			?>


    <!-- <script src="./libs/jquery/jquery.min.js"></script> -->
    <script src="./libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/index.min.js"></script>
    <script>
      


		   $.ajax({
			   type:'get',
			   url:'./api/borrowList.php',
			   dataType:'json',
			   success:function(data){
                //   console.log(data);
                var rstStr = '';
                for(i=0;i<data.length;i++){
                        rstStr += ` <tr>
                        <td>${data[i].borrowTitle}</td>
                        <td>${data[i].submitDatetime}</td>
                        <td>${data[i].borrowAmount}</td>
                        <td>${data[i].monthes2Return}</td>
                        <td>${data[i].currentRate}%</td>
                        <td>
                           <label class="text-muted">待发布</label>
                        </td>
                        </tr>`
                }
        
                           $('#borrowData').html(rstStr);
			   }
		   });
	 
        
    </script>
   
</body>

</html>