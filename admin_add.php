<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<body style="background:url(img/4.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">
<h1 class="div0">管理员注册</h1>
<hr>
<form name="addly" method="post">
	<body style="background:url(img/login_bg.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">
	<span class="sp1">用户名:</span>
	<span class="sp2"><input type="text" name="a_name"  required size="50"> </span></br>
	<span class="sp1">密码:</span>
	<span class="sp2"><input type="password" name="pw"  required size="50> </span></br>
	<p  align="center"><span style="width: 500px; text-align: center;"></br><input class="bt1" name="add" type="submit" value="注册"></span></p>
	
</form>
	
	
<?php
include 'conn/conn.php';
include 'conn/verify_admin.php';
if(isset($_POST['add'])){
	$t=$_POST['a_name'];
	$c=$_POST['pw'];	
  $link->query("insert into admin(a_name,pw) values('$t','$c')");
//	$link->close();
echo "<script>alert('注册成功');document.location.href='admin_message.php';</script>";
//header('location:admin_login.php');
//  
}
?>