<?php
include_once '../common/admincheck.php';
include_once '../common/conn.php';
$title="订单删除";
include_once '../common/header.php';
	$id = $_GET['id'];
	$sql="DELETE FROM user WHERE id ='$id'";
	mysql_query($sql);
	echo "<script language='javascript'>alert('删除成功！');location='../index.php';</script><center>删除成功！</center>";
?>
<script language='javascript'>document.location = 'javascript:history.go(-1)'</script>
<center><input type="button" name="button" class="button" onclick="javascript:history.go(-1)" value="返回" /></center>
<?php
include_once '../common/footer.php';
?>