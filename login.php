<?php
session_start();
if($_SESSION['username']){
	header("Location: main.php");
};
$title = "登陆";//当前页标题
include_once 'common/header.php';
?>
<style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
<body>
<div class="header">
  <div class="am-g">
    <h1>红井冈食品订单管理系统</h1>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <h3>登录</h3>
    <hr>
    <br>
    <form method="post" class="am-form" action="common/logincheck.php">
      <label for="username">用户名:</label>
      <input type="text" name="username" id="username" value="">
      <br>
      <label for="password">密 码:</label>
      <input type="password" name="userpass" id="userpass" value="">
      <br>
	  <label for="password">验证码:</label>
	  <input type="text" name="auth" id="auth" value="">
	  <img src="/common/code.php?act=yes" align="middle" onClick="this.src=this.src+'?'">
	  <br>
      <br />
      <div class="am-cf">
        <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
      </div>
    </form>
    <hr>
    <p>© 2014 红井冈食品.</p>
  </div>
</div>
</body>
</html>