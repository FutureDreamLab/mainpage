<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>我的订单</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
<link href="css/same.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	.time-header{
	padding: 5px 10px;
	background-color: #778F19;
	font-weight: bold;
	color: #fff;
	}
	.thumbnail{
	text-align:center;
	font-weight:bold;
	height:160px;
	}
	.jiesuan{
	padding:30px 20px;
	background-color: #eeeeee;
	text-align:right;
	margin-bottom:30px;
	}
	.count{
	font-size:24px;
	font-weight:bold;
	color:#778F19;
	}
	.order-progress{
	padding: 20px 0px;
	margin-top: 10px;
	margin-bottom: 10px;
		}
	.pay-product{
			padding:10px 0px;
			margin-bottom:10px;
			}
	.active{
		border-width:2px;
		border-color:#aaa;
		}
    </style>
<script src="js/jquery-1.11.3.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="js/bootstrap.min.js"></script>
  </head>
  <body>
<?php
require_once './header.php';
?>
   
<div class="container">
<div class="order-header">
<ol class="breadcrumb">
  <li><a href="index.php">首页</a></li>
  <li><a href="index.php">我的订单</a></li>
  <li class="active">选择课程</li>
</ol>
</div>
<div class="order-progress">
<img src="images/step11.png" class="img-responsive center-block" alt="Responsive image">
</div>
<div class="row">
<div class="course-time">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h4>亲,请选择套餐</h4>
</div>
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
 <div class="thumbnail" value="199">
     <div class="time-header">
	 <h5>1个月</h5>
	 </div>
      <div class="caption">
        <p>199元</p>
      </div>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
 <div class="thumbnail" value="599" >
     <div class="time-header">
	 <h5>3个月</h5>
	 </div>
      <div class="caption">
        <p>599元</p>
      </div>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
 <div class="thumbnail" value="1099">
     <div class="time-header">
	 <h5>12个月</h5>
	 </div>
      <div class="caption">
        <p>1099元</p>
      </div>
    </div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div class="pay-product">
<h4>你将获得的资源</h4>
<div class="row" >
<div class="col-xs-6 col-sm-6 col-md-5 col-lg-5" style="text-align:center;margin-top:10px;">
<img src="images/11.png">
<p>动画</p>
</div>
<div class="col-xs-6 col-sm-6 col-md-5 col-lg-5" style="text-align:center; margin-top:10px;">
<img src="images/12.png">
<p>视频</p>
</div>
<div class="col-xs-6 col-sm-6 col-md-5 col-lg-5" style="text-align:center;margin-top:10px;">
<img src="images/13.png">
<p>漫画</p>
</div>
<div class="col-xs-6 col-sm-6 col-md-5 col-lg-5" style="text-align:center;margin-top:10px;">
<img src="images/14.png">
<p>材料</p>
</div>
</div>
</div>
</div>
</div>
<div class="jiesuan">
<div class="row">
<div class="col-lg-9">
<p>课程报名费（包括教材和材料）合计：<span class="count">0</span>元</p>
</div>
<div class=" col-lg-3">
<a class="btn btn-success btn-lg" href="address.php" role="button">下一步</a>
</div>
</div>
</div>
</div>

<?php
require_once './footer.php';
?>
   
  </body>
  <script type="text/javascript">
  $(".thumbnail").bind("click", function(event){
  $("div.thumbnail").removeClass("active");
  $(this).addClass("active");
var num=$(this).attr("value");
$(".count").text(num);
});
  
  </script>
   <script type="text/javascript">
			$(".to-signup").on("click",function(){
				$(".box-size").css("margin-left","0px")
			});
			$(".to-login").on("click",function(){
				$(".box-size").css("margin-left","-300px")
			});
			$("#login").on("click",function(){
				$(".box-size").css("margin-left","-300px")
			});
			$("#reg").on("click",function(){
				$(".box-size").css("margin-left","0px")
			});
</script>
</html>