<?php
/* �ļ�����: update2.php */
/* ������:������ */
/* �޸�ʱ��: 2014-8-20 20:45:18 */
/* ���ܽ���:��ȡ��update.php�õ������ݷ��͸�admininsert.php��userinsert.php���в��� */
include_once '../common/check.php';
include_once '../common/conn.php';
include_once '../common/fromcheck.php';
$title="��������";
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
$express = "��ͨ���";
$expresscode = $_POST['expresscode'];
$state = "�ѷ���";
$auth = $_POST['auth'];
$ip = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"]; 
$ip = ($ip) ? $ip : $_SERVER["REMOTE_ADDR"]; 
$time = date("Y-m-d H:i:s");
$patt_telphoto = "/^1+[0-9]{10,10}$/";
if($_SESSION['username'] != "admin"){
	if ($auth == "" || $name == "" || $product == "" || $tel == "" || $address == "" || $username == "" || $email == ""){
		echo ('������û����д <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
		exit();
		}
		if($_SESSION['seccode'] != $auth){
			echo ('��֤��������� <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
			exit();
			}
				if($_SESSION['username'] != $username){
					echo ('�û���������� <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
					exit();
					}
						if (!preg_match($patt_telphoto, $tel)){
							echo ('��������ֻ������ʽ����ȷ <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
							exit();
							}
}else{
	if ($auth == "" || $money == "" || $money2 == "" || $expresscode == ""){
		echo ('������û����д <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
		exit();
		}
			if($_SESSION['seccode'] != $auth){
				echo ('��֤��������� <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
				exit();
				}
}
if(isset($_POST['id'])){
		$id = $_POST['id'];
		if($_SESSION['username'] != "admin"){
			require("userinsert.php"); //�ύ���ݵ����ݿ�
		}else{
			require("admininsert.php"); //�ύ���ݵ����ݿ�
		}
}
include_once '../common/footer.php';

?>