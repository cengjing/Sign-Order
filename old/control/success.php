<?php
/* 文件名字: success.php */
/* 制作人:刘建涛 */
/* 修改时间: 2014-8-20 23:42:35 */
/* 功能介绍:订单确认收货操作 */
include_once '../common/check.php';
include_once '../common/conn.php';
include_once '../common/fromcheck.php';
$id = $_GET['id'];
mysql_query('set names gb2312');//设置插入数据库的字符集格式，避免数据库中的数据出现乱码
$sql = "UPDATE admin SET state='已确认收货' WHERE id = '$id'";//数据入库
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }else{
	  echo "<script language='javascript'>alert('确认收货成功！');location='../index.php';</script><center>您已经成功确认收货{$id}的订单！</center>";
  }
mysql_close($conn);
?>