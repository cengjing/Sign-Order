<?php
/* 文件名字: conn.php */
/* 制作人:刘建涛 */
/* 修改时间: 2014-8-20 20:45:18 */
/* 功能介绍:数据库连接操作 */
$host='localhost';//数据库服务器
$user='username';//数据库用户名
$password='password';//数据库密码
$database='dbname';//数据库名
$conn=@mysql_connect($host,$user,$password) or die('数据库连接失败！');
@mysql_select_db($database) or die('没有找到数据库！');
mysql_query("set names 'utf-8'");