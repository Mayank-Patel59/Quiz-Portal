<?php
include("../connect.php");
$query=mysqli_query($con,"delete from quest where id='".$_GET['delete']."'");
if($query)
{
	echo "<script language='javascript'>
				alert('Question Deleted')
				window.location.assign('del_ques.php')
			</script>";		
		
}

?>