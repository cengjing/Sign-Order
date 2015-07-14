<?php
include_once '../common/check.php';
include_once '../common/conn.php';
$title = "密码修改";//当前页标题
include_once '../common/header.php';
?>
<body>
<form id="loginform" name="loginform" method="post" action="userupdate2.php">
	<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td height="60" colspan="2" align="center" bgcolor="#00CCFF"><img src="../images/button_logo.png" width="340" height="32" /></td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">旧密码：</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="userpass" type="password" class="input" id="userpass" placeholder="输入您的旧密码"/>
			</td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">新密码：</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="userpass1" type="password" class="input" id="userpass1" placeholder="输入新密码"/>
			</td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">确认密码：</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="userpass2" type="password" class="input" id="userpass2" placeholder="再次输入新密码"/>
			</td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">验证码：</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input type="text" name="auth" class="input" id="auth">
				<img src="/common/code.php?act=yes" align="middle">
			</td>
		</tr>
		<tr>
			<td height="60" colspan="2" align="center" bgcolor="#00CCFF">
				<input type="submit" name="submit" id="submit" vaule="提交"/>
			</td>
		</tr>
	</table>
</form>
<?php
include_once '../common/footer.php';
?>
</body>
</html>