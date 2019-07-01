<meta charset="utf-8" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<body style="background:url(img/4.jpg); background-repeat:no-repeat;  background-size: 100%;">
<h1 class="div0">管理员信息</h1>
<form name="add" method="post" enctype="multipart/form-data">
	

	</body>
</form>
<link href="css/style.css" rel="stylesheet" type="text/css">
	
<html>
	<head>
		<meta charset="utf-8" />
		<title>管理员页面</title>
		<link href="css/navigation.css" rel="stylesheet" type="text/css">
	</head>
	<body >
			<hr>
	   
	</body>
</html>
<?php
include 'conn/conn.php';
include 'conn/verify_admin.php';

$sql1="select count(*) from admin";
$ps=$link->query($sql1);

$rows=$ps->fetchColumn(0);//获取总行数
//$rows=$ps->rowCount(); 
$pageSize=6; //每一页大小
$pageCount=(int)ceil($rows/$pageSize);
if(isset($_GET['p'])){
		$currentPage=$_GET['p'];
	}else{
		$currentPage=1;
	}
//$currentPage=1;
$first=($currentPage-1)*$pageSize;

$sql2="select * from admin order by id limit $first,$pageSize";

$ps2=$link->query($sql2);



//$result=$ps->fetchAll(pdo::fetch_num);

echo '<table class="ah" border=2><br><br></caption><tr><th>序号</th><th>用户名</th><th>密码</th></tr>';
foreach($ps2 as $arr){
	echo "<tr>
		<td align='center'>{$arr['id']}</td>

		<td align='center'>{$arr['a_name']}</td>

		<td align='center'>{$arr['pw']}</td>

		</tr>";
//		<td align='center'><a href='amend_xs.php?id={$arr['id']}'><button class='bt3' >修改</button></a> | <a href='delete_xs.php?id={$arr['id']} '><button class='bt3' >删除</button></a></td>
	
}
echo '</table>';

//分页
$pageUp=$currentPage-1;
$pageDn=$currentPage+1;
echo '<div class="ah">';
ECHO "<a style='width: 90%; background-color: beige;margin: 5px auto 5px auto;'>总记录数：{$rows}&nbsp;&nbsp;&nbsp;&nbsp;页码：{$currentPage}/{$pageCount}&nbsp;&nbsp;&nbsp;&nbsp;</a>";	
if($currentPage==1){
	echo "<button class='bt4' >首页</button> | <button class='bt4' >上一页</button> |"; 
}else{
    echo "<a href=admin_message.php?p=1><button class='bt3' >首页</button></a> | <a href=admin_message.php?p={$pageUp}><button class='bt3' >上一页</button></a> |";
	}
	
if($currentPage==$pageCount){	
	echo " <button class='bt4' >下一页</button> | <button class='bt4' >尾页</button>"; 
}else{
    echo " <a href=admin_message.php?p={$pageDn}><button class='bt3' >下一页</button></a> | <a href=admin_message.php?p={$pageCount}><button class='bt3' >尾页</button></a>";
	}
	
	echo '</div>'
?>
<br />

