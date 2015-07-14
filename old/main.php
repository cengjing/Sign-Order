<?php
session_start();
include_once 'common/conn.php';
include_once 'common/check.php';
$title = "管理主页面";//当前页标题
include_once 'common/header.php';
if($_SESSION['username'] == "admin"){
	header("Location: admin/main.php");
}
?>
<body>
<div id="templatemo_contact" class="container_wapper">
	<div class="container-fluid">
        <h1>产品订单</h1>
<?php
if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 8.0"))  
echo "<center><font color='#FFFFFF'>不建议使用IE浏览本网页，建议使用Chrome或Chrome内核浏览器浏览本网页</font></center>";  
else if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 7.0"))  
echo "<center><font color='#FFFFFF'>不建议使用IE浏览本网页，建议使用Chrome或Chrome内核浏览器浏览本网页</font></center>";  
else if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 6.0"))  
echo "<center><font color='#FFFFFF'>不建议使用IE浏览本网页，建议使用Chrome或Chrome内核浏览器浏览本网页</font></center>";  
?>
		
		<center><font color="#FFFFFF"><?php echo "$username" ?>欢迎您来到红井冈食品订单提交系统！如需帮助请<a href='faq/FAQ.htm' target="_blank"/></font><font color="#FFFFFF">点此</font></a><font color="#FFFFFF">使用完成后请</font><a href='common/loginout.php'><font color="#FFFFFF">安全退出</font></a></center><br />
		<center><a href='control/userupdate.php'><font color="#FFFFFF">修改密码</font></a></center><br />
		<hr/>
<?php
include_once "info/hjginfo.php";
include_once "tijiao.php";
?>
	<div class="row">
		<div class="col-md-4">
			<h2>订单管理</h2>
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