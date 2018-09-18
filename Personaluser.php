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
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                借款明细
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <ul>
                                <li><a href="#">借款目的</a> </li>
                                <li><a href="#">还款事件</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                借款明细
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <ul>
                                <li><a href="#">借款目的</a> </li>
                                <li><a href="#">还款事件</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                               借款明细
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <ul>
                                <li><a href="#">借款目的</a> </li>
                                <li><a href="#">还款事件</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!--==========右边的导航栏===========-->
        <div class="col-md-9">

            <div class="panel panel-default">
                <div class="panel-heading">个人资料</div>
                <div class="panel-body">

                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">手机号码</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">联系电话</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">个人收入</label>
                            <div class="col-sm-10">
                                <select class="form-control">
                                    <option>1000以下</option>
                                    <option>1000元-1999元</option>
                                    <option>2000元-2999元</option>
                                    <option>3000元-4999元</option>
                                    <option>10000元以上</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">个人学历</label>
                            <div class="col-sm-10">
                                <select class="form-control">
                                    <option>初中</option>
                                    <option>中专/高中</option>
                                    <option>专科</option>
                                    <option>本科</option>
                                    <option>硕士研究生</option>
                                    <option>博士研究生</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">联系地址</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">提交</button>
                            </div>
                        </div>
                    </form>

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