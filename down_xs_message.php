<?php
		include 'conn/conn.php';
	$dt=date("Y-m-d-His",time());
	$a='student_data/'.$dt.'.xls';
	
	$sql='select * from student_message';
	$re=$link->query($sql);
	

    header("Content-type:application/vnd.ms-excel");  
    header("Content-Disposition:filename=$a");  
    $strexport="编号\t姓名\t学号\t性别\t班级\t联系方式\t工作岗位\t工资\t添加时间\r";
    foreach ($re as $row){  
	
        $strexport.=$row['id']."\t";   
        $strexport.=$row['name']."\t";  
        $strexport.=$row['sno']."\t";   
        $strexport.=$row['sex']."\t";      
        $strexport.=$row['class']."\t"; 
        $strexport.=$row['tel']."\t";
        $strexport.=$row['work']."\t";
        $strexport.=$row['price']."\t";             
        $strexport.=$row['date_time']."\r";  
		
    }  
    $strexport=iconv('UTF-8',"GB2312//IGNORE",$strexport);  
    exit($strexport);     



?>