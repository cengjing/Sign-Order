<?php
/* 文件名字: loginout.php */
/* 制作人:刘建涛 */
/* 修改时间: 2014-8-20 20:45:18 */
/* 功能介绍:退出登录模块 */
session_start();
$_SESSION['username']="";
echo "<script language='javascript'>alert('您已成功退出该系统！');location='../index.php';</script>";
?>