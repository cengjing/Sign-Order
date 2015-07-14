<?php
/* 文件名字: fromcheck.php */
/* 制作人:刘建涛 */
/* 修改时间: 2014-8-20 20:45:18 */
/* 功能介绍:验证来源是否为本站 */
//来源验证页面在需要验来源的页面 include_once '../common/fromcheck.php';
if(PHP_VERSION<'4.1.0'){
	$_SERVER = $HTTP_SERVER_VARS;
	}  
if(isset($_SERVER["HTTP_REFERER"])){  
//针对部分浏览器可能无HTTP_REFERER,所以做这么一个判断  
    $servername=$_SERVER['SERVER_NAME'];  
    $sub_from=$_SERVER["HTTP_REFERER"];  
    $sub_len=strlen($servername);  
    $checkfrom=substr($sub_from,7,$sub_len);  
    if($checkfrom!=$servername)  
    {  
        echo "<script language=’javascript’>window.alert('来源不可信！');window.opener=self;window.close();</script>";  
        exit;  
    }  
}  