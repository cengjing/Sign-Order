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
mysql_query('set names gb2312');//设置插入数据库的字符集格式，避免数据库中的数据出现乱码
$sql="insert into `user`(username,userpass,email,tel) values ('$username','$userpass3','$email','$tel')"; //数据入库
$patt_telphoto = "/^1+[0-9]{10,10}$/";
if ($auth == "" || $username == "" || $email == "" || $tel == "" || $userpass == "" || $userpass2 == "")
{
    echo ('必填项没有填写 <input type="submit" name="Submit" value="返回重新输入" onclick="window.history.back()" >');
	exit;
}
if($_SESSION['seccode'] != $auth){
	echo ('验证码输入错误 <input type="submit" name="Submit" value="返回重新输入" onclick="window.history.back()" >');
	exit;
}
if($userpass != $userpass2){
	echo ('两次输入的密码不一样 <input type="submit" name="Submit" value="返回重新输入" onclick="window.history.back()" >');
	exit;
}
if (!preg_match($patt_telphoto, $tel))
{
    echo ('手机号码格式不正确 <input type="submit" name="Submit" value="返回重新输入" onclick="window.history.back()" >');
	exit;
}
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($conn);
echo "<script language='javascript'>alert('提交成功！');location='../admin/main.php';</script>";
?>