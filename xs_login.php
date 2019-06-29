<meta charset="utf-8" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<body style="background:url(img/4.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">
<form name="logn"  method="post">
<h1 class="div0">学生登录</h1>
	<p><span class="sp1">学号：</span><span class="sp2"><input name="a_name" type="text"  size="50"></span></p>
	<p><span class="sp1">密码：</span><span class="sp2"><input name="pw" type="password" size="50"></span></p>
	<p><span class="sp3"><input name="dl" class="bt1" type="submit" value="登录"></span></p>
</form>
</body>

<?php
	
	
if(isset($_POST['dl'])){
	
     session_start();
	include 'conn/conn.php';
	$u=$_POST['a_name'];
	$p=$_POST['pw'];
		$_SESSION['usname']=$u;
    $sql="select sno,password from student_message where sno='{$u}' and password='{$p}'";
  
    $result=$link->query($sql);
	if($result->rowCount()>0){
		echo "<script>alert('登录成功');document.location.href='xs_message_self.php';</script>";
	}else{
		echo "<script>alert('登录不成功');document.location.href='xs_login.php';</script>";}
}

?>