<?php
include_once '../common/admincheck.php';
include_once '../common/conn.php';
$sql="SELECT * FROM user ORDER by id";
$result=mysql_query($sql);
echo "<table class='am-table am-table-striped am-table-hover table-main'>";  
echo "<thead><tr><th>经销商ID<a class='btn btn-link' href='reg.php'>添加用户</a></th><th>经销商用户名</th><th>删除经销商</th></tr></thead>";  
while($row=mysql_fetch_row($result)) echo "<tr><td>$row[0]</td><td>$row[1]</td><td><a href='../admin/userdelete.php?id=$row[0]' onClick='delcfm1()'>删除用户</a></td></tr>";
echo "</table>";
?>
<script language="javascript">
    function delcfm1() {
        if (!confirm("确认要删除此用户？此操作无法恢复！")) {
            window.event.returnValue = false;
        }
    }
</script>