<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <!-- 引入bootstap。css样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <!-- 重置样式引入 -->
    <link rel="stylesheet" href="./dist/css/userPersonal.min.css">
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
?>

<!--==========开始--中间内容--Intermediate content===========-->
<div class="container" id="personCon">
    <div class="row right_per">
        <!--==========左边的导航栏===========-->
       <?php
       require_once ('./Leftnav.php')
       ?>

        <!--==========右边的导航栏===========-->
        <!-- 功能页面 -->
        <div class="col-sm-9">
            <div class="el-tip-info">
                <h3>信用借款</h3>
                <p>
                    <span class="text-info">授信额度：</span><span class="text-danger">2000 </span> &emsp;&emsp;&emsp;
                    <span class="text-info">可借金额：</span><span class="text-danger">2000</span>
                </p>
            </div>

            <div class="page-header lead">
                借款信息
                <label class="label label-primary">信用标</label>
            </div>

            <form class="form-horizontal el-borrow-form" novalidate="novalidate" method="post" action="${pageContext.request.contextPath}/borrow_normal.do">
                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        借款方式
                    </label>
                    <div class="col-sm-3 input-group">
                        <select class="form-control" name="monthes2Return" id="monthestwoReturn">
                            <option value="t1">信用贷</option>
                            <option value="t2">车易贷</option>
                            <option value="t3">房易贷</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        借款金额
                    </label>
                    <div class="col-sm-3  input-group">
                        <input class="form-control" name="bidRequestAmount" />
                        <span class="input-group-addon">元</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        借款利息
                    </label>
                    <div class="col-sm-3  input-group">
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
                    <label class="radio-inline">
                        <input type="radio" value="0" checked="checked" name="inlineRadioOptions" />
                        按月分期
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="1" name="inlineRadioOptions" />
                        按月到期
                    </label>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        最小投标
                    </label>
                    <div class="col-sm-3  input-group">
                        <input class="form-control" name="minBidAmount" />
                        <span class="input-group-addon">元</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        投标奖金
                    </label>
                    <div class="col-sm-3  input-group">
                        <input class="form-control" name="totalRewardAmount" value="0" />
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
                        <input name="title" class="form-control" />
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
                    <button class="btn btn-primary col-lg-offset-3" type="submit" data-loading-text="提交">
                        提交申请
                    </button>
                </div>
            </form>
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
<!--//=====左边交互======// -->
<script src="dist/js/Leftnav.min.js"></script>
<script>
    var id=location.href.split('=')[1];
    id=id.split('%')[0];
    // console.log(id)
    $('#monthestwoReturn').val(id);

</script>
</body>
</html>