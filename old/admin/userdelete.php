<?php
include_once '../common/admincheck.php';
include_once '../common/conn.php';
$title="����ɾ��";
include_once '../common/header.php';
	$id = $_GET['id'];
	$sql="DELETE FROM user WHERE id ='$id'";
	mysql_query($sql);
	echo "<script language='javascript'>alert('ɾ���ɹ���');location='../index.php';</script><center>ɾ���ɹ���</center>";
?>
<script language='javascript'>document.location = 'javascript:history.go(-1)'</script>
<center><input type="button" name="button" class="button" onclick="javascript:history.go(-1)" value="����" /></center>
<?php
include_once '../common/footer.php';
?>