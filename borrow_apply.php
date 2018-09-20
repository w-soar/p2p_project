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
      
      <?php 
					require_once('./left.php');
					?>




        <!-- 右边 -->
        <div class="col-sm-9 el-borr-apply">
            <div class="el-tip-info">
				<h3>信用借款</h3>
				<p>
					<span class="text-info">授信额度：</span><span class="text-danger">2000 </span>    
					<span class="text-info">可借金额：</span><span class="text-danger">2000</span>
				</p>
            </div>
            <div class="page-header lead">
				借款信息
				<label class="label label-primary">信用标</label>
            </div>
			<form id="borrowForm" class="form-horizontal el-borrow-form">
				<div class="form-group">
					<label class=" col-sm-3 control-label">
						借款类型
					</label>
					<div class='col-sm-3 form-group'>	
					<select class=" form-control" name="borrowType" id="borrowType">
					<option value="p1">信用贷</option>
					<option value="p2">车易贷</option>
					<option value="p3">房易贷</option>
					</select>
					</div>
				
				</div>
				<div class="form-group">
					<label class=" col-sm-3 control-label">
						借款金额
					</label>
					<div class="col-sm-3 input-group">
						<input class="form-control" name="borrowAmount" />
						<span class="input-group-addon">元</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">
						借款利息
					</label>
					<div class="col-sm-3 input-group">
						<input class="form-control" name="currentRate" />
						<span class="input-group-addon">%</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">
						借款期限
					</label>
					<div class="col-sm-3 input-group">
						<select class="form-control" name="monthes2Return">
							<option value="1">1</option>
							<option value="3">3</option>
							<option value="6">6</option>
							<option value="9">9</option>
							<option value="12">12</option>
							<option value="24">24</option>
						</select>
						<span class="input-group-addon">月</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">
						还款方式
					</label>
					<label class=" radio-inline">
						<input type="radio" value="0" checked="checked" name="repayment" />
						按月分期
					</label>
					<label class=" radio-inline">
						<input type="radio" value="1" name="repayment" />
						按月到期
					</label>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">
						最小投标
					</label>
					<div class="col-sm-3 input-group">
						<input class="form-control" name="minAmount" />
						<span class="input-group-addon">元</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">
						最大投标
					</label>
					<div class="col-sm-3 input-group">
						<input class="form-control" name="maxAmount" />
						<span class="input-group-addon">元</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">
						投标奖金
					</label>
					<div class="col-sm-3 input-group">
						<input class="form-control" name="rewardAmount" value="0" />
						<span class="input-group-addon">%</span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">
						招标天数
					</label>
					<div class="col-sm-3 input-group">
						<select class="form-control" name="disableDays">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
						<span class="input-group-addon">天</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">
						借款标题
					</label>
					<div class="col-sm-6 input-group">
						<input name="borrowTitle" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">
						借款描述
					</label>
					<div class="col-sm-6  input-group">
						<textarea name="description" rows="4" class="form-control" style="resize: none;"></textarea>
					</div>
				</div>
				<div class="form-group">
					<button id='btnSubmit' class="btn btn-primary col-lg-offset-3" type="button" data-loading-text="提交">
						提交申请
					</button>
				</div>
				
			</form>

        </div>
    </section>



    <?php
			require_once('footer.php');
			?>


    <!-- <script src="./libs/jquery/jquery.min.js"></script> -->
    <script src="./libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/index.min.js"></script>
    <script>
        var borrUrl = location.href;
       var  borrowType = borrUrl.split('=')[1];
       $('#borrowType').val(borrowType);



	   $('#btnSubmit').on('click',function(){
		   var formDatas = $('#borrowForm').serialize();
		//    console.log(formDatas);
		   $.ajax({
			   type:'post',
			   url:'./api/borrowAdd.php',
			   dataType:'json',
			   data:formDatas,
			   success:function(rst){
                  if(rst.isSuccess){
					  location.href='./borrow_list.php';
				  }else{
					alert('添加失败~~')
				  }
			   }
		   })
	   })

    </script>
   
</body>

</html>