<?php
/* �ļ�����: success.php */
/* ������:������ */
/* �޸�ʱ��: 2014-8-20 23:42:35 */
/* ���ܽ���:����ȷ���ջ����� */
include_once '../common/check.php';
include_once '../common/conn.php';
include_once '../common/fromcheck.php';
$id = $_GET['id'];
mysql_query('set names gb2312');//���ò������ݿ���ַ�����ʽ���������ݿ��е����ݳ�������
$sql = "UPDATE admin SET state='��ȷ���ջ�' WHERE id = '$id'";//�������
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }else{
	  echo "<script language='javascript'>alert('ȷ���ջ��ɹ���');location='../index.php';</script><center>���Ѿ��ɹ�ȷ���ջ�{$id}�Ķ�����</center>";
  }
mysql_close($conn);
?>