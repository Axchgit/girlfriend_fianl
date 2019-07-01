<meta charset="utf-8" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<body style="background:url(img/4.jpg); background-repeat:no-repeat;  background-size: 100%;">
<h1 class="div0">修改学生信息 </h1>
<form name="add" method="post" enctype="multipart/form-data">
	<p><span class="sp1">班级：</span><span class="sp2"><input name="class" type="text" ></span></p>
	<p><span class="sp1">联系方式：</span><span class="sp2"><input name="tel" type="&nbsp;" ></span></p>
	
	<p><span class="sp1">登录密码</span><span class="sp2"><input name="pw" type="password"  ></span></p>
	<p><span class="sp1">工作岗位：</span><span class="sp2"><input name="work" type="text" ></span></p>
	<p><span class="sp1">工资：</span><span class="sp2"><input name="price" type="text" ></span></p>
	<p><span class="sp1">入职时间：</span><span class="sp2"><input name="time" type="date" ></span></p>
	
	<p><span class="sp3"><input name="tj" class="bt1" type="submit" value="确认"></span></p>
	
	</body>
</form>

	
<?php
include 'conn/conn.php';
include 'conn/verify_admin.php';

	
if(isset($_POST['tj'])){	
	$cl=$_POST['class'];
	$te=$_POST['tel'];
	$pw=$_POST['pw'];
	$wo=$_POST['work'];
	$pr=$_POST['price'];
	$time=$_POST['time'];
	$id=$_GET['id'];
	
	$sql1="update student_message set class=:e,tel=:f,password=:g,work=:h,price=:i,date_time=:j where id=$id";
	$ps = $link->prepare($sql1);
	$ps->bindParam("e",$cl);
	$ps->bindParam("f",$te);
	$ps->bindParam("g",$pw);
	$ps->bindParam("h",$wo);
	$ps->bindParam("i",$pr);
	$ps->bindParam("j",$time);
	$ps->execute();
	if($ps->execute()){
	echo  "<script>alert('修改成功');document.location.href='xs_list.php';</script>";
	}else{
		echo  "<script>alert('修改失败');document.location.href='xs_list.php';</script>";
	} 
  }

?>