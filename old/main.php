<?php
session_start();
include_once 'common/conn.php';
include_once 'common/check.php';
$title = "������ҳ��";//��ǰҳ����
include_once 'common/header.php';
if($_SESSION['username'] == "admin"){
	header("Location: admin/main.php");
}
?>
<body>
<div id="templatemo_contact" class="container_wapper">
	<div class="container-fluid">
        <h1>��Ʒ����</h1>
<?php
if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 8.0"))  
echo "<center><font color='#FFFFFF'>������ʹ��IE�������ҳ������ʹ��Chrome��Chrome�ں�������������ҳ</font></center>";  
else if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 7.0"))  
echo "<center><font color='#FFFFFF'>������ʹ��IE�������ҳ������ʹ��Chrome��Chrome�ں�������������ҳ</font></center>";  
else if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 6.0"))  
echo "<center><font color='#FFFFFF'>������ʹ��IE�������ҳ������ʹ��Chrome��Chrome�ں�������������ҳ</font></center>";  
?>
		
		<center><font color="#FFFFFF"><?php echo "$username" ?>��ӭ�������쾮��ʳƷ�����ύϵͳ�����������<a href='faq/FAQ.htm' target="_blank"/></font><font color="#FFFFFF">���</font></a><font color="#FFFFFF">ʹ����ɺ���</font><a href='common/loginout.php'><font color="#FFFFFF">��ȫ�˳�</font></a></center><br />
		<center><a href='control/userupdate.php'><font color="#FFFFFF">�޸�����</font></a></center><br />
		<hr/>
<?php
include_once "info/hjginfo.php";
include_once "tijiao.php";
?>
	<div class="row">
		<div class="col-md-4">
			<h2>��������</h2>
        </div>
	</div>
	<div class="row">
		<div class="col-md-12">
<?php
include_once "info/info.php";
?>
	</div>
		</div>
	</div>
</div>
<?php
include_once 'common/footer.php';
?>
</body>
</html>