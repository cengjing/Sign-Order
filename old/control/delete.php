<?php
/* �ļ�����: delete.php */
/* ������:������ */
/* �޸�ʱ��: 2014-8-20 20:45:18 */
/* ���ܽ���:ɾ��GET����ID���� */
include_once '../common/check.php';
include_once '../common/conn.php';
include_once '../common/fromcheck.php';
$title="����ɾ��";
include_once '../common/header.php';
if(isset($_GET['id'])){
		$id = $_GET['id'];
}
	$sql = "SELECT * FROM admin WHERE id='$id'";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
		if($rows['state']=="�ѷ���"){
			echo "<script language='javascript'>alert('�Բ��𣬴˶����ѷ�����ʱ�޷�ɾ����');location='../index.php';</script>";
		}else{
			$sql="DELETE FROM admin WHERE id ='$id'";
				if($query = mysql_query($sql)){
				echo "���Ѿ��ɹ�ɾ��{$id}�Ķ�����";
				header('Location: ../index.php');
				}
		}
include_once '../common/footer.php';
?>