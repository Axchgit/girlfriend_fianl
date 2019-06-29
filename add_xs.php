<meta charset="utf-8" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<body style="background:url(img/4.jpg); background-repeat:no-repeat;  background-size: 100%;">
<h1 class="div0">添加学生信息 </h1>
<form name="add" method="post" enctype="multipart/form-data">
	
	<p><span class="sp1">姓名：</span><span class="sp2"><input name="name" type="text"  ></span></p>
	<p><span class="sp1">学号：</span><span class="sp2"><input name="sno" type="text" ></span></p>
	<p>	<span class="sp1">性别：</span><input id="a" type="radio" name="sex" value="man" />	<label for="a">男</label>&nbsp;
<input id="b" type="radio" name="sex" value="wm" />	<label for="b">女</label>	</p>
	<p>	<span class="sp1">头像：</span>	<input type="file" name="myfile" >	</p>
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
include  'conn/verify_admin.php';
if(isset($_POST['tj'])){
	$n=$_POST['name'];
	$sn=$_POST['sno'];
	$se=$_POST['sex'];	
	$cl=$_POST['class'];
	$te=$_POST['tel'];
	$pw=$_POST['pw'];
	$wo=$_POST['work'];
	$pr=$_POST['price'];
	$time=$_POST['time'];
	
	if($se=='man')
		{
			$se="男";
		}
		else
		{
			$se="女";
		}
	//文件上传
	$arr = $_FILES['myfile'];
	$arr['tmp_name'];
	$filename = "img/".$arr['name'];
	move_uploaded_file($arr['tmp_name'],$filename);
	
	
	$sql="insert into student_message(name,sno,sex,picture,class,tel,password,work,price,date_time) values(:a,:b,:c,:d,:e,:f,:g,:h,:i,:j)";
	$sql2="select sno from student_message group by sno having count(*)>1";
	$link->beginTransaction();
	$ps=$link->prepare($sql);
	$ps->bindParam("a",$n);
	$ps->bindParam("b",$sn);
	$ps->bindParam("c",$se);
	$ps->bindParam("d",$filename);
	$ps->bindParam("e",$cl);
	$ps->bindParam("f",$te);
	$ps->bindParam("g",$pw);
	$ps->bindParam("h",$wo);
	$ps->bindParam("i",$pr);
	$ps->bindParam("j",$time);

	
	//$sql="insert into tb_bookinfo(barcode,bookname,author,ISBN,price,inTime,borrowtimes) values('{$tm}','{$sm}','{$zz}','{$sh}',{$dj},'{$rk}',{$jc})";
	//$jg=$link->exec($sql);
	//echo $jg;
	$re=$link->query($sql2);
	if($re->rowCount()>0){
		$link->rollback();
		echo  "<script>alert('学号已存在，请重新添加');document.location.href='add_xs.php';</script>";
	}else{
		$ps->execute();
		$link->commit();
		echo  "<script>alert('添加成功');document.location.href='xs_list.php';</script>";
		}
	
}

?>

<?php

?>