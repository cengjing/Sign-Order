<?php
include_once '../common/admincheck.php';
include_once '../common/conn.php';
include_once '../common/fromcheck.php';
$username = $_POST['username'];
$userpass = $_POST['userpass'];
$userpass2 = $_POST['userpass2'];
$userpass3 = md5($_POST['userpass']);
$email = $_POST['email'];
$tel = $_POST['tel'];
$auth = $_POST['auth'];
mysql_query('set names gb2312');//���ò������ݿ���ַ�����ʽ���������ݿ��е����ݳ�������
$sql="insert into `user`(username,userpass,email,tel) values ('$username','$userpass3','$email','$tel')"; //�������
$patt_telphoto = "/^1+[0-9]{10,10}$/";
if ($auth == "" || $username == "" || $email == "" || $tel == "" || $userpass == "" || $userpass2 == "")
{
    echo ('������û����д <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
	exit;
}
if($_SESSION['seccode'] != $auth){
	echo ('��֤��������� <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
	exit;
}
if($userpass != $userpass2){
	echo ('������������벻һ�� <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
	exit;
}
if (!preg_match($patt_telphoto, $tel))
{
    echo ('�ֻ������ʽ����ȷ <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
	exit;
}
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($conn);
echo "<script language='javascript'>alert('�ύ�ɹ���');location='../admin/main.php';</script>";
?>