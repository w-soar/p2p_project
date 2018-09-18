<nav class="navbar  navbar-default navbar-inverse">
            <div class="container-fluid nav_top ">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                            aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <span class="glyphicon glyphicon-phone-alt"></span>
                            <i>028-86261949</i>
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- 登录以后  -->
                            <li class='isAppend'><a href="#">首页</a></li>
                            <!-- 登录后 -->

                             <!--  未登录 -->
                             
                            <li><a href="#">帮助</a></li>
                            <li class="erweima"><a href="#" class="" data-toggle="tooltip" data-placement="bottom"
                                    data-html='true' title="<img  src='./images/contract.png'/>"> 联系客服
                                </a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <script src="./libs/jquery/jquery.min.js"></script>
        <script>
        
        
    $.ajax({
        type:'get',
        type:'get',
        url:'./api/sessionState.php',
        dataType:'json',
        success:function(data){
            // console.log(data);
            if(data.isSuccess){
                var str= `<li><a href="#">${data.username}</a></li>
                          <li><a href="#">赶快充值</a></li>
                          <li><a href="./api/loginOut.php">注销</a></li>`;
                  $('.isAppend').after(str);

            }else{
                var str= `<li><a href="./login.php">登录</a></li>
                          <li><a href="./register.php">快速注册</a></li>`;
                  $('.isAppend').after(str);
            }    

        }
        });
</script>