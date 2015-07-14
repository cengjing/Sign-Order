<?php
/* 文件名字: update2.php */
/* 制作人:刘建涛 */
/* 修改时间: 2014-8-20 20:45:18 */
/* 功能介绍:获取从update.php得到的数据发送给admininsert.php或userinsert.php进行操作 */
include_once '../common/check.php';
include_once '../common/conn.php';
include_once '../common/fromcheck.php';
$title="订单更新";
include_once '../common/header.php';
$name = $_POST['name'];
$update = $_POST['update'];
$product = $_POST['product'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$email = $_POST['email'];
$username = $_POST['username'];
$money = $_POST['money'];
$money2 = $_POST['money2'];
$express = "中通快递";
$expresscode = $_POST['expresscode'];
$state = "已发货";
$auth = $_POST['auth'];
$ip = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"]; 
$ip = ($ip) ? $ip : $_SERVER["REMOTE_ADDR"]; 
$time = date("Y-m-d H:i:s");
$patt_telphoto = "/^1+[0-9]{10,10}$/";
if($_SESSION['username'] != "admin"){
	if ($auth == "" || $name == "" || $product == "" || $tel == "" || $address == ""){
		echo ('必填项没有填写 <input type="submit" name="Submit" value="返回重新输入" onclick="window.history.back()" >');
		exit();
		}
		if($_SESSION['seccode'] != $auth){
			echo ('验证码输入错误 <input type="submit" name="Submit" value="返回重新输入" onclick="window.history.back()" >');
			exit();
			}
				if (!preg_match($patt_telphoto, $tel)){
					echo ('您输入的手机号码格式不正确 <input type="submit" name="Submit" value="返回重新输入" onclick="window.history.back()" >');
					exit();
					}
}else{
	if ($auth == "" || $money == "" || $money2 == "" || $expresscode == ""){
		echo ('必填项没有填写 <input type="submit" name="Submit" value="返回重新输入" onclick="window.history.back()" >');
		exit();
		}
			if($_SESSION['seccode'] != $auth){
				echo ('验证码输入错误 <input type="submit" name="Submit" value="返回重新输入" onclick="window.history.back()" >');
				exit();
				}
}
if(isset($_POST['id'])){
		$id = $_POST['id'];
		if($_SESSION['username'] != "admin"){
			require("userinsert.php"); //提交数据到数据库
		}else{
			require("admininsert.php"); //提交数据到数据库
		}
}
include_once '../common/footer.php';

?>