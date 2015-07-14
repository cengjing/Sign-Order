<?php
$title = "登陆";//当前页标题
include_once 'common/header.php';
?>
<body>
<form id="loginform" name="loginform" method="post" action="common/logincheck.php">
	<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td height="60" colspan="2" align="center" bgcolor="#00CCFF"><img src="images/button_logo.png" width="340" height="32" /></td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">用户名：</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="username" type="text" class="input" id="username" />
			</td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">密　码：</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="userpass" type="password" class="input" id="userpass" />
			</td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">验证码：</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input type="text" name="auth" class="input" id="auth">
				<img src="/common/code.php?act=yes" align="middle" onClick="this.src=this.src+'?'">
			</td>
		</tr>
		<tr>
			<td height="60" colspan="2" align="center" bgcolor="#00CCFF">
				<input type="image" src="images/button_login.png" name="submit" id='submit' onclick="" />
			</td>
		</tr>
		<tr>
			<td height="60" colspan="2" align="center" bgcolor="#00CCFF">
				<a href="faq/FAQ.htm" target="_blank"/>如需帮助请点此</a>
			</td>
		</tr>
	</table>
</form>
<?php
include_once 'common/footer.php';
?>
</body>
</html>