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
    <link rel="stylesheet" href="./dist/css/index.min.css">
</head>
<body>
    <!-- 头部导航样式 -->
 <?php
 require_once('./header.php');
 require_once('./headerTwo.php');
 ?>;
    <!-- 轮播图 -->
    <div class='sheeav'>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="./images/banner01.jpg" alt="图片一">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./images/banner02.jpg" alt="图片二">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <!-- 左边按钮 -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <!-- 右边按钮 -->
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
   
    <!-- 三结构 -->
    <div class='container character'>
        <div class="row">
            <!-- 三结构第一个 -->
      <div class="col-sm-4 characterone">
        <div>
          <h3>投资理财</h3>
          <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
        </div>
      </div>
            <!-- 三结构第二个 -->
      <div class="col-sm-4 characterone">
      <div>
          <h3>投资理财</h3>
          <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
        </div>
      </div>
            <!-- 三结构第三个 -->
      <div class="col-sm-4 characterone">
      <div>
          <h3>投资理财</h3>
          <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
        </div>
      </div>
    </div>
    </div>
    <!-- 新闻列表 -->
    <div class='container TB'>
    <div class="page-header">
    <h1 class="text-left">进行中借款</h1>
    <h4 >
    <a href="#">标题</a>  
    </h4>
</div>
      <table class="table table-hover">
    <thead>
    <tr>
        <th>借款人</th>
        <th class='mediaTitle'>借款标题</th>
        <th>年利率</th>
        <th>金额</th>
        <th class='mediaTitle'>还款方式</th>
        <th>进度</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>张三</td>
    <td class='mediaTitle'>给我2000度过难关</td>
    <td>	10.00%</td>
    <td>2,000.00</td>
    <td class='mediaTitle'>按月分期还款 </td>
    <td>78.00%</td>
    <td><button type="button" class="btn-sm btn-danger">查看</button></td>
    </tr>
    <tr>
    <td>张三</td>
    <td class='mediaTitle'>给我2000度过难关</td>
    <td>	10.00%</td>
    <td>2,000.00</td>
    <td class='mediaTitle'>按月分期还款 </td>
    <td>78.00%</td>
    <td><button type="button" class="btn-sm btn-danger">查看</button></td>
    </tr>
    </tbody>
</table>
    </div>
    <!-- 新闻列表 -->
    <div class="container">
    <div class="row" >
        <div class="col-md-6">
        <div class="page-header CT clearfix">
    <h3 class="text-left pull-left">进行中借款</h3>
    <a class='pull-right' href="#">更多>></a>
</div>
      <table class="table table-hover">
    <thead>
    <tr>
        <th>进度</th>
        <th class='text-right'>操作</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>按月分期还款 </td>
    <td class='text-right'>78.00%</td>
    </tr>
    <tr>
    <td>按月分期还款 </td>
    <td class='text-right'>78.00%</td>
    </tr>
    <tr>
    <td>按月分期还款 </td>
    <td class='text-right'>78.00%</td>
    </tr>
    </tbody>
</table>
        </div>

        <div class="col-md-6">
        <div class="page-header CT clearfix">
    <h3 class="text-left pull-left">进行中借款</h3>
    <a class='pull-right' href="#">更多>></a>
</div>
      <table class="table table-hover">
    <thead>
    <tr>
        <th>进度</th>
        <th class='text-right'>操作</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>按月分期还款 </td>
    <td class='text-right'>78.00%</td>
    </tr>
    <tr>
    <td>按月分期还款 </td>
    <td class='text-right'>78.00%</td>
    </tr>
    <tr>
    <td>按月分期还款 </td>
    <td class='text-right'>78.00%</td>
    </tr>
    </tbody>
</table>
        </div>
    </div>
</div>

 <div class="container">
    <div class="row" >
        <div class="col-md-6">
         <div class="page-header CT clearfix">
    <h3 class="text-left pull-left">进行中借款</h3>
    <a class='pull-right' href="#">更多>></a>
</div>
      <table class="table table-hover">
    <thead>
    <tr>
        <th>进度</th>
        <th class='text-right'>操作</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>按月分期还款 </td>
    <td class='text-right'>78.00%</td>
    </tr>
    <tr>
    <td>按月分期还款 </td>
    <td class='text-right'>78.00%</td>
    </tr>
    <tr>
    <td>按月分期还款 </td>
    <td class='text-right'>78.00%</td>
    </tr>
    </tbody>
</table>
        </div>
        <div class="col-md-6">
        <div class="page-header CT clearfix">
    <h3 class="text-left pull-left">进行中借款</h3>
    <a class='pull-right' href="#">更多>></a>
</div>
      <table class="table">
    <thead>
    <tr>
        <th>进度</th>
        <th class='text-right'>操作</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>按月分期还款 </td>
    <td class='text-right'>78.00%</td>
    </tr>
    <tr>
    <td>按月分期还款 </td>
    <td class='text-right'>78.00%</td>
    </tr>
    <tr>
    <td>按月分期还款 </td>
    <td class='text-right'>78.00%</td>
    </tr>
    </tbody>
</table>
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