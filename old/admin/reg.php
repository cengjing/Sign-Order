<?php
include_once '../common/admincheck.php';
include_once '../common/conn.php';
$title = "添加用户";//当前页标题
include_once '../common/header.php';
?>
<body>
<form id="loginform" name="loginform" method="post" action="useradd.php">
	<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td height="60" colspan="2" align="center" bgcolor="#00CCFF"><img src="../images/button_logo.png" width="340" height="32" /></td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">用户名：</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="username" type="text" class="input" id="username" placeholder="经销商的用户名"/>
			</td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">密　码：</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="userpass" type="password" class="input" id="userpass" placeholder="经销商的密码"/>
			</td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">确认密码：</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="userpass2" type="password" class="input" id="userpass2" placeholder="再次输入密码"/>
			</td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">邮箱：</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="email" type="text" class="input" id="email" placeholder="输入邮箱"/>
			</td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">手机号：</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="tel" type="text" class="input" id="tel" placeholder="输入手机号"/>
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