<?php
include 'conn/conn.php';
$a=$_GET['id'];
$sql='delete from student_message where id='.$a;

$link->query($sql);
header('location:xs_list.php');
?>