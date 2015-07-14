<?php

/* 文件名字: logincheck.php */

/* 制作人:刘建涛 */

/* 修改时间: 2014-8-20 20:45:18 */

/* 功能介绍:验证登录信息 */

session_start();

include_once '../common/conn.php';

include_once '../common/fromcheck.php';

include_once '../system/function/message.php';

	$auth = trim(htmlspecialchars($_POST['auth']));

	$username=trim(htmlspecialchars($_POST['username']));

	$userpass=trim(htmlspecialchars($_POST['userpass']));

	$userpass=md5($userpass);

	$sql="SELECT * FROM user WHERE username='{$username}'";
	$query=mysql_query($sql);

	$row=mysql_fetch_array($query);

if($username==" " || $userpass==" " || $auth==" "){

	echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><script language='javascript'>alert('必要项没有填写！');location='javascript:history.go(-1)';</script>";

	exit();

}

if($auth != $_SESSION['seccode']){

	echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><script language='javascript'>alert('验证码输入错误！');location='javascript:history.go(-1)';</script>";

	exit();

}

if ($row['username'] != $username){

	echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><script language='javascript'>alert('用户名不存在！');location='javascript:history.go(-1)';</script>";

	exit();

}

if ($row['userpass']!=$userpass){

	echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><script language='javascript'>alert('用户名或密码错误！');location='javascript:history.go(-1)';</script>";

	exit();

}

if($_SESSION['username']=$username){

	if($row['flag']==1){

		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><script language='javascript'>alert('登陆成功！');location='../admin/main.php';</script>";

		exit();
	}else{

		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><script language='javascript'>alert('登陆成功！');location='../main.php';</script>";

		exit();
	}

}

?>