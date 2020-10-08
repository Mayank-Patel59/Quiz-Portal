<?php
include("../connect.php");
extract($_POST);
$ques=htmlentities($q);
$opt1=htmlentities($op1);
$opt2=htmlentities($op2);
$opt3=htmlentities($op3);
$opt4=htmlentities($op4);
$ans=$ans;
$catt=$cat;
$query=mysqli_query($con,"insert into quest values(NULL,'".$ques."','".$opt1."','".$opt2."','".$opt3."','".$opt4."',$ans,$catt)");
if($query)
{
	echo "<script language='javascript'>
				alert('Question Successfully Added')
				window.location.assign('welcomeadmin.php')
			</script>";		
		
}
else
{
	echo "<script language='javascript'>
				alert('Error in query.')
				window.location.assign('welcomeadmin.php')
			</script>";		
	
}





?>