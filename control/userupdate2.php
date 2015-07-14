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

    echo ('必填项没有填写 <input type="submit" name="Submit" value="返回重新输入" onclick="window.history.back()" >');

	exit;

}

if($_SESSION['seccode'] != $auth){

	echo ('验证码输入错误 <input type="submit" name="Submit" value="返回重新输入" onclick="window.history.back()" >');

	exit;

}

if ($row['userpass'] != $userpass){

	echo ('旧密码输入错误 <input type="submit" name="Submit" value="返回重新输入" onclick="window.history.back()" >');

	exit();

}

if($userpass1 != $userpass2){

	echo ('两次输入的密码不一样 <input type="submit" name="Submit" value="返回重新输入" onclick="window.history.back()" >');

	exit;

}

mysql_query('set names utf-8');//设置插入数据库的字符集格式，避免数据库中的数据出现乱码

$sql = "UPDATE user SET userpass = '$userpass3' WHERE username = '$username'";//数据入库

if (!mysql_query($sql,$conn))

  {

  die('Error: ' . mysql_error());

  }

mysql_close($conn);

$_SESSION['username']="";

echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><script language='javascript'>alert('修改密码成功成功！');location='../index.php';</script>";

?>