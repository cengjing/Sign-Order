<?php
if($username!="admin"){
	$sql="SELECT * FROM admin WHERE username='$username'";
	$result=mysql_query($sql);
	echo "<table class='table table-striped table-bordered table-hover table-condensed'>";  
	echo "<tr><td>订单号</td><td>姓名</td><td>产品</td><td>手机号码</td><td>地址</td><td>提交时间</td><td>订单状态</td><td>快递公司</td><td>快递单号</td><td>配送信息</td><td>货款</td><td>运费</td><td>修改订单</td><td>删除订单</td><td>确认收货</td></tr>";  
	while($row=mysql_fetch_row($result)) echo "<tr><td>$row[1]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[7]</td><td>$row[8]</td><td>$row[10]</td><td>$row[11]</td><td>$row[12]</td><td><a href='../control/get.php?com=$row[11]&nu=$row[12]'>快递信息</a></td><td>￥$row[13]</td><td>￥$row[14]</td><td><a href='../control/update.php?id=$row[1]'>修改订单</a></td><td><a href='../control/delete.php?id=$row[1]' onClick='delcfm()'>删除订单</a></td><td><a href='../control/success.php?id=$row[1]' onClick='ok()'>确认订单</a></td></tr>";
	echo "</table>";
}else{
	$sql="SELECT * FROM admin";
	$result=mysql_query($sql);
	echo "<table class='table table-striped table-bordered table-hover table-condensed'>";  
	echo "<tr><td>订单号</td><td>姓名</td><td>产品</td><td>手机号码</td><td>地址</td><td>提交时间</td><td>订单状态</td><td>快递公司</td><td>快递单号</td><td>配送信息</td><td>货款</td><td>运费</td><td>发货</td><td>删除订单</td></tr>";  
	while($row=mysql_fetch_row($result)) echo "<tr><td>$row[1]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[7]</td><td>$row[8]</td><td>$row[10]</td><td>$row[11]</td><td>$row[12]</td><td><a href='../control/get.php?com=$row[11]&nu=$row[12]'>快递信息</a></td><td>￥$row[13]</td><td>￥$row[14]</td><td><a href='../control/update.php?id=$row[1]'>发货</a></td><td><a href='../control/delete.php?id=$row[1]' onClick='delcfm()'>删除订单</a></td></tr>";
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