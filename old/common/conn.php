<?php
/* 文件名字: conn.php */
/* 制作人:刘建涛 */
/* 修改时间: 2014-8-20 20:45:18 */
/* 功能介绍:数据库连接操作 */
$host='localhost';//数据库服务器
$user='dd_jahjg_user';//数据库用户名
$password='JbfNJZhP7xnQuEs';//数据库密码
$database='dd_jahjg';//数据库名
$conn=@mysql_connect($host,$user,$password) or die('数据库连接失败！');
@mysql_select_db($database) or die('没有找到数据库！');
mysql_query("set names 'gb2312'");
if(is_file($_SERVER['DOCUMENT_ROOT'].'../360safe/360webscan.php')){
    require_once($_SERVER['DOCUMENT_ROOT'].'../360safe/360webscan.php');
} // 注意文件路径