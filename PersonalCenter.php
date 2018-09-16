<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <!-- 引入bootstap。css样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <!-- 重置样式引入 -->
    <link rel="stylesheet" href="./dist/css/PersonalCenter.min.css">
    <!-- jquery样式引入 -->
    <script src="./lib/jQuery/jquery.min.js"></script>
    <!--//=====验证是否登陆=====//-->
    <script src="./dist/js/Chickuser.min.js"></script>
</head>
<body>

<!-- 头部导航样式 -->
<?php
require_once('./header.php');
require_once('./headerTwo.php');
?>;

<!--==========开始--中间内容--Intermediate content===========-->
<div class="container">
    <div class="row right_per">

        <!--==========左边的导航栏===========-->
        <div class="col-md-3 PerCen">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    投资项目
                </a>
            </div>
            <div class="list-group ">
                <a href="#" class="list-group-item active">
                    借款项目
                </a>
                <a href="#" class="list-group-item ">借款项目</a>
                <a href="#" class="list-group-item ">还款明细</a>
            </div>
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    借款项目
                </a>
                <a href="#" class="list-group-item ">借款项目</a>
                <a href="#" class="list-group-item ">借款项目</a>
            </div>
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    借款项目
                </a>
                <a href="#" class="list-group-item ">借款项目</a>
                <a href="#" class="list-group-item ">借款项目</a>
            </div>
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    借款项目
                </a>
                <a href="#" class="list-group-item ">借款项目</a>
                <a href="#" class="list-group-item ">借款项目</a>
            </div>

        </div>

        <!--==========右边的导航栏===========-->
        <div class="col-md-9">
            <div class="panel panel-default PerCen_L">
                <!--==========右边头部===========-->
                <div class="panel-heading clearfix">
                    <img class="pull-left img-responsive" src="./images/head_icon.jpg" alt="">
                    <div class="pull-left">
                        <p id="nameper">昵 称：源代码教育</p>
                        <p>最后登录时间：2016-10-25 15:30:10</p>
                    </div>
                </div>

                <!--==========右边内容部分===========-->
                <div class="panel-body">
                    <div class="row h4">
                        <div class="col-sm-4">
                            总金额：<span class="text-primary">10000元</span>
                        </div>
                        <div class="col-sm-4">
                            可用金额：<span class="text-primary">8000元</span>
                        </div>
                        <div class="col-sm-4">
                            冻结金额：<span class="text-primary">2000元</span>
                        </div>
                    </div>

                    <div class="btn_L">
                        <a class="btn btn-primary btn-lg" href="#">账户充值</a>
                        <a class="btn btn-danger btn-lg" href="#">账户提现</a>
                    </div>

                    <div class="el-account-info PenCen_B">
                        <div class="row">
                            <div class="col-sm-4">
                                <div>
                                    <div>
                                        <img class="pull-left" src="images/shiming.png"/>
                                    </div>

                                    <div>
                                        <h5 class="">实名认证</h5>
                                        <p>
                                            未认证
                                            <a href="#">马上认证</a>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="info">实名认证之后才能在平台投资</p>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div>
                                    <div>
                                        <img class="pull-left" src="images/shouji.jpg"/>
                                    </div>

                                    <div>
                                        <h5 class="">手机认证</h5>
                                        <p>
                                            已认证
                                            <a href="#">查看

                                            </a>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="info">实名认证之后才能在平台投资</p>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div>
                                    <div>
                                        <img class="pull-left" src="images/youxiang.jpg"/>
                                    </div>

                                    <div>
                                        <h5 class="">邮箱认证</h5>
                                        <p>
                                            已认证
                                            <a href="#">查看</a>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="info">您可以设置邮箱来接收重要信息</p>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div>
                                    <div>
                                        <img class="pull-left" src="images/baozhan.jpg"/>
                                    </div>

                                    <div>
                                        <h5 class="">VIP会员</h5>
                                        <p>
                                            普通用户
                                            <a href="#">查看</a>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="info">VIP会员，让你更快捷的投资</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<!--==========结束--中间内容--Intermediate content===========-->
<!-- 尾部导航 -->
<?php
require_once('./fooTer.php');
?>

<!--//=====bootstapjss======// -->
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
<!-- 自定义的js样式 -->
<script src="./dist/js/index.min.js"></script>
<script>
    //=====请用用户名数据======//
    $.get('./Api/Chickuser.php', function (data) {
        // console.log(data);
        if (data.isSuccess) {
            var strlogin = ` <p id="nameper">用户名： ${data.username}</p>`;
            $("#nameper").after(strlogin);
        }
    }, 'json');
</script>
</body>
</html>