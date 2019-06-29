<?php
	session_start();
	if(!isset($_SESSION['usname'])){
		echo "<script>alert('您还没有登录。');document.location.href='xs_login.php';</script>";
		//header("location:login.php");
	}else{unset($_SESSION['user']);
$_SESSION=array();
session_destroy();
header("location:xs_login.php");}




?>