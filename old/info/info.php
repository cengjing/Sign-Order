<?php
if($username!="admin"){
	$sql="SELECT * FROM admin WHERE username='$username'";
	$result=mysql_query($sql);
	echo "<table class='table table-striped table-bordered table-hover table-condensed'>";  
	echo "<tr><td>������</td><td>����</td><td>��Ʒ</td><td>�ֻ�����</td><td>��ַ</td><td>�ύʱ��</td><td>����״̬</td><td>��ݹ�˾</td><td>��ݵ���</td><td>������Ϣ</td><td>����</td><td>�˷�</td><td>�޸Ķ���</td><td>ɾ������</td><td>ȷ���ջ�</td></tr>";  
	while($row=mysql_fetch_row($result)) echo "<tr><td>$row[1]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[7]</td><td>$row[8]</td><td>$row[10]</td><td>$row[11]</td><td>$row[12]</td><td><a href='../control/get.php?com=$row[11]&nu=$row[12]'>�����Ϣ</a></td><td>��$row[13]</td><td>��$row[14]</td><td><a href='../control/update.php?id=$row[1]'>�޸Ķ���</a></td><td><a href='../control/delete.php?id=$row[1]' onClick='delcfm()'>ɾ������</a></td><td><a href='../control/success.php?id=$row[1]' onClick='ok()'>ȷ�϶���</a></td></tr>";
	echo "</table>";
}else{
	$sql="SELECT * FROM admin";
	$result=mysql_query($sql);
	echo "<table class='table table-striped table-bordered table-hover table-condensed'>";  
	echo "<tr><td>������</td><td>����</td><td>��Ʒ</td><td>�ֻ�����</td><td>��ַ</td><td>�ύʱ��</td><td>����״̬</td><td>��ݹ�˾</td><td>��ݵ���</td><td>������Ϣ</td><td>����</td><td>�˷�</td><td>����</td><td>ɾ������</td></tr>";  
	while($row=mysql_fetch_row($result)) echo "<tr><td>$row[1]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[7]</td><td>$row[8]</td><td>$row[10]</td><td>$row[11]</td><td>$row[12]</td><td><a href='../control/get.php?com=$row[11]&nu=$row[12]'>�����Ϣ</a></td><td>��$row[13]</td><td>��$row[14]</td><td><a href='../control/update.php?id=$row[1]'>����</a></td><td><a href='../control/delete.php?id=$row[1]' onClick='delcfm()'>ɾ������</a></td></tr>";
	echo "</table>";
}
?>
<script language="javascript">
    function delcfm() {
        if (!confirm("ȷ��Ҫɾ���˶������˲����޷��ָ���")) {
            window.event.returnValue = false;
        }
    }
</script>
<script language="javascript">
    function ok() {
        if (!confirm("ȷ��Ҫȷ���ջ��˶������˲����޷��ָ���")) {
            window.event.returnValue = false;
        }
    }
</script>