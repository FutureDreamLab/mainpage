<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>精品课程</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/same.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>

.comment-icon li{
display:inline-block;
padding-right:30px;
text-align:center;
}
.player-comment{
margin-top:10px;
margin-bottom:10px;
}
	.player-introduce {
	margin-bottom: 40px;
	}
	.player-introduce .active{
	background-color:#cfde94;
	}
	.player-introduce .active1{
	background-color:#9bba1f;
	}
	.media-img{
	padding: 10px 10px;
	background-color: #eeeeee;
	width: 100%;
	margin-bottom: 5px;
	}
    .middle {
	text-align: center;
}
.story-introduce{
	margin-top:10px;
	margin-bottom:10px;
	}
	.media-comment{
	margin-top: 30px;
	margin-bottom: 30px;
		}
    .green {
	padding: 5px 5px;
	background-color: #778F19;
	color: #fff;
}
    .yellow {
	padding: 5px 5px;
	background-color: #FFA200;
	color: #fff;
}
.comment-display{
	padding:20px 0px;
	}
    .player-list {
	margin: 20px 0px;
}
.nextvideo{
background-color:#f1f1f1;
margin-top:10px;
padding:5px 0px;
text-align:center;
}
@media (max-width: 767px){
.phone-size1{
	width:20px;
}
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
<div class="player-header">
<ol class="breadcrumb">
  <li><a href="#">在线课程</a></li>
  <li class="active">达维恩的古代之行</li>
</ol>
<img style="margin-top:-20px;"src="images/xiahuaxian.png">
</div>
<div class="row">
<div class="player">
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="player-introduce pull-left hidden-xs">
<h4>动画讲解</h4>
<div class="media-img pull-left" value="animation">
<div class="pull-left">
<img style="margin-right:10px;" src="images/media/animation.png"  alt="Responsive image">
</div>
<div class="pull-left middle" style="margin-top:30px;">
<h5>达维恩的古代之行</h5>
<p>00:15:20</p>
</div>
</div>
<h4 class="pull-left">真人视频</h4>
<div class="media-img pull-left" value="person">
<div class="pull-left">
<img style="margin-right:10px;" src="images/media/person.png"  alt="Responsive image">
</div>
<div class="pull-left middle" style="margin-top:30px;">
<h5>投石车的制作</h5>
<p>00:09:03</p>
</div>
</div>
<a href="#" class="pull-left" style="font-size:18px;margin-top:10px">更多视频>></a>
</div>
<div class="story-introduce pull-left">
<h4>故事简介</h4>
<p style="line-height:1.6"> 小主人公“达维恩”和他的萌宠“卤蛋”穿越时空来到了中国古代的战场，并成功从一名从天而降的“奸细”变成军队英雄的故事。
达维恩是怎么做到的呢？那是因为他发挥自己的聪明才智和想象力，将雷蒙老师课上所教的知识应用到现实中，成功改进了“投不高也投不远”的投石车，帮助军队打了胜仗。小朋友们我们是不是也试试呢</p>
<p>标签：<span class="green">物理</span> <span class="yellow">创新</span></p>
</div>
</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
<div class="embed-responsive embed-responsive-16by9 player-play">
  <video id="myvideo" class="embed-responsive-item" poster="images/media/animation.png" controls>
  <source src="media/animation.mp4" type="video/mp4" />
  <source src="media/animation.ogg" type="video/ogg" />
  <source src="media/animation.webm" type="video/webm" />
</video>
</div>
<div class="player-comment">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
<ul class="comment-icon">
<li><img class="phone-size1" src="images/good.png"><br>点赞</li>
<li><img class="phone-size1" src="images/save.png"><br>收藏</li>
<li><img class="phone-size1" src="images/download.png"><br>下载</li>
<li><img class="phone-size1" src="images/share.png"><br>分享</li>
</ul>
</div>
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
<a class="btn btn-success btn-lg pull-right" href="order.php" role="button">订阅</a>
</div>
</div>
</div>
<div class="visible-xs-block nextvideo" value="person">
<p>下一段视频：<span>真人演示</span></p>
</div>
<div class="media-comment">
<p>小伙伴们等待着你们的评论呢</p>
<form>
<div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">message</label>
    <textarea class="form-control" rows="8" placeholder="说点什么吧...."></textarea>
 </div>
 <div class="form-group " style="text-align:right">
<button type="submit" class="btn btn-warning ">提交</button>
</div>
</form>
</div>
<div class="comment-display">
<p>最新评论</p>
<div style="height:2px;background-color:#ffbd4a"></div>
<div class="comment-content">
<p>还没有评论</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">其他视频</h3>
  </div>
  <div class="panel-body">
  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
    <div class="list-group">
  <a href="#" class="list-group-item active">
    全部
  </a>
  <a href="#" class="list-group-item">理工类</a>
  <a href="#" class="list-group-item">社科类</a>
  <a href="#" class="list-group-item">艺术类</a>
  <a href="#" class="list-group-item">体育类</a>
</div>
  </div>
  <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
  <div class="row">
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 player-list">
  <a href="#"><img src="images/picture2.png" class="img-responsive" alt="Responsive image"></a>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 player-list">
  <a href="#"><img src="images/picture2.png" class="img-responsive" alt="Responsive image"></a>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 player-list">
  <a href="#"><img src="images/picture2.png" class="img-responsive" alt="Responsive image"></a>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 player-list">
  <a href="#"><img src="images/picture2.png" class="img-responsive" alt="Responsive image"></a>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 player-list">
  <a href="#"><img src="images/picture2.png" class="img-responsive" alt="Responsive image"></a>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 player-list">
  <a href="#"><img src="images/picture2.png" class="img-responsive" alt="Responsive image"></a>
  </div>
  </div>
 </div>
</div>
</div>
</div>
</div>

<!--插入页眉 -->
<?php
require_once './footer.php';
?>

  </body>
  <script type="text/javascript">
  $(".media-img").on("click",function(){
  $("div.media-img").removeClass("active1");
  $(this).addClass("active1");
  var aa=$(this).attr("value");
  $("video").attr("src","media/"+aa+".mp4");
  $("video").attr("poster","images/media/"+aa+".png");
  });
  $(".media-img").hover(
  function () {
    $(this).addClass("active");
  },
  function () {
    $(this).removeClass("active");
  });
 $(".nextvideo").on("click",function(){
  var cc=$(this).attr("value");
  $("video").attr("src","media/"+cc+".mp4");
  $("video").attr("poster","images/media/"+cc+".png");
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