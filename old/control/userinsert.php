<?php
/* �ļ�����: userinsert.php */
/* ������:������ */
/* �޸�ʱ��: 2014-8-20 20:45:18 */
/* ���ܽ���:�û��޸Ķ������ݿ���� */
include_once '../common/admincheck.php';
include_once '../common/conn.php';
include_once '../common/fromcheck.php';
mysql_query('set names gb2312');//���ò������ݿ���ַ�����ʽ���������ݿ��е����ݳ�������
$sql = "UPDATE admin SET name='$name',product = '$product',tel = '$tel',address = '$address' WHERE id = '$id'";//�������
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }else{
	  echo "<center>���Ѿ��ɹ�����{$id}�Ķ�����</center>";
	  require("../mail/sendmail.php"); //�ύ���ݵ�����
  }
mysql_close($conn);
?>