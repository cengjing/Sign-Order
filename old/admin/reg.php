<?php
include_once '../common/admincheck.php';
include_once '../common/conn.php';
$title = "����û�";//��ǰҳ����
include_once '../common/header.php';
?>
<body>
<form id="loginform" name="loginform" method="post" action="useradd.php">
	<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td height="60" colspan="2" align="center" bgcolor="#00CCFF"><img src="../images/button_logo.png" width="340" height="32" /></td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">�û�����</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="username" type="text" class="input" id="username" placeholder="�����̵��û���"/>
			</td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">�ܡ��룺</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="userpass" type="password" class="input" id="userpass" placeholder="�����̵�����"/>
			</td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">ȷ�����룺</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="userpass2" type="password" class="input" id="userpass2" placeholder="�ٴ���������"/>
			</td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">���䣺</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="email" type="text" class="input" id="email" placeholder="��������"/>
			</td>
		</tr>
		<tr>
			<td width="150" height="60" align="right" bgcolor="#00CCFF">�ֻ��ţ�</td>
			<td height="60" align="left" bgcolor="#00CCFF">
				<input name="tel" type="text" class="input" id="tel" placeholder="�����ֻ���"/>
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