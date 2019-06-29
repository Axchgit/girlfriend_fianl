<meta charset="utf-8" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<form name="logn"  method="post">
<body style="background:url(img/4.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">
<h1 class="div0">管理员登录</h1>
	<p><span class="sp1">用户名：</span><span class="sp2"><input name="user" type="text"  size="30"></span></p>
	<p><span class="sp1">密码：</span><span class="sp2"><input name="pwd" type="password" size="30"></span></p>
	<p><span class="sp3"><input name="dl" class="bt1" type="submit" value="登录"></span></p>
	</body>
</form>

<?php
		include 'conn/conn.php';

	
if(isset($_POST['dl'])){
	
	session_start();

	$u=$_POST['user'];
	$p=$_POST['pwd'];
		$_SESSION['admin']=$u;
    $sql="select a_name,pw from admin where a_name='{$u}' and pw='{$p}'";
    $result=$link->query($sql);
		
		if($result->rowCount()>0){echo "<script>alert('登录成功');document.location.href='daohang.php';</script>";}
		else{echo "<script>alert('登录不成功');document.location.href='admin_login.php';</script>";}
	
	
	
}

?>