<?php
/* �ļ�����: admincheck.php */
/* ������:������ */
/* �޸�ʱ��: 2014-8-20 20:45:18 */
/* ���ܽ���:��֤��½���û��Ƿ�Ϊadmin�˺� */
//����Ҫ��֤����Ա��ݵĵط�����
//�����ñ��ļ�֮ǰ�������κ���ʽ��������������ĵ��ʼ������
session_start();
if ($_SESSION['username']==""){
	echo "<script language='javascript'>alert('����û�е�½��');location='../index.php';</script>";
}
if ($_SESSION['username']!="admin"){
	echo "<script language='javascript'>alert('��û��Ȩ�޲�����');location='../index.php';</script>";
}
$username=$_SESSION['username'];