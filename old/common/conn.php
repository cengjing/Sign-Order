<?php
/* �ļ�����: conn.php */
/* ������:������ */
/* �޸�ʱ��: 2014-8-20 20:45:18 */
/* ���ܽ���:���ݿ����Ӳ��� */
$host='localhost';//���ݿ������
$user='dd_jahjg_user';//���ݿ��û���
$password='JbfNJZhP7xnQuEs';//���ݿ�����
$database='dd_jahjg';//���ݿ���
$conn=@mysql_connect($host,$user,$password) or die('���ݿ�����ʧ�ܣ�');
@mysql_select_db($database) or die('û���ҵ����ݿ⣡');
mysql_query("set names 'gb2312'");
if(is_file($_SERVER['DOCUMENT_ROOT'].'../360safe/360webscan.php')){
    require_once($_SERVER['DOCUMENT_ROOT'].'../360safe/360webscan.php');
} // ע���ļ�·��