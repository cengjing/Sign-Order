<?php
/* 文件名字: delete.php */
/* 制作人:刘建涛 */
/* 修改时间: 2014-8-20 20:45:18 */
/* 功能介绍:删除GET到的ID订单 */
include_once '../common/check.php';
include_once '../common/conn.php';
include_once '../common/fromcheck.php';
$title="订单删除";
include_once '../common/header.php';
if(isset($_GET['id'])){
		$id = $_GET['id'];
}
	$sql = "SELECT * FROM admin WHERE id='$id'";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
		if($rows['state']=="已发货"){
			echo "<script language='javascript'>alert('对不起，此订单已发货暂时无法删除！');location='../index.php';</script>";
		}else{
			$sql="DELETE FROM admin WHERE id ='$id'";
				if($query = mysql_query($sql)){
				echo "您已经成功删除{$id}的订单！";
				header('Location: ../index.php');
				}
		}
include_once '../common/footer.php';
?>