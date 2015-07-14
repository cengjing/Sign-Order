<?php
include_once '../common/check.php';
include_once '../common/conn.php';
$title = "密码修改";//当前页标题
include_once '../common/header.php';
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
    <h1>修改密码</h1>
    <hr>
    <br>
	<form method="post" class="am-form" action="userupdate2.php">
      <label for="username">旧密码:</label>
      <input type="password" name="userpass" id="userpass" value="">
      <br>
      <label for="password">新密码:</label>
      <input type="password" name="userpass1" id="userpass1" value="">
      <br>
	  <label for="password">确认密码:</label>
      <input type="password" name="userpass2" id="userpass2" value="">
      <br>
	  <label for="password">验证码:</label>
	  <input type="text" name="auth" id="auth" value="">
	  <img src="../common/code.php?act=yes" align="middle" onClick="this.src=this.src+'?'">
	  <br>
      <br />
      <div class="am-cf">
        <input type="submit" name="" value="提交" class="am-btn am-btn-primary am-btn-sm am-fl">
		<input type="button" name="" onclick="javascript:history.back(-1);" value="返 回" class="am-btn am-btn-primary am-btn-sm am-fl">
      </div>
    </form>
	</div>
</div>
<?php
include_once '../common/footer.php';
?>
</body>
</html>