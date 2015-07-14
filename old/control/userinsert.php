<?php
/* 文件名字: userinsert.php */
/* 制作人:刘建涛 */
/* 修改时间: 2014-8-20 20:45:18 */
/* 功能介绍:用户修改订单数据库操作 */
include_once '../common/admincheck.php';
include_once '../common/conn.php';
include_once '../common/fromcheck.php';
mysql_query('set names gb2312');//设置插入数据库的字符集格式，避免数据库中的数据出现乱码
$sql = "UPDATE admin SET name='$name',product = '$product',tel = '$tel',address = '$address' WHERE id = '$id'";//数据入库
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }else{
	  echo "<center>您已经成功更新{$id}的订单！</center>";
	  require("../mail/sendmail.php"); //提交数据到邮箱
  }
mysql_close($conn);
?>