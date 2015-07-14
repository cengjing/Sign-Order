<?php
include_once '../common/admincheck.php';
include_once '../common/conn.php';
$title = "管理员邮箱登陆";//当前页标题
include_once '../common/header.php';
?>
<body>
<h1>账号：mail密码：hong0401</h1>
<script type="text/javascript" src="http://exmail.qq.com/zh_CN/htmledition/js_biz/outerlogin.js"  charset="gb18030"></script>
<script type="text/javascript">
writeLoginPanel({domainlist:"jahjg.cn", mode:"vertical"});
</script>
<?php
include_once '../common/footer.php';
?>
</body>
</html>