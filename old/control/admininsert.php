<?php
/* �ļ�����: admininsert.php */
/* ������:������ */
/* �޸�ʱ��: 2014-8-20 20:45:18 */
/* ���ܽ���:�����������ݿ���� */
include_once '../common/check.php';
include_once '../common/conn.php';
include_once '../common/fromcheck.php';
mysql_query('set names gb2312');//���ò������ݿ���ַ�����ʽ���������ݿ��е����ݳ�������
$sql = "UPDATE admin SET money='$money',money2 = '$money2',express = '$express',expresscode = '$expresscode',state = '$state' WHERE id = '$id'"; //�������
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }else{
	  echo "<script language='javascript'>alert('�����ɹ���');location='../index.php';</script><center>�ѷ���{$id}�Ķ�����</center>";
	  require("../mail/sendmail.php"); //�ύ���ݵ�����
  }
mysql_close($conn);
?>