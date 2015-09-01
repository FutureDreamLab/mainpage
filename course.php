<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>在线课程</title>

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
	@media screen and (min-width: 768px) {
   .vjianju{
margin-top: 60px;
margin-bottom:15px;
}
.description{
margin-top:10px;
}
.course-header{
margin-left:30px;
margin-right:30px;
}
.add-course{
margin-left:30px;
margin-right:30px;
}
.caozuo{
	padding-top:80px;
}
.label{
	background-color:#9BBA1F;
	font-size:14px
}
.small-tip{
margin-bottom:20px;
font-size:16px;
}
}
.course-header{
margin-top:20px;
margin-bottom:30px;
padding:5px 5px;
border: 2px solid #e3e3e3;
box-shadow: rgba(0, 0, 0, 0.0470588) 1px 1px 2px 0px, rgba(0, 0, 0, 0.0470588) -1px -1px 2px 0px;
}
.add-course{
border: 1px solid #e3e3e3;
margin-top:20px;
margin-bottom:20px;
padding:3px 3px;
box-shadow: rgba(0, 0, 0, 0.0470588) 1px 1px 2px 0px, rgba(0, 0, 0, 0.0470588) -1px -1px 2px 0px;
}
@media (max-width: 767px){
	.description{
margin-top:10px;
padding:10px 10px;
text-align:center;
}
.label{
	background-color:#9BBA1F;
	font-size:12px
}
.vjianju{
margin-top: 10px;
margin-bottom:10px;
}
.course-header{
margin-left:10px;
margin-right:10px;
}
.add-course{
margin-left:10px;
margin-right:10px;
}	
.small-tip{
margin-bottom:10px;
font-size:16px;
}	
}

.ds-header{
}

    .duiqi {
  margin-top:10px;
}
.caozuo{
	margin-top:10px;
	text-align:center;
}

.other-caozuo{
	padding-top:10px;
	text-align:center;
	
}
.other-ds{
  margin-left:15px;
}
.description{
padding-top:10px;
padding-bottom:10px;
padding-left:50px;
}
@media screen and (min-width: 1200px) {
  .description{
margin-top:30px;
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
   

<div class="container"><!--正文内容 -->
<h3>精品课程</h3>
<div class="course-header">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div class="kecheng-img">
  <a href="player.php"><img class="img-responsive" alt="Responsive image" style="margin-top:0px;" src="images/picture1.png"></a>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
  <div class="description">
  <h3 class="ds-header vjianju">达维恩的古代之行</h3>
  <p class="small-tip">杠杆原理 <span class="label label-success">自然科学</span></p>
<a style="margin-top:10px;" class="btn btn-primary btn-lg" href="player.php" role="button">在线听课</a>
  </div>
</div>
</div>
</div>
<h3>最新课程 <small>每周三更新</small></h3>
<div class="add-course">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-4">
<div class="kecheng-img">
  <a href="player.php"><img class="img-responsive" alt="Responsive image" style="margin-top:0px;" src="images/picture2.png"></a>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-5">
  <div class="description hidden-xs">
  <h3 class="ds-header">木梁承重</h3>
  <p class="small-tip">力学 <span class="label label-success">物理科学</span></p>
  <p>小主人公“达维恩”和他的萌宠“卤蛋”穿越时空来到了中国古代的战场，并成功从一名从天而降的“奸细”变成军队英雄的故事。</p>
  </div>
   <div class="other-ds visible-xs-block">
  <h4>木梁承重</h4>
  <p>力学 <span class="label label-success">物理科学</span></p>
  </div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-3">
  <div class="caozuo hidden-xs">
<a class="btn btn-primary btn-lg" href="player.php" role="button">在线听课</a>
<p class="duiqi">已开课</p>
</div>
  <div class="other-caozuo visible-xs-block ">
<a class="btn btn-primary " href="player.php" role="button">在线听课</a>
<p>已开课</p>
</div>
</div>
</div>
</div>
<div class="add-course">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-4">
<div class="kecheng-img">
  <a href="player.php"><img class="img-responsive" alt="Responsive image" style="margin-top:0px;" src="images/picture2.png"></a>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-5">
  <div class="description hidden-xs">
  <h3 class="ds-header">木梁承重</h3>
  <p class="small-tip">力学 <span class="label label-success">物理科学</span></p>
  <p>小主人公“达维恩”和他的萌宠“卤蛋”穿越时空来到了中国古代的战场，并成功从一名从天而降的“奸细”变成军队英雄的故事。</p>
  </div>
   <div class="other-ds visible-xs-block">
  <h4>木梁承重</h4>
  <p>力学 <span class="label label-success">物理科学</span></p>
  </div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-3">
  <div class="caozuo hidden-xs">
<a class="btn btn-primary btn-lg" href="player.php" role="button">在线听课</a>
<p class="duiqi">已开课</p>
</div>
  <div class="other-caozuo visible-xs-block ">
<a class="btn btn-primary " href="player.php" role="button">在线听课</a>
<p>已开课</p>
</div>
</div>
</div>
</div>
<div class="add-course">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-4">
<div class="kecheng-img">
  <a href="player.php"><img class="img-responsive" alt="Responsive image" style="margin-top:0px;" src="images/picture2.png"></a>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-5">
  <div class="description hidden-xs">
  <h3 class="ds-header">木梁承重</h3>
  <p class="small-tip">力学 <span class="label label-success">物理科学</span></p>
  <p>小主人公“达维恩”和他的萌宠“卤蛋”穿越时空来到了中国古代的战场，并成功从一名从天而降的“奸细”变成军队英雄的故事。</p>
  </div>
   <div class="other-ds visible-xs-block">
  <h4>木梁承重</h4>
  <p>力学 <span class="label label-success">物理科学</span></p>
  </div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-3">
  <div class="caozuo hidden-xs">
<a class="btn btn-primary btn-lg" href="player.php" role="button">在线听课</a>
<p class="duiqi">已开课</p>
</div>
  <div class="other-caozuo visible-xs-block ">
<a class="btn btn-primary " href="player.php" role="button">在线听课</a>
<p>已开课</p>
</div>
</div>
</div>
</div>
<div class="add-course">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-4">
<div class="kecheng-img">
  <a href="player.php"><img class="img-responsive" alt="Responsive image" style="margin-top:0px;" src="images/picture2.png"></a>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-5">
  <div class="description hidden-xs">
  <h3 class="ds-header">木梁承重</h3>
  <p class="small-tip">力学 <span class="label label-success">物理科学</span></p>
  <p>小主人公“达维恩”和他的萌宠“卤蛋”穿越时空来到了中国古代的战场，并成功从一名从天而降的“奸细”变成军队英雄的故事。</p>
  </div>
   <div class="other-ds visible-xs-block">
  <h4>木梁承重</h4>
  <p>力学 <span class="label label-success">物理科学</span></p>
  </div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-3">
  <div class="caozuo hidden-xs">
<a class="btn btn-primary btn-lg" href="player.php" role="button">在线听课</a>
<p class="duiqi">已开课</p>
</div>
  <div class="other-caozuo visible-xs-block ">
<a class="btn btn-primary " href="player.php" role="button">在线听课</a>
<p>已开课</p>
</div>
</div>
</div>
</div>
<div class="add-course">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-4">
<div class="kecheng-img">
  <a href="player.php"><img class="img-responsive" alt="Responsive image" style="margin-top:0px;" src="images/picture2.png"></a>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-5">
  <div class="description hidden-xs">
  <h3 class="ds-header">木梁承重</h3>
  <p class="small-tip">力学 <span class="label label-success">物理科学</span></p>
  <p>小主人公“达维恩”和他的萌宠“卤蛋”穿越时空来到了中国古代的战场，并成功从一名从天而降的“奸细”变成军队英雄的故事。</p>
  </div>
   <div class="other-ds visible-xs-block">
  <h4>木梁承重</h4>
  <p>力学 <span class="label label-success">物理科学</span></p>
  </div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-3">
  <div class="caozuo hidden-xs">
<a class="btn btn-primary btn-lg" href="player.php" role="button">在线听课</a>
<p class="duiqi">已开课</p>
</div>
  <div class="other-caozuo visible-xs-block ">
<a class="btn btn-primary " href="player.php" role="button">在线听课</a>
<p>已开课</p>
</div>
</div>
</div>
</div>
<div class="add-course">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-4">
<div class="kecheng-img">
  <a href="player.php"><img class="img-responsive" alt="Responsive image" style="margin-top:0px;" src="images/picture2.png"></a>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-5">
  <div class="description hidden-xs">
  <h3 class="ds-header">木梁承重</h3>
  <p class="small-tip">力学 <span class="label label-success">物理科学</span></p>
  <p>小主人公“达维恩”和他的萌宠“卤蛋”穿越时空来到了中国古代的战场，并成功从一名从天而降的“奸细”变成军队英雄的故事。</p>
  </div>
   <div class="other-ds visible-xs-block">
  <h4>木梁承重</h4>
  <p>力学 <span class="label label-success">物理科学</span></p>
  </div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-3">
  <div class="caozuo hidden-xs">
<a class="btn btn-primary btn-lg" href="player.php" role="button">在线听课</a>
<p class="duiqi">已开课</p>
</div>
  <div class="other-caozuo visible-xs-block ">
<a class="btn btn-primary " href="player.php" role="button">在线听课</a>
<p>已开课</p>
</div>
</div>
</div>
</div>
</div>
<?php
require_once './footer.php';
?>
   
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
  </body>