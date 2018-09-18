<!-- 头部主导航 -->
<script src="lib/jQuery/jquery.min.js"></script>
<nav class="navbar navbar-inverse">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only ">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> <span class='glyphicon glyphicon-phone-alt'></span> 028-86261949</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li id="phomelogin"><a href="#">首页</a></li>


                <li><a href="#">帮助</a></li>
                <!-- <img src='./images/contract.png' alt='' srcset=''> -->
                <li><a href="#" data-toggle="tooltip" data-placement="bottom" data-html='html'
                       title="<img src='./images/contract.png' alt='' srcset=''>">联系客服</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<script>
    $.get('./Api/Chickuser.php', function (data) {
        // console.log(data);
        if (data.isSuccess) {
            var strlogin = ` <li><a href="./login.php">${data.username}</a></li>
          <li><a href="#">赶快充值</a></li>
          <li><a href="./Api/loginWhite.php">注销</a></li>`;
            $("#phomelogin").after(strlogin);
        } else {
            var strlogin = `<li><a href="./login.php">登陆</a></li>
                              <li><a href="./register.php">注册</a></li>`;
            $("#phomelogin").after(strlogin);
        }
    }, 'json');
</script>