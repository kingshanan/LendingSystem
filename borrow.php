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
    <link rel="stylesheet" href="./dist/css/borrow.min.css">
</head>
<body>
<!-- 头部导航样式 -->
<?php
require_once('./header.php');
require_once('./headerTwo.php');
?>;


<!--//======== 中间内容部分 =======//-->
<!-- 网页内容 -->
<div class="container el-borrow">
    <div class="row">
        <div class="el-borrow-item col-sm-4">
            <div class="el-borrow-item-title" style="background-color: #40d47e;">
                信用贷</div>
            <div class="el-borrow-item-content">
                <p>
                    可借金额 <i>¥ 2,000.00</i>
                </p>
                <a href="#" class="text-primary">申请条件</a>
                <p class="help-block">仅限成都地区</p>
                <ul>
                    <li>填写基本资料</li>
                    <li>身份认证</li>
                    <li>视频认证</li>
                </ul>
                <a href="./userPersonal.php?id=t1" class="el-borrow-apply">
                    立刻申请
                </a>
            </div>
        </div>
        <div class="el-borrow-item col-sm-4">
            <div class="el-borrow-item-title">车易贷</div>
            <div class="el-borrow-item-content">
                <p>
                    可借金额 <i>¥ 2,000.00</i>
                </p>
                <a href="#" class="text-primary">申请条件</a>
                <p class="help-block">仅限成都地区</p>
                <ul>
                    <li>填写基本资料</li>
                    <li>身份认证</li>
                    <li>视频认证</li>
                </ul>
                <a href=./userPersonal.php?id=t2" class="el-borrow-apply">
                    立刻申请
                </a>
            </div>
        </div>
        <div class="el-borrow-item col-sm-4">
            <div class="el-borrow-item-title" style="background-color: #2ca2ee;">
                房易贷</div>
            <div class="el-borrow-item-content">
                <p>
                    可借金额 <i>¥ 12,000.00</i>
                </p>
                <a href="#" class="text-primary">申请条件</a>
                <p class="help-block">仅限成都地区</p>
                <ul>
                    <li>填写基本资料</li>
                    <li>身份认证</li>
                    <li>视频认证</li>
                </ul>
                <a href=./userPersonal.php?id=t3" class="el-borrow-apply">
                    立刻申请
                </a>
            </div>
        </div>
    </div>
</div>

<!-- 尾部导航 -->
<?php
require_once('./fooTer.php')
?>
<!-- jquery样式引入 -->
<script src="./lib/jQuery/jquery.min.js"></script>
<!-- bootstap。jss -->
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
<!-- 自定义的js样式 -->
<script src="./dist/js/index.min.js"></script>
</body>
</html>
</body>
</html>