<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <!-- 引入bootstapcss样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <!-- 表单验证的css样式引入 -->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.css">
    <!-- 重置样式引入 -->
    <link rel="stylesheet" href="./dist/css/login.min.css">
</head>
<body>
    <!-- 页头 -->
    <?php
    require_once './header.php';
    ?>
    <!-- 导航 -->
    <?php
    require_once './headerThree.php';
    ?>
    <!-- 内容页面 -->
    <div class='container login_conTai'>
        <div class="panel panel-default">
            <div class="panel-heading">注册页面</div>
            <div class="panel-body">
                <form class="form-horizontal" id='defaultForm'>
                    <!-- 账号 -->
                    <h4 class='container text-center'>请填写注册信息，点击“提交注册”即可完成注册！</h4>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">账号</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name='username' placeholder="请输入账号">
                        </div>
                    </div>
                    <!-- 密码 -->
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">密码</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" name='password' placeholder="请输入密码">
                        </div>
                    </div>
                    <!-- 确认密码 -->
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">确认密码</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" name='confirmPassword' placeholder="请输入密码">
                        </div>
                    </div>
                    <!-- 电话 -->
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">电话</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name='phoneNumer' placeholder="请输入电话">
                        </div>
                    </div>
                    <!-- 邮箱 -->
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">邮箱</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name='inputEmill' placeholder="请输入邮箱">
                        </div>
                    </div>
                    <div class="col-sm-offset-5 col-sm-4">
                        <button type="submit" class="btn btn-default">登陆</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>

    <!-- 尾部 -->
    <?php
    include_once './fooTer.php'
    ?>
<!-- jquery样式引 入 -->
<script src="./lib/jQuery/jquery.min.js"></script>
<!-- bootstap。jss -->
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
<!-- 表单验证js文件引入 -->
<script src="./lib/bootstrapValidator/js/bootstrapValidator.js"></script>
<!-- 自定义的js样式 -->
<script src="./dist/js/index.min.js"></script>
<!-- 表单验证的js文件 -->
<script src="./src/js/verify_regster.js"></script>
</body>
</html>