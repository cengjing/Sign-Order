<?php
include("class.phpmailer.php");
include("class.smtp.php");
include_once '../common/fromcheck.php';

//你只需填写一下信息即可****************************

$smtp = "smtp.exmail.qq.com";//必填，设置SMTP服务器 QQ邮箱是smtp.qq.com ，QQ邮箱默认未开启，请在邮箱里设置开通。网易的是 smtp.163.com 或 smtp.126.com
$youremail = "sendmail@jahjg.cn"; // 必填，开通SMTP服务的邮箱；也就是发件人Email。
$password = "hong0401"; //必填， 以上邮箱对应的密码

if($_SESSION['username'] != "admin"){
	$ymail = "mail@jahjg.cn"; //收信人的邮箱地址，也就是你自己收邮件的邮箱
}else{
	$ymail = $email;
}
$yname = "订单信息"; //收件人称呼

//填写信息结束 ****************************

function get_ip(){
   if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
       $ip = getenv("HTTP_CLIENT_IP");
   else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
       $ip = getenv("HTTP_X_FORWARDED_FOR");
   else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
       $ip = getenv("REMOTE_ADDR");
   else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
       $ip = $_SERVER['REMOTE_ADDR'];
   else
       $ip = "unknown";
   return($ip);
}

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAuth = true; 
$mail->Host = $smtp; 


$mail->Username = $youremail; 
$mail->Password = $password;

$mail->From = $youremail; 
$mail->FromName = "红井冈食品订单系统"; 

$mail->AddAddress($ymail,$yname);

if($_POST['name']){

	$mail->Subject = "姓名：".$name."【".$update."】"; 

if($_SESSION['username'] != "admin"){
	$html = '订单号：'.$id.'<br>姓名：'.$name.'<br>产品：'.$product.'<br>电话：'.$tel.'<br>地址：'.$address.'<br>提交IP：'.$ip.'<br>提交时间：'.$time.'<br>提交人：'.$username;
}else{
	$html = '订单号：'.$id.'<br>货款：'.$money.'<br>运费：'.$money2.'<br>快递公司：'.$express.'<br>快递单号：'.$expresscode.'<br>发货时间：'.$time;
}
	$mail->MsgHTML($html);
	$mail->IsHTML(true); 

	if(!$mail->Send()) {
		header("Content-Type: text/html; charset=utf-8");

		echo "<center>邮件发送失败，但您的订单已提交，管理员将在2小时内进行发货</center>";
	} else {
		header("Content-Type: text/html; charset=utf-8");
	    echo "<script language='javascript'>alert('提交成功！');location='../index.php';</script><center>您的订单邮件已经发送成功，请等待通知！</center>";
	}
}
?>