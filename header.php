 <div class="cont_nav">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="container cont_nav_hover">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#"><img src="./images/logo.png" alt=""></a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="./index.php?navid=1">首页</a></li>
                            <li><a href="./invest.php?navid=2">我要投资</a></li>
                            <li><a href="./borrow.php?navid=3">我要借款</a></li>
                            <li><a href="./personal.php?navid=4">个人中心</a></li>
                            <li><a href="#">新手指引</a></li>
                            <li><a href="#">关于我们</a></li>
                        </ul>
                        <!-- </div>/.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </div>
            </nav>
        </div>

        <script>
              var reqUrl=location.href;
                //菜单的id
                var menuid=reqUrl.split("=")[1];
                //console.log(menuid);
                
                $("#mainMenu li").eq(menuid-1).addClass("active").siblings("li").removeClass("active");
                        
        </script>