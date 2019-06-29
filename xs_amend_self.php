<meta charset="utf-8" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<body style="background:url(img/4.jpg); background-repeat:no-repeat;  background-size: 100%;">
<h1 class="div0">修改信息 </h1>
<?php include'conn/verify_admin.php' ?>
<form name="add" method="post" enctype="multipart/form-data">
	<p><span class="sp1">班级：</span><span class="sp2"><input name="class" type="text" ></span></p>
	<p><span class="sp1">联系方式：</span><span class="sp2"><input name="tel" type="&nbsp;" ></span></p>
	
	<p><span class="sp1">登录密码</span><span class="sp2"><input name="pw" type="password"  ></span></p>

	
	<p><span class="sp3"><input name="tj" class="bt1" type="submit" value="确认"></span></p>
	
	</body>
</form>

<?php
include 'conn/conn.php';

	
if(isset($_POST['tj'])){
	$cl=$_POST['class'];
	$te=$_POST['tel'];
	$pw=$_POST['pw'];
	$id=$_GET['id'];
    $sql1="update student_message set class=:e,tel=:f,password=:g where id=$id";
	$ps = $link->prepare($sql1);
	$ps->bindParam("e",$cl);
	$ps->bindParam("f",$te);
	$ps->bindParam("g",$pw);
	$ps->execute();
	if($ps->execute()){
	echo  "<script>alert('修改成功');document.location.href='xs_message_self.php';</script>";
	}else{
		echo  "<script>alert('修改失败');document.location.href='xs_message_self.php';</script>";
	}
  }

?>