<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>实名认证</title>
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
            <div class="row offcanvas offcanvas-left">
                <div class="col-sm-3 el-main-left asideBar">
                    <ul class="list-group">
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
                                <li>
                                    <a href="">账户信息</a>
                                </li>
                                <li class="active">
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
                            <a href="">资产详情</a>

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
                    </ul>
                </div>
                <div class="col-sm-9 realAuth">
                <div class="panel panel-default">
						<div class="panel-heading">
							实名认证
						</div>
							<form class="form-horizontal" id="realAuthForm" method="post" action="realAuth_save.html" novalidate="novalidate">
							<fieldset>
								<div class="form-group">
									<p class="text-center text-danger">为保护您账户安全，实名认证成功之后不能修改信息，请认真填写！</p>
								</div>
								<div class="form-group">
						        	<label class="col-sm-4 control-label ">用户名</label>
					        		<div class="col-sm-8">
						        		<p class="form-control-static">小强</p>
						        	</div>
						        </div>
								<div class="form-group">
						        	<label class="col-sm-3 control-label" for="realName">姓名</label>
					        		<div class="col-sm-6">
						        		<input id="realName" name="realName" class="form-control" type="text" value="">
						        	</div>
						        </div>
						        <div class="form-group">
						        	<label class="col-sm-3  control-label" for="sex">性别</label>
					        		<div class="col-sm-6">
						        		<select id="sex" class="form-control" name="sex" size="1">
											<option value="0">男</option>
											<option value="1">女</option>
										</select>
						        	</div>
						        </div>
						        <div class="form-group">
						        	<label class="col-sm-3  control-label" for="idtype">证件类型</label>
					        		<div class="col-sm-6">
						        		<select id="idType" class="form-control" name="idtype" size="1">
											<option value="0">身份证</option>
											<option value="1">驾驶证</option>
											<option value="2">军官证</option>
										</select>
						        	</div>
						        </div>
						        <div class="form-group">
						        	<label class="col-sm-3  control-label" for="idnumber">证件号码</label>
					        		<div class="col-sm-6">
						        		<input id="idNumber" class="form-control" name="idnumber" type="text" value="">
						        	</div>
						        </div>
						        <div class="form-group">
						        	<label class="col-sm-3  control-label" for="birthdate">出生日期</label>
					        		<div class="col-sm-6">
						        		<input id="birthDate" class="form-control" name="birthdate" type="text">
						        	</div>
						        </div>
						        <div class="form-group">
						        	<label class="col-sm-3  control-label" for="address">证件地址</label>
					        		<div class="col-sm-6">
						        		<input id="address" class="form-control" name="address" type="text" style="max-width: 100%;width:500px;">
						        	</div>
						        </div>
						        <div class="form-group">
						        	<label class="col-sm-3  control-label" for="address">身份证照片</label>
					        		<div class="col-sm-6">
					        			<p class="text-help text-primary">请点击“选择图片”,选择证件的正反两面照片。</p>
					        			<a href="javascript:;" id="viewExample" data-html="true" data-toggle="tooltip" data-placement="top" title="" data-template="" data-original-title="hahahahahaha">查看样板</a>


					        			<div class="idCardItem">
					        				<div>
					        					<a href="javascript:;" >上传正面</a>
					        				</div>
					        				<img alt="" src="" >
					        				<input type="hidden" value="">
					        			</div>
					        			<div class="idCardItem">
					        				<div>
					        					<a href="javascript:;">上传反面</a>
					        				</div>
					        				<img alt="" src="" class="uploadImg" >
					        				<input type="hidden" value="" >
					        			</div>
					        			<div class="clearfix"></div>
						        	</div>
						        </div>
						        <div class="form-group">
						        	<button type="submit" id="asubmit" class="btn btn-primary col-sm-offset-4" data-loading-text="正在提交"><i class="icon-ok"></i> 提交认证</button>
						        </div>
							</fieldset>
						</form>
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
$(".asideBtn").on('touchend',function(event){

    // 阻止事件冒泡
    event.stopPropagation();
//            console.debug('asideBtn');

    // 判断是否已经展开
    if($('.offcanvas').hasClass("active")){
        // 关闭时，隐藏菜单，并修改箭头
        $('.offcanvas').removeClass('active');
        $(this).html('<i class="fa fa-angle-double-right" aria-hidden="true"></i>');
    }else{
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
var startX,endX;
$(".el-main-center")
    .on('touchstart',function(event){

//                console.debug('center');
    // 记录开始触摸的坐标值
    startX = event.originalEvent.changedTouches[0].pageX;
}).on('touchend',function(event){

    endX = event.originalEvent.changedTouches[0].pageX;


    console.log(startX,endX);

    // 验证如果滑动距离大于30px
    if(endX-startX>30){
        // 意为展开
        // 展开时，显示菜单，并修改箭头
        $('.offcanvas').addClass('active');
        $('.asideBtn').html('<i class="fa fa-angle-double-left" aria-hidden="true"></i>');
    }else{
        // 只有在展开菜单时，才触发收缩
        if($('.offcanvas').hasClass("active")){
            // 关闭时，隐藏菜单，并修改箭头
            $('.offcanvas').removeClass('active');
            $('.asideBtn').html('<i class="fa fa-angle-double-right" aria-hidden="true"></i>');
        }
    }
});

</script>
</body>

</html>