<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
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
    <section>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="./images/banner01.jpg" alt="...">
                </div>
                <div class="item">
                    <img src="./images/banner02.jpg" alt="...">
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- 三大步 -->
    <section class="container el-feature">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <dl>
                    <dt>投资理财</dt>
                    <dd>
                        投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财
                    </dd>
                </dl>
            </div>
            <div class="col-sm-4 col-xs-12">
                <dl>
                    <dt>投资理财</dt>
                    <dd>
                        投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财
                    </dd>
                </dl>
            </div>
            <div class="col-sm-4 col-xs-12">
                <dl>
                    <dt>投资理财</dt>
                    <dd>
                        投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财投资理财
                    </dd>
                </dl>
            </div>
        </div>
    </section>
    <!-- 借款 -->
    <section class="container el_borrow">
        <div class="panel">
            <!-- Default panel contents -->
            <div class="panel-heading">
                <div class="pull-left">进行中借款</div>
                <div class="pull-right"> <a href="#">进行投资列表</a> </div>

            </div>
            <div class="panel-body table-responsive">
                <!-- Table -->
                <table class="table">
                    <thead>
                        <th>借款人</th>
                        <th  class="none">借款标题</th>
                        <th>年利率</th>
                        <th>金额</th>
                        <th  class="none">还款方式</th>
                        <th>进度</th>
                        <th>操作</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>某某</td>
                            <td class="none">给我20万让我渡过难关</td>
                            <td>10.00%</td>
                            <td>200,000</td>
                            <td class="none">按月分期还款</td>
                            <td>78.00%</td>
                            <td><button type="button" class="btn btn-danger btn-sm">查看</button></td>
                        </tr>
                        <tr>
                            <td>某某</td>
                            <td class="none">给我20万让我渡过难关</td>
                            <td>10.00%</td>
                            <td>200,000</td>
                            <td class="none">按月分期还款</td>
                            <td>78.00%</td>
                            <td><button type="button" class="btn btn-danger btn-sm">查看</button></td>
                        </tr>
                        <tr>
                            <td>某某</td>
                            <td class="none">给我20万让我渡过难关</td>
                            <td>10.00%</td>
                            <td>200,000</td>
                            <td class="none">按月分期还款</td>
                            <td>78.00%</td>
                            <td><button type="button" class="btn btn-danger btn-sm">查看</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- 新闻资讯 -->
    <section class="container el_news">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="panel news">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                        <div class="pull-left">企业最新资讯</div>
                        <div class="pull-right"> <a href="#">更多资讯</a> </div>
                    </div>
                    <div class="panel-body">
                       <ul>
                           <li>
                               <a href="#">
                                   <div class="pull-left">
                                        央视力挺互联网金融
                                   </div>
                                   <div class="pull-right">
                                        发表日期：2015-03-23
                                   </div>
                               </a>
                           </li>
                          <li>
                               <a href="#">
                                   <div class="pull-left">
                                        央视力挺互联网金融
                                   </div>
                                   <div class="pull-right">
                                        发表日期：2015-03-23
                                   </div>
                               </a>
                           </li>
                          <li>
                               <a href="#">
                                   <div class="pull-left">
                                        央视力挺互联网金融
                                   </div>
                                   <div class="pull-right">
                                        发表日期：2015-03-23
                                   </div>
                               </a>
                           </li>
                       </ul>
                      
                    </div>
                </div>
            </div>
             <div class="col-sm-6 col-xs-12">
                <div class="panel news">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                        <div class="pull-left">用户反馈</div>
                        <div class="pull-right"> <a href="#">更多资讯</a> </div>
                    </div>
                    <div class="panel-body">
                       <ul>
                           <li>
                               <a href="#">
                                   <div class="pull-left">
                                        央视力挺互联网金融
                                   </div>
                                   <div class="pull-right">
                                        发表日期：2015-03-23
                                   </div>
                               </a>
                           </li>
                          <li>
                               <a href="#">
                                   <div class="pull-left">
                                        央视力挺互联网金融
                                   </div>
                                   <div class="pull-right">
                                        发表日期：2015-03-23
                                   </div>
                               </a>
                           </li>
                          <li>
                               <a href="#">
                                   <div class="pull-left">
                                        央视力挺互联网金融
                                   </div>
                                   <div class="pull-right">
                                        发表日期：2015-03-23
                                   </div>
                               </a>
                           </li>
                       </ul>
                      
                    </div>
                </div>
            </div>
              <div class="col-sm-6 col-xs-12">
                <div class="panel news">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                        <div class="pull-left">理财经验</div>
                        <div class="pull-right"> <a href="#">更多资讯</a> </div>
                    </div>
                    <div class="panel-body">
                       <ul>
                           <li>
                               <a href="#">
                                   <div class="pull-left">
                                        央视力挺互联网金融
                                   </div>
                                   <div class="pull-right">
                                        发表日期：2015-03-23
                                   </div>
                               </a>
                           </li>
                          <li>
                               <a href="#">
                                   <div class="pull-left">
                                        央视力挺互联网金融
                                   </div>
                                   <div class="pull-right">
                                        发表日期：2015-03-23
                                   </div>
                               </a>
                           </li>
                          <li>
                               <a href="#">
                                   <div class="pull-left">
                                        央视力挺互联网金融
                                   </div>
                                   <div class="pull-right">
                                        发表日期：2015-03-23
                                   </div>
                               </a>
                           </li>
                       </ul>
                      
                    </div>
                </div>
            </div>
              <div class="col-sm-6 col-xs-12">
                <div class="panel news">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                        <div class="pull-left">活动分享</div>
                        <div class="pull-right"> <a href="#">更多资讯</a> </div>
                    </div>
                    <div class="panel-body">
                       <ul>
                           <li>
                               <a href="#">
                                   <div class="pull-left">
                                        央视力挺互联网金融
                                   </div>
                                   <div class="pull-right">
                                        发表日期：2015-03-23
                                   </div>
                               </a>
                           </li>
                          <li>
                               <a href="#">
                                   <div class="pull-left">
                                        央视力挺互联网金融
                                   </div>
                                   <div class="pull-right">
                                        发表日期：2015-03-23
                                   </div>
                               </a>
                           </li>
                          <li>
                               <a href="#">
                                   <div class="pull-left">
                                        央视力挺互联网金融
                                   </div>
                                   <div class="pull-right">
                                        发表日期：2015-03-23
                                   </div>
                               </a>
                           </li>
                       </ul>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>



 <?php
           require_once('footer.php');
?>


    <script src="./libs/jquery/jquery.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/index.min.js"></script>
</body>

</html>