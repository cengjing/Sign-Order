<?php

/* 文件名字: order.php */

/* 制作人:刘建涛 */

/* 修改时间: 2014-8-20 20:45:18 */

/* 功能介绍:获取从tiji.php得到的数据发送给insert.php进行操作 */



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

$state = "已提交订单";

$express = "尚未发货";

$expresscode = "尚未发货";

$username=$_SESSION['username'];

$auth = $_POST['auth'];

$update = $_POST['update'];

$patt_telphoto = "/^1+[0-9]{10,10}$/";

if ($auth == "" || $name == "" || $product == "" || $tel == "" || $address == "")

{

    echo ('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />必填项没有填写 <input type="submit" name="Submit" value="返回重新输入" onclick="window.history.back()" >');

	exit;

}

if($_SESSION['seccode'] != $auth){

	echo ('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />验证码输入错误 <input type="submit" name="Submit" value="返回重新输入" onclick="window.history.back()" >');

	exit;

}


if (!preg_match($patt_telphoto, $tel))

{

    echo ('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />您输入的手机号码格式不正确 <input type="submit" name="Submit" value="返回重新输入" onclick="window.history.back()" >');

	exit;

}

$stm="<html>

<head>

<title>订单详情</title>

<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>

<style>

.title { font-family: '宋体'; font-size: 13px; line-height: 150% ; color: #FFFFFF}

</style>

</head>

<body bgcolor=dfdfdf text=#000000>

<table width=80% border=0 cellspacing=1 cellpadding=2 class=title bgcolor=#33C align=center>

  <tr align=center bgcolor=5272BA> 

    <td colspan=2 height=30>客户[".$name."]的收货信息！</td>

  </tr>

  <tr bgcolor=5272BA> 

    <td align=right width='200'>名称：</td>

    <td>".$name."</td>

  </tr>

    <tr bgcolor=5272BA> 

    <td align=right width='200'>产品：</td>

    <td>".$product."</td>

  <tr bgcolor=5272BA> 

    <td align=right>电话号码：</td>

    <td>".$tel."</td>

  </tr>

  <tr bgcolor=5272BA> 

    <td align=right>收货人地址：</td>

    <td>".$address."</td>

  </tr>

  <tr bgcolor=5272BA> 

    <td align=right></td>

    <td align=right>提交时间:".$time."</td>

  </tr> 

  <tr bgcolor=5272BA> 

    <td align=right></td>

    <td align=right>您的订单提交成功，您可在您的后台看见您所提交的订单！</td>

  </tr>

  <tr bgcolor=5272BA> 

    <td align=right></td>

    <td align=right><button onclick='javascript:history.go(-1);' >返回上一页</button></td>

  </tr>

</table>

</body>

</html>"; 

require("insert.php"); //提交数据到数据库

require("../mail/sendmail.php"); //提交数据到邮箱

exit; 