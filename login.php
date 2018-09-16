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
        <!-- jquery样式引入 -->
        <script src="./lib/jQuery/jquery.min.js"></script>
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
            <div class="panel-heading">登陆页面</div>
            <div class="panel-body">
                <form class="form-horizontal" id='loginFrom'>
                    <h3 class='text-center'>请输入用户名 以及密码</h3>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-5 control-label">账号</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name='username_login' placeholder="请输入账号">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-5 control-label">密码</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" name='login_password' placeholder="请输入密码">
                        </div>
                    </div>
                    <div class="col-sm-offset-5 col-sm-7">
                        <button type="submit" class="btn btn-default">登陆</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--//====================模态框==========================//-->
    <div class="modal fade" id="msgShowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="msgShowTitle">标题</h4>
                </div>
                <div class="modal-body" id="msgShowContent">
                    内容
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 尾部 -->
    <?php
    include_once './fooTer.php'
    ?>

    <!-- bootstap。jss -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 表单验证js文件引入 -->
    <script src="./lib/bootstrapValidator/js/bootstrapValidator.js"></script>
    <!-- 表单验证的js文件 -->
    <script src="./src/js/verify_regster.js"></script>
    <!-- 自定义的js样式 -->
    <script src="./dist/js/index.min.js"></script>
    </body>
    </html>