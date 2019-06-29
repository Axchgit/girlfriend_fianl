<?php
$sjy="mysql:host=127.0.0.1;dbname=gzxt";	
try{
	$link=new PDO($sjy,'root','');
}catch(PDOException $e){
	echo "<script>alert('数据库连接失败。');</script>";
	return;
}
$link->query("set names utf8");

?>