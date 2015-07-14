<?php
session_start();
if(!$_SESSION['username']){
    include_once 'login.php';
}else{
	header("Location: main.php");
}
exit;