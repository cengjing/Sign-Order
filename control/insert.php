<?php

/* 文件名字: insert.php */

/* 制作人:刘建涛 */

/* 修改时间: 2014-8-20 20:45:18 */

/* 功能介绍:获取从order.php得到的数据发送给数据库进行操作 */

include_once '../common/check.php';

include_once '../common/conn.php';

include_once '../common/fromcheck.php';

echo "<center>订单号：$id</center>";

echo "$stm";   

mysql_query('set names utf-8');//设置插入数据库的字符集格式，避免数据库中的数据出现乱码

$sql="insert into `admin`(id,username,name,product,tel,address,time,ip,state,express,expresscode,money,money2) values ('$id','$username','$name','$product','$tel','$address','$time','$ip','$state','$express','$expresscode',' ',' ')"; //Êý¾ÝÈë¿â

if (!mysql_query($sql,$conn))

  {

  die('Error: ' . mysql_error());

  }

mysql_close($conn);

?>