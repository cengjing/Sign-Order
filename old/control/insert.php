<?php
/* �ļ�����: insert.php */
/* ������:������ */
/* �޸�ʱ��: 2014-8-20 20:45:18 */
/* ���ܽ���:��ȡ��order.php�õ������ݷ��͸����ݿ���в��� */
include_once '../common/check.php';
include_once '../common/conn.php';
include_once '../common/fromcheck.php';
echo "<center>�����ţ�$id</center>";
echo "$stm";   
mysql_query('set names gb2312');//���ò������ݿ���ַ�����ʽ���������ݿ��е����ݳ�������
$sql="insert into `admin`(id,username,name,product,tel,address,time,ip,state,express,expresscode,money,money2,email) values ('$id','$username','$name','$product','$tel','$address','$time','$ip','$state','$express','$expresscode',' ',' ','$email')"; //�������
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($conn);
?>