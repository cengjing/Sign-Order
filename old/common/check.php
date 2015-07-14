<?php
/* 文件名字: check.php */
/* 制作人:刘建涛 */
/* 修改时间: 2014-8-20 20:45:18 */
/* 功能介绍:验证用户是否登录 */
//在需要验证管理员身份的地方引用
//在引用本文件之前不能有任何形式的输出，建议在文档最开始出引用
session_start();
if ($_SESSION['username']==""){
	echo "<script language='javascript'>alert('您还没有登陆！');location='index.php';</script>";
}
$username=$_SESSION['username'];