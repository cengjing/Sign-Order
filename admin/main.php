<?php

include_once '../common/admincheck.php';

include_once '../common/conn.php';

$title = "管理员后台";//当前页标题

include_once '../common/header.php';

?>

<body>

<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>红井冈食品</strong> <small>订单系统——管理员后台</small>
  </div>
	<div class="am-collapse am-topbar-collapse" id="topbar-collapse">
		<ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
			<li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 消息 <span class="am-badge am-badge-warning">N</span></a></li>
			<li class="am-dropdown" data-am-dropdown>
			<a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
				<span class="am-icon-users"></span> <?php echo "$username" ?> <span class="am-icon-caret-down"></span>
			</a>
        <ul class="am-dropdown-content">
          <li><a href="../control/userupdate.php"><span class="am-icon-user"></span> 修改资料</a></li>
          <li><a href="../common/loginout.php"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
		</li>
			<li><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
		</ul>
	</div>
</header>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <div class="admin-sidebar">
    <ul class="am-list admin-sidebar-list">
      <li><a href="../admin/main.php"><span class="am-icon-home"></span> 首页</a></li>
	  <li><a href="#"><span class="am-icon-user"></span> 用户管理</a></li>
	  <li><a href="mail.php" target="_blank"><span class="am-icon-puzzle-piece"></span> 邮箱登陆</a></li>
    </ul>
    <div class="am-panel am-panel-default admin-sidebar-panel">
      <div class="am-panel-bd">
        <p><span class="am-icon-bookmark"></span> 公告</p>
        <p>无法提交订单问题已经处理，现已可以正常使用。—— 技术部</p>
        <p>UI正在大规模改动中。—— 技术部</p>
        <p>管理员请重新录入相关订单信息。—— 技术部</p>
      </div>
    </div>
  <!-- sidebar end -->
  <!-- content start -->
  <div class="admin-content">
	<div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>订单概览</small></div>
    </div>
<?php
include_once "../info/info.php"
?>
<hr>
	<div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>用户管理</small></div>
    </div>
<?php

include_once "userinfo.php"

?>



</div>

</div>

</div>
<?php

include_once '../common/footer.php';

?>

</body>

</html>