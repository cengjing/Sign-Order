<?php
/* �ļ�����: fromcheck.php */
/* ������:������ */
/* �޸�ʱ��: 2014-8-20 20:45:18 */
/* ���ܽ���:��֤��Դ�Ƿ�Ϊ��վ */
//��Դ��֤ҳ������Ҫ����Դ��ҳ�� include_once '../common/fromcheck.php';
if(PHP_VERSION<'4.1.0'){
	$_SERVER = $HTTP_SERVER_VARS;
	}  
if(isset($_SERVER["HTTP_REFERER"])){  
//��Բ��������������HTTP_REFERER,��������ôһ���ж�  
    $servername=$_SERVER['SERVER_NAME'];  
    $sub_from=$_SERVER["HTTP_REFERER"];  
    $sub_len=strlen($servername);  
    $checkfrom=substr($sub_from,7,$sub_len);  
    if($checkfrom!=$servername)  
    {  
        echo "<script language=��javascript��>window.alert('��Դ�����ţ�');window.opener=self;window.close();</script>";  
        exit;  
    }  
}  