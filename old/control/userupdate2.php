<?php
include_once '../common/check.php';
include_once '../common/conn.php';
include_once '../common/fromcheck.php';
$userpass = $_POST['userpass'];
$userpass = md5($_POST['userpass']);
$userpass1 = $_POST['userpass1'];
$userpass2 = $_POST['userpass2'];
$userpass3 = md5($_POST['userpass1']);
$auth = $_POST['auth'];
$sql="SELECT * FROM user WHERE username='$username'";
	$query=mysql_query($sql);
	$row=mysql_fetch_array($query);
if ($auth == "" || $userpass == "" || $userpass1 == "" || $userpass2 == "")
{
    echo ('������û����д <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
	exit;
}
if($_SESSION['seccode'] != $auth){
	echo ('��֤��������� <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
	exit;
}
if ($row['userpass'] != $userpass){
	echo ('������������� <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
	exit();
}
if($userpass1 != $userpass2){
	echo ('������������벻һ�� <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
	exit;
}
mysql_query('set names gb2312');//���ò������ݿ���ַ�����ʽ���������ݿ��е����ݳ�������
$sql = "UPDATE user SET userpass = '$userpass3' WHERE username = '$username'";//�������
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($conn);
$_SESSION['username']="";
echo "<script language='javascript'>alert('�޸�����ɹ��ɹ���');location='../index.php';</script>";
?>