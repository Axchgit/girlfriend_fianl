<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<body style="background:url(img/4.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">
<h1 class="div0">管理员密码修改</h1>
<hr>
<form name="addly" method="post">
	<body style="background:url(img/login_bg.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">
	
	<span class="sp1">密码:</span>
	<span class="sp2"><input type="password" name="pw"  required size="50> </span></br>
	<p  align="center"><span style="width: 500px; text-align: center;"></br><input class="bt1" name="add" type="submit" value="提交"></span></p>
	
</form>
	
	
<?php
include 'conn/conn.php';
include 'conn/verify_admin.php';

if(isset($_POST['add'])){
	$c=$_POST['pw'];
	$id=$_SESSION['admin'];	
$sql1="update admin set pw='$c' where a_name='$id'";
	$ps = $link->query($sql1);
	if($ps->rowCount()>0){
	echo  "<script>alert('修改成功');document.location.href='admin_message.php' ;</script>";
	}else{
		echo  "<script>alert('修改失败');document.location.href=amend_adpw.php';</script>";
	} 
}
?>