<?php
/* 文件名字: admininsert.php */
/* 制作人:刘建涛 */
/* 修改时间: 2014-8-20 20:45:18 */
/* 功能介绍:订单发货数据库操作 */
include_once '../common/check.php';
include_once '../common/conn.php';
include_once '../common/fromcheck.php';
mysql_query('set names gb2312');//设置插入数据库的字符集格式，避免数据库中的数据出现乱码
$sql = "UPDATE admin SET money='$money',money2 = '$money2',express = '$express',expresscode = '$expresscode',state = '$state' WHERE id = '$id'"; //数据入库
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }else{
	  echo "<script language='javascript'>alert('发货成功！');location='../index.php';</script><center>已发货{$id}的订单！</center>";
	  require("../mail/sendmail.php"); //提交数据到邮箱
  }
mysql_close($conn);
?>