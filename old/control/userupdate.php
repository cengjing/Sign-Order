<?php
include_once '../common/check.php';
include_once '../common/conn.php';
$title = "�����޸�";//��ǰҳ����
include_once '../common/header.php';
?>
<body>
<form id="loginform" name="loginform" method="post" action="userupdate2.php">
	<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td height="60" colspan="2" align="center" bgcolor="#00CCFF"><img src="../images/button_logo.png" width="340" height="32" /></td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">�����룺</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="userpass" type="password" class="input" id="userpass" placeholder="�������ľ�����"/>
			</td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">�����룺</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="userpass1" type="password" class="input" id="userpass1" placeholder="����������"/>
			</td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">ȷ�����룺</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="userpass2" type="password" class="input" id="userpass2" placeholder="�ٴ�����������"/>
			</td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">��֤�룺</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input type="text" name="auth" class="input" id="auth">
				<img src="/common/code.php?act=yes" align="middle">
			</td>
		</tr>
		<tr>
			<td height="60" colspan="2" align="center" bgcolor="#00CCFF">
				<input type="submit" name="submit" id="submit" vaule="�ύ"/>
			</td>
		</tr>
	</table>
</form>
<?php
include_once '../common/footer.php';
?>
</body>
</html>