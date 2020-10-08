<?php
include("../connect.php");
$query=mysqli_query($con,"insert  into cat values (NULL,'".$_POST['cat']."')");
//$stats=mysqli_query($con,"insert into stats (subject)values('".$_POST['cat']."')");
	if($query)
	{
		echo "<script language='javascript'>
				alert('Category Added')
				window.location.assign('del_ques.php')
			</script>";		
	
	}
?>