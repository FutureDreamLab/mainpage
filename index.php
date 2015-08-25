<?php
require_once './include.php';

?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>怪兽大学</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	.navbar{
	padding-top: 10px;
	padding-bottom: 10px;
	}
	.navbar-header{
	padding-bottom: 10px;
	}
	.navbar-nav{
	margin-top: 20px;
	font-size: 18px;
	font-weight: bold;
	}
	.login{
	text-align:center;
	margin-left:10px;
	color:#fff;
	}
	.reg{
	text-align:center;
	margin-left:10px;
	color:#fff;
	}
	.bold{
	font-weight: bold;
	}
	.jieshao{
	background-color:#9bba1f;
	color:#fff;
	padding-top:30px;
	}
	.jieshao1{
	padding-top:20px;
	padding-right:30px;
	padding-bottom:60px;
	}
	.jscontent{
	margin-top:30px;
	margin-bottom:30px;
	max-width:500px;
	font-size:18px;
	}
	.renwu{
	padding-left: 30px;
	margin-top: 30px;
	margin-bottom: 30px;
	}
	.item img{
	 display: block;
  margin-left: auto;
  margin-right: auto;
	}
	.kechengjs{
	background-color: #15c1e5;
	color: #fff;
	padding-top: 30px;
	}
	.kechengcontent{
	width: 160px;
	padding: 20px 20px;
	background-color: #fff;
	color: #15c1e5;
	font-size: 18px;
	font-weight: bold;
	margin-top: 30px;
	}
	.yunyingmodel{
	background-color:  #fadca9;
	padding-bottom: 30px;
	}
	.yunying_content{
	text-align: center;
	padding-top: 10px;
	padding-bottom: 30px;
	color: #333333;
	}
	.yunduo{
	margin-left: -40px;
	margin-bottom: -70px;
	}
   .description{
	padding-top: 30px;
	padding-right: 60px;
	padding-left: 60px;
	padding-bottom: 30px;
   }
   .ds-header{
   margin-top:30px;
   margin-bottom:30px;
   }
   .mokuai{
	background-color: #f1f1f1;
	max-width: 350px;
	padding: 10px 10px;
	display: block;
	margin-top: 10px;
	;
	margin-right: auto;
	margin-left: auto;
	margin-bottom: auto;
   }
   .contact{
	padding-top: 30px;
	padding-bottom: 30px;
	;
	;
	background-color: #f73f3f;
	color: #fff;
   }
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
	.map{
	text-align: center;
	margin-top: -30px;
	}
	.liuyanimg{
	}
	.liuyanms{
	text-align:right;
	padding-top:60px;
	}
	.footer{
	padding-top:30px;
	padding-bottom:30px;
	}
	.liuyanms{
	/* [disabled]padding-right: 30px; */
	}
	.information{
	text-align:center;
	margin-top:30px;
	}
	.zhuce{
	color: #fff;
	font-size: 18px;
	text-align: left;
	}
	.zhuce:active,.zhuce:hover {
	color: #333333;
	}
	.zhuce:focus,.zhuce:hover {
	color: #333333;
	}
	.yunying-header {
	margin-bottom: 60px;
	}
	.daweien-img{
	position: relative;
	top: 10px;
	left: 150px;
	}
	.stem{
	margin-top: 60px;
	margin-bottom: 20px;
	}
	.other{
	margin-top:10px;
	padding-top:30px;
	padding-bottom:30px;
	margin-bottom:10px;
	}
	.jingpin{
	padding-top:30px;
	padding-bottom:30px;
	}
    .shayu-img {
	position: relative;
	left: 50%;
	animation: myfirst 5s;
-moz-animation: myfirst 5s;	/* Firefox */
-webkit-animation: myfirst 5s;	/* Safari 和 Chrome */
-o-animation: myfirst 5s;	/* Opera */

}
.jieshao2{
margin-bottom:30px;
}
.jingpin-content{
margin-top:10px;
}
    .xiayi {
	margin-bottom: -2px;
}
.ditusize{
border: #333333;
 border-style: solid;
  border-width: 4px;

}
.lianjie{
	padding: 20px;
	}
	.logopipi{
	margin-left: 100px;
	margin-top: -120px;
	}
	.contact-content{
	padding-top: 20px;
	padding-bottom: 20px;
	margin-top: 20px;
	font-size: 16px;
	margin-bottom: 60px;
		}
    .tele-contact {
	margin-top: 40px;
	margin-bottom: 20px;
}
    .rexian {
	margin-top: 30px;
}
    .address-other {
	margin-top: 20px;
	margin-bottom: 20px;
}
    .morevideo {
	text-align: right;
	;
	margin-top: -30px;
	;
	margin-right: 10px;
	font-size: 16px;
	font-weight: bold;
}
    .yanse {
}
    .sizeclose {
	font-size: 30px;
}
    .noreg {
	text-align: right;
}
    .forgetpassword {
	position: relative;
	left: 0px;
	bottom: 0px;
	top: 20px;
	;
}
.form-signin-heading{
margin-top:0px;
margin-bottom:20px;
}
.form-signin{
padding-bottom:10px;

}
.building-position{
margin-bottom:-30px;
}
.kecheng-img{
padding:20px;
}
.kecheng-img a:hover img{
border:1px solid #fff;
}
#preloader  {
   position: fixed;
   top: 0;
   left: 0;
   right: 0;
   bottom: 0;
   background: #66ceff;
   z-index: 99999;
   height: 100%;
}
#status  {
   position: absolute;
   left: 50%;
   top: 50%;
   width: 250px;
   height: 250px;
   margin: -125px 0 0 -125px;
   padding: 0;
}
@keyframes myfirst
{
0%   { left:90%; }
100% { left:50%}
}

@-moz-keyframes myfirst /* Firefox */
{
0%   { left:90%; }
100% { left:50%}
}

@-webkit-keyframes myfirst /* Safari and Chrome */
{
0%   { left:90%; }
100% { left:50%}
}

@-o-keyframes myfirst /* Opera */
{
0%   { left:90%; }
100% { left:50%}
}
    </style>
<script src="js/jquery-1.11.3.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script src="js/jiazai.js"></script>
  </head>
  <body>
  <div id="preloader">
      <div id="status">
         <img src="images/1.gif" height="250"  alt="">
      </div>
   </div>
    <nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand1" href="#"> <img class="visible-lg-block " alt="Responsive image" src="images/logo1.png"></a>
       <a class="navbar-brand" href="#"> <img class=" hidden-lg " alt="Responsive image" src="images/logo4.png"></a>
    </div>

	  <div class="modal fade" id="myModal1">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="sizeclose" aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      <form class="form-signin" action="doLogin.php" method="post">
        <h2 class="form-signin-heading">注册</h2>
        <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="邮箱或者用户名">
        </div>
        <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="密码" >
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">注册</button>
      </form>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

	   <div class="modal fade" id="myModal2">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="sizeclose" aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form class="form-login-text">
        <h2 class="form-signin-heading">登陆</h2>
        <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="邮箱或者用户名" >
        </div>
        <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="密码" >
        </div>
		 <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> 记住我
          </label>
        </div>
        <a href="user.html" role="button" class="btn btn-lg btn-primary btn-block" type="submit">登陆</a>
         </form>
        <a class="forgetpassword" href="/oauth/weibo/instant_login/?_ref=frame">忘记密码>></a>
        <div class="noreg">
        <p><span class="hidden-xs">还没有账号?</span> <a>点击注册>></a></p>
        </div>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	  <!-- /.modal -->
      <ul class="nav navbar-nav navbar-left">
        <li class="active"><a href="#">首页<span class="sr-only">(current)</span></a></li>
		<li><a href="course.html">在线课程</a></li>
		<li><a href="http://futuredreamlab.com/wlmgf">怪兽社区</a></li>
		<li><a href="#">关于我们</a></li>
      </ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a type="button" class="btn btn-default zhuce" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <span class="reg-text">注册</span>
</a></li>
		<li><a type="button" class="btn btn-default zhuce" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <span class="login-text">登陆</span></a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="picture">
<div class="container-fluid">
<div id="carousel1" class="carousel slide hidden-xs" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel1" data-slide-to="1"></li>
    <li data-target="#carousel1" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/jieshao1.jpg" alt="...">

    </div>
    <div class="item">
      <img src="images/jieshao1.jpg" alt="...">

    </div>
    <div class="item">
      <img src="images/jieshao1.jpg" alt="...">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div id="carousel2" class="carousel slide visible-xs-block " data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel2" data-slide-to="1"></li>
    <li data-target="#carousel2" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/jieshao1-1.jpg" alt="...">

    </div>
    <div class="item">
      <img src="images/jieshao1-1.jpg" alt="...">

    </div>
    <div class="item">
      <img src="images/jieshao1-1.jpg" alt="...">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel2" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel2" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
<div class="jieshao">
<div class="container">
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
  <div class="jieshao1">
  <img class="img-responsive" alt="Responsive image" src="images/cloud.png">
  <h2>欢迎来到怪兽大学</h2>
  <p class="jscontent">怪兽乐园儿童大学是动漫化的O2O互联网创新教育产品，是包括理工学院、怪兽体育学院、怪兽艺术学院和怪兽人文学院的全方位教学体系。它完全摒弃了传统的理工、体育、艺术和人文教育理念，运用先进的教育技术，打造全球顶尖的全方位创造力教育模式。“通识-实践-创新”是怪兽儿童大学独创的教育理念，孩子需要在广泛认识世界的基础上，大胆动手实践，运用组合创新和破坏性创新等方法，开阔思维，达到真正地提高视野和能力，让我们一起体验吧！
</p>
<button type="button" class="btn btn-primary btn-lg">了解更多</button>
  </div>
   <img class="img-responsive visible-md-block visible-lg-block pull-right" alt="Responsive image" src="images/bird.png">
  </div>
   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
   <div class="renwu">
   <img class="img-responsive" alt="Responsive image" src="images/renwu.png">
   </div>
   </div>
  </div>
  </div>
</div>
<div class="kechengjs">
<div class="container">

<div class="row">
 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
  <img style="margin-top:-20px;height:80px;" alt="Responsive image" src="images/chuan.png">
  <h3 class="bold">课程简介</h3>
 <div class="jieshao2">
<div class="row">
<div class="col-xs-6 col-sm-6  col-md-offset-4 col-md-6 col-lg-6 col--offset-4">
  <img style="width:150px;" alt="Responsive image" src="images/达维恩.png">
  </div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <p class="kechengcontent">
  怪兽大学特有的STEM+ASH教育模式
</p>
  </div>
  </div>
 </div>
 </div>
  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
  <div class="stem">
  <img class="img-responsive " alt="Responsive image" src="images/stem-ash.png">
  </div>
  <img class="img-responsive visible-md-block visible-lg-block  shayu-img" alt="Responsive image" src="images/shayu.png">
  </div>

</div>
</div>
</div>
<div class="yunyingmodel">
<div class="container">
<div class=" yunying-header">
	<img class="yunduo" alt="Responsive image" src="images/yunduo.png">
  <h3 class="bold">运营模式</h3>

  </div>

  <div class="yunying_content">

<div class="row">


  <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
  <div class="donghua">
  <a href="#"><img style="width:50px;" src="images/animation.png">
	<h4 class="bold sparkley">动画</h4></a>
	</div>
	</div>
	 <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
	<div class="shipin">
	<a href="#"><img style="width:50px;" src="images/media.png">
	<h4 class="bold">视频</h4></a>
	</div>
  </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
  <div class="webapp">
  <a href="#"><img style="width:50px;" src="images/web.png">
	<h4 class="bold">网站APP</h4></a>
  </div>
  </div>
    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
  <div class="manhua ">
  <a href="#"><img style="width:50px;" src="images/book.png">
	<h4 class="bold">漫画</h4></a>
	</div>
	</div>
	 <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
	<div class="cailiao">
	<a href="#"><img style="width:50px;" src="images/cailiao.png">
	<h4 class="bold">材料</h4></a>
	</div>
  </div>

</div>
</div>
   <img class="img-responsive building-position " alt="Responsive image" src="images/building2.png">
</div>
</div>
<div class="jingpin">
<div class="container">
<h3 class="bold">精品课程</h3>
<div class="row">
<div class="jingpin-content">
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div class="kecheng-img">
  <a href="course.html"><img class="img-responsive" alt="Responsive image" src="images/picture1.png"></a>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
  <div class="description">
  <h3 class="ds-header">《达维恩的古代之行》</h3>
  <p style="max-width:400px;margin-bottom:30px;">小主人公“达维恩”和他的萌宠“卤蛋”穿越时空来到了中国古代的战场，并成功从一名从天而降的“奸细”变成军队英雄的故事。
达维恩是怎么做到的呢？那是因为他发挥自己的聪明才智和想象力，将雷蒙老师课上所教的知识应用到现实中，成功改进了“投不高也投不远”的投石车，帮助军队打了胜仗。小朋友们我们是不是也试试呢
</p>
<a class="btn btn-success btn-lg" href="order.html" role="button">赶快订阅哦</a>
  </div>
</div>
</div>
</div>
<div class="other">
<h3 class="bold">其他课程</h3>
<p class="morevideo"><a href="course.html" class="yanse" >更多>></a></p>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
<div class="mokuai">
 <img class="img-responsive" alt="Responsive image" src="images/picture2.png">
 <div class="mokuai-content">
 <h5>随便说点<h5>
 <p>....</p>
 <p><a href="order.html" class="btn btn-success" role="button">订阅</a></p>
 </div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
<div class="mokuai">
  <img class="img-responsive" alt="Responsive image" src="images/picture2.png">
 <div class="mokuai-content">
 <h5>随便说点<h5>
 <p>....</p>
 <p><a href="order.html" class="btn btn-success" role="button">订阅</a></p>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
<div class="mokuai">
  <img class="img-responsive center-block" alt="Responsive image" src="images/picture2.png">
 <div class="mokuai-content">
 <h5>随便说点<h5>
 <p>....</p>
 <p><a href="order.html" class="btn btn-success" role="button">订阅</a></p>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="contact">
<div class="container">
<div class="contact-header">
<h3>联系我们</h3>
<img class="logopipi" src="images/pipi.png">
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div class="contact-content">
<p class="address-other"><span class="bold">南京</span><br><br>南京星梦教育科技有限将公司
南京市鼓楼区南京大学21栋创业园203</p>
<p class="address-other"><span class="bold">苏州</span><br><br>苏州梦工坊信息科技公司
苏州市干将东路178号苏州大学记住创业广场1号</p>
<p class="tele-contact"><span class=" icon-envelope-alt" aria-hidden="true"></span> whale.li@futuredreamlab.com<br><span class=" icon-phone" aria-hidden="true"></span> 13770680000</p>
<p class="rexian"><a href="#" class="btn btn-info btn-lg" role="button"><span class=" icon-phone" aria-hidden="true"></span> 热线电话： 400-9669-881</a></p>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div class="map hidden-xs">
	 <img class="img-responsive center-block xiayi" alt="Responsive image" src="images/rope.png">
  <div class="center-block ditusize" style=" width: 500px;
 height: 350px;" id="dituContent"></div>
</div>
<div class="map visible-xs-block">
	 <img class="img-responsive center-block xiayi" alt="Responsive image" src="images/rope1.png">
  <div class="center-block " style="width:300px;height:180px;border:solid 2px #333333;" id="dituother"></div>
</div>
</div>
</div>
</div>
</div>
<div class="footer">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
<div class="liuyanimg">
 <img class="img-responsive center-block " alt="Responsive image" src="images/liuyan.png">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
<div class="liuyanms">
<form>
<div class="form-group">
<button type="submit" class="btn btn-warning">提交</button>
</div>
<div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">message</label>
    <textarea class="form-control" rows="8" placeholder="说点什么吧...."></textarea>
 </div>
</form>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
<div class="information">
<img class=" center-block" alt="Responsive image" src="images/dreamlogo.png">
<img class=" center-block" alt="Responsive image" src="images/erweima.png">
<div class="lianjie">
<h4>友情链接</h4>
<p>拉比盒子     科学同盟网      城市科学节  科学达人秀    中国科技馆       辣妈帮      妈淘网           好未来   环球雅思   ATA</p>
</div>
</div>
</div>
</div>
</div>
</div>
  </body>
  <script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }

    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(118.78713,32.059873);//定义一个中心点坐标
        map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
		   var mapother = new BMap.Map("dituother");//在百度地图容器中创建一个地图
        var pointother = new BMap.Point(118.78713,32.059873);//定义一个中心点坐标
        mapother.centerAndZoom(pointother,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.mapother = mapother;//将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
		mapother.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        mapother.enableScrollWheelZoom();//启用地图滚轮放大缩小
        mapother.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        mapother.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }

    //标注点数组
    var markerArr = [{title:"我的标记",content:"我的备注",point:"118.786295|32.059261",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });

			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }

    initMap();//创建和初始化地图
</script>
<script>
$(function() {

  // default is varying levels of transparent white sparkles
  $(".sparkley:first").sparkleh();

  // rainbow as a color generates random rainbow colros
  // count determines number of sparkles
  // overlap allows sparkles to migrate... watch out for other dom elements though.
  $(".sparkley:last").sparkleh({
    color: "rainbow",
    count: 100,
    overlap: 10
  });

  // here we create fuscia sparkles
  $("h4").sparkleh({
    count: 20,
    color: "#ff0080"
  });

  $("p").sparkleh({
    count: 20,
    color: "#00ff00"
  });

  // an array can be passed, too for colours
  // for an image, the image needs to be fully loaded to set
  // the canvas to it's height/width.
  $("#image").imagesLoaded( function() {
    $(".img").sparkleh({
      count: 25,
      color: ["#00afec","#fb6f4a","#fdfec5"]
    });
  });

});

$.fn.sparkleh = function( options ) {

  return this.each( function(k,v) {

    var $this = $(v).css("position","relative");

    var settings = $.extend({
      width: $this.outerWidth(),
      height: $this.outerHeight(),
      color: "#FFFFFF",
      count: 30,
      overlap: 0
    }, options );

    var sparkle = new Sparkle( $this, settings );

    $this.on({
      "mouseover focus" : function(e) {
        sparkle.over();
      },
      "mouseout blur" : function(e) {
        sparkle.out();
      }
    });

  });

}

function Sparkle( $parent, options ) {
  this.options = options;
  this.init( $parent );
}

Sparkle.prototype = {

  "init" : function( $parent ) {

    var _this = this;

    this.$canvas =
      $("<canvas>")
        .addClass("sparkle-canvas")
        .css({
          position: "absolute",
          top: "-"+_this.options.overlap+"px",
          left: "-"+_this.options.overlap+"px",
          "pointer-events": "none"
        })
        .appendTo($parent);

    this.canvas = this.$canvas[0];
    this.context = this.canvas.getContext("2d");
    this.sprite = new Image();

    this.canvas.width = this.options.width + ( this.options.overlap * 2);
    this.canvas.height = this.options.height + ( this.options.overlap * 2);

    this.sprites = [0,6,13,20];
    this.particles = this.createSparkles( this.canvas.width , this.canvas.height );

    this.anim = null;
    this.fade = false;

  },

  "createSparkles" : function( w , h ) {

    var holder = [];

    for( var i = 0; i < this.options.count; i++ ) {

      var color = this.options.color;

      if( this.options.color == "rainbow" ) {
        color = '#'+Math.floor(Math.random()*16777215).toString(16);
      } else if( $.type(this.options.color) === "array" ) {
        color = this.options.color[ Math.floor(Math.random()*this.options.color.length) ];
      }

      holder[i] = {
        position: {
          x: Math.floor(Math.random()*w),
          y: Math.floor(Math.random()*h)
        },
        style: this.sprites[ Math.floor(Math.random()*4) ],
        delta: {
          x: Math.floor(Math.random() * 1000) - 500,
          y: Math.floor(Math.random() * 1000) - 500
        },
        size: parseFloat((Math.random()*2).toFixed(2)),
        color: color
      };

    }

    return holder;

  },

  "draw" : function( time, fade ) {

    var ctx = this.context;
    var img = this.sprite;
        img.src = this.datauri;

    ctx.clearRect( 0, 0, this.canvas.width, this.canvas.height );

    for( var i = 0; i < this.options.count; i++ ) {

      var derpicle = this.particles[i];
      var modulus = Math.floor(Math.random()*7);

      if( Math.floor(time) % modulus === 0 ) {
        derpicle.style = this.sprites[ Math.floor(Math.random()*4) ];
      }

      ctx.save();
      ctx.globalAlpha = derpicle.opacity;
      ctx.drawImage(img, derpicle.style, 0, 7, 7, derpicle.position.x, derpicle.position.y, 7, 7);

      if( this.options.color ) {

        ctx.globalCompositeOperation = "source-atop";
        ctx.globalAlpha = 0.5;
        ctx.fillStyle = derpicle.color;
        ctx.fillRect(derpicle.position.x, derpicle.position.y, 7, 7);

      }

      ctx.restore();

    }

  },

  "update" : function() {

     var _this = this;

     this.anim = window.requestAnimationFrame( function(time) {

       for( var i = 0; i < _this.options.count; i++ ) {

         var u = _this.particles[i];

         var randX = ( Math.random() > Math.random()*2 );
         var randY = ( Math.random() > Math.random()*3 );

         if( randX ) {
           u.position.x += (u.delta.x / 1500);
         }

         if( !randY ) {
           u.position.y -= (u.delta.y / 800);
         }

         if( u.position.x > _this.canvas.width ) {
           u.position.x = -7;
         } else if ( u.position.x < -7 ) {
           u.position.x = _this.canvas.width;
         }

         if( u.position.y > _this.canvas.height ) {
           u.position.y = -7;
           u.position.x = Math.floor(Math.random()*_this.canvas.width);
         } else if ( u.position.y < -7 ) {
           u.position.y = _this.canvas.height;
           u.position.x = Math.floor(Math.random()*_this.canvas.width);
         }

         if( _this.fade ) {
           u.opacity -= 0.02;
         } else {
           u.opacity -= 0.005;
         }

         if( u.opacity <= 0 ) {
           u.opacity = ( _this.fade ) ? 0 : 1;
         }

       }

       _this.draw( time );

       if( _this.fade ) {
         _this.fadeCount -= 1;
         if( _this.fadeCount < 0 ) {
           window.cancelAnimationFrame( _this.anim );
         } else {
           _this.update();
         }
       } else {
         _this.update();
       }

     });

  },

  "cancel" : function() {

    this.fadeCount = 100;

  },

  "over" : function() {

    window.cancelAnimationFrame( this.anim );

    for( var i = 0; i < this.options.count; i++ ) {
      this.particles[i].opacity = Math.random();
    }

    this.fade = false;
    this.update();

  },

  "out" : function() {

    this.fade = true;
    this.cancel();

  },

  "datauri" : "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAHCAYAAAD5wDa1AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDozNDNFMzM5REEyMkUxMUUzOEE3NEI3Q0U1QUIzMTc4NiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDozNDNFMzM5RUEyMkUxMUUzOEE3NEI3Q0U1QUIzMTc4NiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjM0M0UzMzlCQTIyRTExRTM4QTc0QjdDRTVBQjMxNzg2IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjM0M0UzMzlDQTIyRTExRTM4QTc0QjdDRTVBQjMxNzg2Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+jzOsUQAAANhJREFUeNqsks0KhCAUhW/Sz6pFSc1AD9HL+OBFbdsVOKWLajH9EE7GFBEjOMxcUNHD8dxPBCEE/DKyLGMqraoqcd4j0ChpUmlBEGCFRBzH2dbj5JycJAn90CEpy1J2SK4apVSM4yiKonhePYwxMU2TaJrm8BpykpWmKQ3D8FbX9SOO4/tOhDEG0zRhGAZo2xaiKDLyPGeSyPM8sCxr868+WC/mvu9j13XBtm1ACME8z7AsC/R9r0fGOf+arOu6jUwS7l6tT/B+xo+aDFRo5BykHfav3/gSYAAtIdQ1IT0puAAAAABJRU5ErkJggg=="

};

// $('img.photo',this).imagesLoaded(myFunction)
// execute a callback when all images have loaded.
// needed because .load() doesn't work on cached images

// mit license. paul irish. 2010.
// webkit fix from Oren Solomianik. thx!

// callback function is passed the last image to load
//   as an argument, and the collection as `this`

$.fn.imagesLoaded = function(callback){
  var elems = this.filter('img'),
      len   = elems.length,
      blank = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";

  elems.bind('load.imgloaded',function(){
      if (--len <= 0 && this.src !== blank){
        elems.unbind('load.imgloaded');
        callback.call(elems,this);
      }
  }).each(function(){
     // cached images don't fire load sometimes, so we reset src.
     if (this.complete || this.complete === undefined){
        var src = this.src;
        // webkit hack from http://groups.google.com/group/jquery-dev/browse_thread/thread/eee6ab7b2da50e1f
        // data uri bypasses webkit log warning (thx doug jones)
        this.src = blank;
        this.src = src;
     }
  });

  return this;
};
</script>
</html>