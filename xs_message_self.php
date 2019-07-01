<meta charset="utf-8" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<body style="background:url(img/4.jpg); background-repeat:no-repeat;  background-size: 100%;">
<h1 class="div0">学生信息 </h1></body>
<html>
	<form name="add" method="post" enctype="multipart/form-data">
		<link href="css/style.css" rel="stylesheet" type="text/css">
	<head>
		<meta charset="utf-8" />
		<title>学生信息</title>
		<link href="css/navigation.css" rel="stylesheet" type="text/css">
	</head>
	<hr>
		
	</form>	
</html>
<?php
include 'conn/conn.php';
include 'conn/verify_xs.php';
	$a=$_SESSION['usname'];

$sql1="select count(*) from student_message";
$ps=$link->query($sql1);
$sql2="select * from student_message where sno='$a'";
$ps2=$link->query($sql2);
       echo '<table class="ah" border=2><br><br></caption><tr><th>序号</th><th>头像</th><th>姓名</th><th>学号</th><th>性别</th><th>班级</th><th>联系方式</th><th>密码</th><th>工作岗位</th><th>工资</th><th>入岗时间</th><th>操作</th></tr>';
foreach($ps2 as $arr){
	echo "<tr>
		<td align='center'>{$arr['id']}</td>
		<td align='center' >
		<img align='center' width='100px'height='80px'   src='$arr[picture]' /></td>
		<td align='center'>{$arr['name']}</td>
		<td align='center'>{$arr['sno']}</td>
		<td align='center'>{$arr['sex']}</td>
		<td align='center'>{$arr['class']}</td>
		<td align='center'>{$arr['tel']}</td>
		<td align='center'>{$arr['password']}</td>
		<td align='center'>{$arr['work']}</td>
		<td align='center'>{$arr['price']}</td>
		<td align='center'>{$arr['date_time']}</td>
		<td align='center'><a href='xs_amend_self.php?id={$arr['id']}'><button class='bt3' >修改信息</button></a></tr>";
	
}
echo '</table>';
echo '</div>';
?>

<a href='xs_logout.php?id={$arr['id']}'><button class='bt3' >退出登录</button></a> 