<?php
include_once '../common/admincheck.php';
include_once '../common/conn.php';
$sql="SELECT * FROM user";
$result=mysql_query($sql);
echo "<table class='table table-bordered table-hover table-hover'>";  
echo "<tr><td>������ID<a class='btn btn-link' href='reg.php' target='_blank'>����û�</a></td><td>�������û���</td><td>ɾ��������</td></tr>";  
while($row=mysql_fetch_row($result)) echo "<tr><td>$row[0]</td><td>$row[1]</td><td><a href='../admin/userdelete.php?id=$row[0]' onClick='delcfm1()'>ɾ���û�</a></td></tr>";
echo "</table>";
?>
<script language="javascript">
    function delcfm1() {
        if (!confirm("ȷ��Ҫɾ�����û����˲����޷��ָ���")) {
            window.event.returnValue = false;
        }
    }
</script>