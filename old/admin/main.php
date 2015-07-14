<?php
include_once '../common/admincheck.php';
include_once '../common/conn.php';
$title = "管理员后台";//当前页标题
include_once '../common/header.php';
?>
<body>
<div id="templatemo_contact" class="container_wapper">
	<div class="container-fluid">
        <h1>管理员后台</h1>
<?php
if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 8.0"))  
echo "<center><font color='#FFFFFF'>不建议使用IE浏览本网页，建议使用Chrome或Chrome内核浏览器浏览本网页</font></center>";  
else if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 7.0"))  
echo "<center><font color='#FFFFFF'>不建议使用IE浏览本网页，建议使用Chrome或Chrome内核浏览器浏览本网页</font></center>";  
else if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 6.0"))  
echo "<center><font color='#FFFFFF'>不建议使用IE浏览本网页，建议使用Chrome或Chrome内核浏览器浏览本网页</font></center>";  
?>
		<center><font color="#FFFFFF"><?php echo "$username" ?>欢迎您来到红井冈食品订单管理系统后台！如需帮助请<a href='../faq/FAQ.htm' target="_blank"/>点此</a>使用完成后请<a href='../common/loginout.php'>安全退出</a></font></center>
		<hr/>
		<div class="row">
		<div class="col-md-4">
			<h2>订单管理</h2>
        </div>
		<div class="col-md-4">
			<h2><a href="mail.php" target="_blank"/>管理员邮箱登陆</a></h2>
        </div>
		</div>
<?php
include_once "../info/info.php"
?>
		<div class="row">
		<div class="col-md-4">
			<h2>用户管理</h2>
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