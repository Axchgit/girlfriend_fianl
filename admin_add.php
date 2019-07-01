<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<body style="background:url(img/4.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">
<h1 class="div0">添加管理员</h1>
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
//	$sql1="insert into admin(a_name,pw) values('$t','$c')";
//	$sql2="select sno from student_message group by sno having count(*)>1";
//$link->query($sql1);
//
  	$sql="insert into admin(a_name,pw) values(:a,:b)";
	$sql2="select a_name from admin group by a_name having count(*)>1";
	$link->beginTransaction();
	$ps=$link->prepare($sql);
	$ps->bindParam("a",$t);
	$ps->bindParam("b",$c);
	
		$re=$link->query($sql2);
	if($re->rowCount()>0){
		$link->rollback();
		echo  "<script>alert('管理员已存在，请重新添加');document.location.href='admin_add.php';</script>";
	}else{
		$ps->execute();
		$link->commit();
		echo  "<script>alert('添加成功');document.location.href='admin_message.php';</script>";
		}
	
//	$link->close();
//echo "<script>alert('注册成功');document.location.href='admin_message.php';</script>";
//header('location:admin_login.php');
//  
}
?>