<?php
/* �ļ�����: order.php */
/* ������:������ */
/* �޸�ʱ��: 2014-8-20 20:45:18 */
/* ���ܽ���:��ȡ��tiji.php�õ������ݷ��͸�insert.php���в��� */

include_once '../common/check.php';
include_once '../common/conn.php';
include_once '../common/fromcheck.php';
function build_order_no(){
        return date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
    }
$id=build_order_no();
$name = $_POST['name'];
$product = $_POST['product'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$time = date("Y-m-d H:i:s");
$ip = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"]; 
$ip = ($ip) ? $ip : $_SERVER["REMOTE_ADDR"]; 
$time = date("Y-m-d H:i:s");
$state = "���ύ����";
$express = "��δ����";
$expresscode = "��δ����";
$username=$_POST['username'];
$auth = $_POST['auth'];
$email = $_POST['email'];
$update = $_POST['update'];
$patt_telphoto = "/^1+[0-9]{10,10}$/";
if ($auth == "" || $name == "" || $product == "" || $tel == "" || $address == "" || $username == "" || $email == "")
{
    echo ('������û����д <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
	exit;
}
if($_SESSION['seccode'] != $auth){
	echo ('��֤��������� <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
	exit;
}
if($_SESSION['username'] != $username){
	echo ('�û���������� <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
	exit;
}
if (!preg_match($patt_telphoto, $tel))
{
    echo ('��������ֻ������ʽ����ȷ <input type="submit" name="Submit" value="������������" onclick="window.history.back()" >');
	exit;
}
$stm="<html>
<head>
<title>��������</title>
<meta http-equiv='Content-Type' content='text/html; charset=gb2312'>
<style>
.title { font-family: '����'; font-size: 13px; line-height: 150% ; color: #FFFFFF}
</style>
</head>
<body bgcolor=dfdfdf text=#000000>
<table width=80% border=0 cellspacing=1 cellpadding=2 class=title bgcolor=#33C align=center>
  <tr align=center bgcolor=5272BA> 
    <td colspan=2 height=30>�ͻ�[".$name."]���ջ���Ϣ��</td>
  </tr>
  <tr bgcolor=5272BA> 
    <td align=right width='200'>���ƣ�</td>
    <td>".$name."</td>
  </tr>
    <tr bgcolor=5272BA> 
    <td align=right width='200'>��Ʒ��</td>
    <td>".$product."</td>
  <tr bgcolor=5272BA> 
    <td align=right>�绰���룺</td>
    <td>".$tel."</td>
  </tr>
  <tr bgcolor=5272BA> 
    <td align=right>�ջ��˵�ַ��</td>
    <td>".$address."</td>
  </tr>
  <tr bgcolor=5272BA> 
    <td align=right></td>
    <td align=right>�ύʱ��:".$time."</td>
  </tr> 
  <tr bgcolor=5272BA> 
    <td align=right></td>
    <td align=right>���Ķ����ύ�ɹ������������ĺ�̨���������ύ�Ķ�����</td>
  </tr>
  <tr bgcolor=5272BA> 
    <td align=right></td>
    <td align=right><button onclick='javascript:history.go(-1);' >������һҳ</button></td>
  </tr>
</table>
</body>
</html>"; 
require("insert.php"); //�ύ���ݵ����ݿ�
require("../mail/sendmail.php"); //�ύ���ݵ�����
exit; 