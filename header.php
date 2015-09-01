         <nav class="navbar navbar-inverse"> <!-- 首页 -->
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand1" href="index.php"> <img class="visible-lg-block " alt="Responsive image" src="images/logo1.png"></a>
       <a class="navbar-brand" href="index.php"> <img class=" hidden-lg " alt="Responsive image" src="images/logo4.png"></a>
    </div>
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	  <!-- /.modal -->
      <ul class="nav navbar-nav navbar-left" id="home-nav">
        <li value="home" class="active"><a href="index.php">首页<span class="sr-only">(current)</span></a></li>
		<li value="course"><a href="course.php">在线课程</a></li>
		<li value="bbs" ><a href="bbs/index.php">怪兽社区</a></li>
		<li value="about"><a href="#">关于我们</a></li>
      </ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a id="reg" type="button" class="btn btn-default zhuce" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <span class="reg-text">注册</span>
</a></li>
		<li><a id="login" type="button" class="btn btn-default zhuce" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <span class="login-text">登陆</span></a></li>
      </ul>

    </div>

	   <div class="modal fade" id="myModal">  <!-- 注册登陆弹框 -->
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="sizeclose" aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
	  <div class="login-box ">
	  <div class="box-size guodu">
	  <div class="sign-in pull-left">
	   <form class="form-signin" action="doLogin.php" method="post">
        <h2 class="form-signin-heading">注册</h2>
        <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="邮箱或者用户名" required="required">
        </div>
        <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="userpassword" id="inputPassword" class="form-control" placeholder="密码" required="required">
        </div>
        <div class="form-group row">
		<div class="col-xs-6 col-sm-6">
        <label for="inputPassword" class="sr-only">qr-code</label>
        <input type="text" name="verify" id="inputVerify" class="form-control" placeholder="验证码" required="required">
        </div >
		<div class="col-xs-6 col-sm-6">
		<img src="getVerify.php" alt="" />
		</div>
		</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">注册</button>
     <p style="margin-top:20px; text-align:center; ">已有账号？ <a href="javascript:;"  class="to-login">登陆>></a></p>
      </form>
	  </div>
	  <div class="login-in pull-left">
        <form class="form-login">
        <h2 class="form-signin-heading">登陆</h2>
        <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name="username" id="inputEmail1" class="form-control" placeholder="邮箱或者用户名" required="required" >
        </div>
        <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="userpassword" id="inputPassword1" class="form-control" placeholder="密码" required="required" >
        </div>
		 <div class="checkbox">
          <label>
            <input type="checkbox" name="remember-me" value="remember-me"> 记住我
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
         </form>
        <a class="forgetpassword" href="/oauth/weibo/instant_login/?_ref=frame">忘记密码>></a>
        <div class="noreg">
        <p><span class="hidden-xs">还没有账号?</span> <a href="javascript:;" class="to-signup">点击注册>></a></p>
        </div>
		</div>
		</div>
		</div>
      </div>
    </div>
  </div>
</div> 
  </div>
</nav>