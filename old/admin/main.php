<?php
include_once '../common/admincheck.php';
include_once '../common/conn.php';
$title = "����Ա��̨";//��ǰҳ����
include_once '../common/header.php';
?>
<body>
<div id="templatemo_contact" class="container_wapper">
	<div class="container-fluid">
        <h1>����Ա��̨</h1>
<?php
if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 8.0"))  
echo "<center><font color='#FFFFFF'>������ʹ��IE�������ҳ������ʹ��Chrome��Chrome�ں�������������ҳ</font></center>";  
else if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 7.0"))  
echo "<center><font color='#FFFFFF'>������ʹ��IE�������ҳ������ʹ��Chrome��Chrome�ں�������������ҳ</font></center>";  
else if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 6.0"))  
echo "<center><font color='#FFFFFF'>������ʹ��IE�������ҳ������ʹ��Chrome��Chrome�ں�������������ҳ</font></center>";  
?>
		<center><font color="#FFFFFF"><?php echo "$username" ?>��ӭ�������쾮��ʳƷ��������ϵͳ��̨�����������<a href='../faq/FAQ.htm' target="_blank"/>���</a>ʹ����ɺ���<a href='../common/loginout.php'>��ȫ�˳�</a></font></center>
		<hr/>
		<div class="row">
		<div class="col-md-4">
			<h2>��������</h2>
        </div>
		<div class="col-md-4">
			<h2><a href="mail.php" target="_blank"/>����Ա�����½</a></h2>
        </div>
		</div>
<?php
include_once "../info/info.php"
?>
		<div class="row">
		<div class="col-md-4">
			<h2>�û�����</h2>
        </div>
		</div>
<?php
include_once "userinfo.php"
?>

</div>
</div>
<?php
include_once '../common/footer.php';
?>
</body>
</html>