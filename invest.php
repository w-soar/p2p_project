<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我要投资</title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="./libs/JqueryPagination/jquery.pagination.css">
    <link rel="stylesheet" href="./dist/css/minCss/common.min.css">
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">

</head>

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
    <!-- 轮播 -->
    <div class="container">
        <h4 class="page-title">投资列表</h4>
        <form action="invest_list.html" id="searchForm">
            <div style="margin: 20px 0px;">
                <span class="text-muted">标的状态</span>
                <div style="margin-left: 30px" class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default active">
                        <input type="radio" name="bidRequestState" value="-1" autocomplete="off" checked />&emsp;全部&emsp;
                    </label>
                    <label class="btn btn-default">
                        <input type="radio" name="bidRequestState" value="2" autocomplete="off" />&emsp;招标中&emsp;
                    </label>
                    <label class="btn btn-default">
                        <input type="radio" name="bidRequestState" value="8" autocomplete="off" />&emsp;还款中&emsp;
                    </label>
                </div>
            </div>
        </form>
        <table class="table el-table table-hover">
            <thead id="gridHead">
                <tr>
                    <th>借款人</th>
                    <th width="180px">借款标题</th>
                    <th>年利率</th>
                    <th>金额</th>
                    <th>还款方式</th>
                    <th>进度</th>
                    <th width="80px">操作</th>
                </tr>
            </thead>
            <tbody id="gridBody">

            </tbody>
        </table>
        <!-- 此处是分页插件  4. 拷贝页面结构-->
        <div style="text-align: center;">
            <div id="page" class="m-pagination"></div>
        </div>
    </div>



    <?php
require_once('footer.php');
?>


    <script src="./libs/jquery/jquery.min.js"></script>
    <script src="./libs/jqueryTemplate/jquery.tmpl.js"></script>
    <script src="./libs/JqueryPagination/jquery.pagination-1.2.7.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/index.min.js"></script>
    <script id="borrowTmpl" type="text/html">
        <tr>
            <td>zs</td>
            <td>${borrowTitle}</td>
            <td class="text-info">${currentRate}%</td>
            <td class="text-info">${borrowAmount}</td>
            <td>${repayment}</td>
            <td>100.00%</td>
            <td><a class="btn btn-danger btn-sm" href="borrow_info.html?id=7">查看</a></td>
		</tr>
    </script>
    <script>
        //5. 配置插件的参数
        $("#page").page({
            debug: true, //开启调试
            showInfo: true, //显示调试信息
            pageSize: 5, //定义每页的数据条数
            showJump: true, //开启跳转功能
            showPageSizes: true, //用户自定义每页大小
            remote: {
                //请求数据的地址
                url: './api/borowwAll.php', //请求的数据
                //请求成功的回调函数
                success: function (data) {
                    console.log("获取api回来的数据", data);
                           //渲染模板
                      var htmlStr=$("#borrowTmpl").tmpl(data.list);
                       //把渲染后的结果更新到页面
                 $("#gridBody").html(htmlStr);

                   
                    //$("#eventLog").append(' remote callback : ' + JSON.stringify(data) + '<br />');
                }
            }
        });

        $("#page").on("pageClicked", function (event, pageIndex) {
            //$("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('jumpClicked', function (event, pageIndex) {
            //$("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('pageSizeChanged', function (event, pageSize) {
            //$("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
        });

        //   $("#page").page({
        //             debug: true,
        //             showInfo: true,
        //             showJump: true,
        //             showPageSizes: true,
        //             remote: {
        //                 url: './api/borowwAll.php',
        //                 success: function (data) {
        //                     console.log(data);

        //                     //渲染模板
        //                    var htmlStr=$("#borrowTmpl").tmpl(data.list);
        //                     //把渲染后的结果更新到页面
        //                     $("#gridBody").html(htmlStr);


        //                     // var rstStr = '';
        //                     // for(i=0;i<data.length;i++){
        //                     //     rstStr += ` <tr>
        //                     //                 <td>zs</td>
        //                     //                 <td>${data[i].borrowTitle}</td>
        //                     //                 <td class="text-info">${data[i].currentRate}%</td>
        //                     //                 <td class="text-info">${data[i].borrowAmount}</td>
        //                     //                 <td>${data[i].repayment}</td>
        //                     //                 <td>100.00%</td>
        //                     //                 <td><a class="btn btn-danger btn-sm" href="borrow_info.html?id=7">查看</a></td>
        //                     //                 </tr>   `
        //                     // }
        //                     // // $("#eventLog").append(' remote callback : ' + JSON.stringify(data) + '<br />');
        //                     // console.log(rstStr);
        //                     // $('gridBody').html(rstStr);
        //                 }
        //             }
        //         });
        //         $("#page").on("pageClicked", function (event, pageIndex) {
        //             //$("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
        //         }).on('jumpClicked', function (event, pageIndex) {
        //             //$("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
        //         }).on('pageSizeChanged', function (event, pageSize) {
        //             //$("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
        //         });
    </script>
</body>

</html>