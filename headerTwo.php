<script src="./lib/jQuery/jquery.min.js"></script>
<!-- 头部辅导航 -->
   <nav class="navbar navbar-default">
     <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img src="./images/logo.png" alt="" srcset="">
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
    <ul class="nav navbar-nav" id="me">
        <li class="active"><a href="./index.php?menuId=1">首页 <span class="sr-only">(current)</span></a></li>
        <li><a href="./invest.php?menu=2">我要投资</a></li>
        <li><a href="#">我要借款</a></li>
        <li><a href="./PersonalCenter.php?menuId=4">个人中心</a></li>
        <li><a href="#">新手指引</a></li>
        <li><a href="#">关于我们</a></li>
      </ul>
    <!-- </div>/.navbar-collapse -->
  </div><!-- /.container-fluid -->
   </nav>
   <script>
     // let id=location.href;
     // // console.log(id)
     //  id= id.split("=")[1]-1;
     //   // console.log(id);
       $("#me li").eq(location.href.split('=')[1]-1).addClass("active").siblings("li").removeClass("active");
   </script>