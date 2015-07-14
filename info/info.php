<?php
if($username!="admin"){
	$sql="SELECT * FROM admin WHERE username='$username' ORDER by id2";
	$result=mysql_query($sql);
	echo "<table class='am-table am-table-striped am-table-hover table-main'>";  
	echo "<thead><tr><th>订单号</th><th>姓名</th><th>产品</th><th>手机号码</th><th>地址</th><th class='table-date'>提交时间</th><th>订单状态</th><th>快递公司</th><th>快递单号</th><th>货款</th><th>运费</th><th>修改订单</th><th>删除订单</th><th>确认收货</th></tr></thead>";  
	while($row=mysql_fetch_row($result)) echo "<tr><td>$row[1]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[7]</td><td>$row[8]</td><td>$row[10]</td><td>$row[11]</td><td>$row[12]</td><td>￥$row[13]</td><td>￥$row[14]</td><td><a href='../control/update.php?id=$row[1]'>修改订单</a></td><td><a href='../control/delete.php?id=$row[1]' onClick='delcfm()'>删除订单</a></td><td><a href='../control/success.php?id=$row[1]' onClick='ok()'>确认订单</a></td></tr>";
	echo "</table>";
}else{
	$sql="SELECT * FROM admin ORDER by id2";
	$result=mysql_query($sql);
	echo "<table class='am-table am-table-striped am-table-hover table-main'>";  
	echo "<thead><tr><th>订单号</th><th>姓名</th><th>产品</th><th>手机号码</th><th>地址</th><th>提交时间</th><th>订单状态</th><th>快递公司</th><th>快递单号</th><th>货款</th><th>运费</th><th>发货</th><th>删除订单</th></tr></thead>";  
	while($row=mysql_fetch_row($result)) echo "<tr><td>$row[1]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[7]</td><td>$row[8]</td><td>$row[10]</td><td>$row[11]</td><td>$row[12]</td><td>￥$row[13]</td><td>￥$row[14]</td><td><a href='../control/update.php?id=$row[1]'>发货</a></td><td><a href='../control/delete.php?id=$row[1]' onClick='delcfm()'>删除订单</a></td></tr>";
	echo "</table>";
}
?>
<script language="javascript">
    function delcfm() {
        if (!confirm("确认要删除此订单？此操作无法恢复！")) {
            window.event.returnValue = false;
        }
    }
</script>
<script language="javascript">
    function ok() {
        if (!confirm("确认要确认收货此订单？此操作无法恢复！")) {
            window.event.returnValue = false;
        }
    }
</script>