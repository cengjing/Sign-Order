<?php
include("class.phpmailer.php");
include("class.smtp.php");
include_once '../common/fromcheck.php';

//��ֻ����дһ����Ϣ����****************************

$smtp = "smtp.exmail.qq.com";//�������SMTP������ QQ������smtp.qq.com ��QQ����Ĭ��δ�������������������ÿ�ͨ�����׵��� smtp.163.com �� smtp.126.com
$youremail = "sendmail@jahjg.cn"; // �����ͨSMTP��������䣻Ҳ���Ƿ�����Email��
$password = "hong0401"; //��� ���������Ӧ������

if($_SESSION['username'] != "admin"){
	$ymail = "mail@jahjg.cn"; //�����˵������ַ��Ҳ�������Լ����ʼ�������
}else{
	$ymail = $email;
}
$yname = "������Ϣ"; //�ռ��˳ƺ�

//��д��Ϣ���� ****************************

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
$mail->FromName = "�쾮��ʳƷ����ϵͳ"; 

$mail->AddAddress($ymail,$yname);

if($_POST['name']){

	$mail->Subject = "������".$name."��".$update."��"; 

if($_SESSION['username'] != "admin"){
	$html = '�����ţ�'.$id.'<br>������'.$name.'<br>��Ʒ��'.$product.'<br>�绰��'.$tel.'<br>��ַ��'.$address.'<br>�ύIP��'.$ip.'<br>�ύʱ�䣺'.$time.'<br>�ύ�ˣ�'.$username;
}else{
	$html = '�����ţ�'.$id.'<br>���'.$money.'<br>�˷ѣ�'.$money2.'<br>��ݹ�˾��'.$express.'<br>��ݵ��ţ�'.$expresscode.'<br>����ʱ�䣺'.$time;
}
	$mail->MsgHTML($html);
	$mail->IsHTML(true); 

	if(!$mail->Send()) {
		header("Content-Type: text/html; charset=gb2312");

		echo "<center>�ʼ�����ʧ�ܣ������Ķ������ύ������Ա����2Сʱ�ڽ��з���</center>";
	} else {
		header("Content-Type: text/html; charset=gb2312");
	    echo "<script language='javascript'>alert('�ύ�ɹ���');location='../index.php';</script><center>���Ķ����ʼ��Ѿ����ͳɹ�����ȴ�֪ͨ��</center>";
	}
}
?>