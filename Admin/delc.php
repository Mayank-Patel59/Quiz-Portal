<?php 
include("../connect.php");
$query=mysqli_query($con,"delete from cat where cat_id='".$_GET['delcat']."'");
	if($query)
	{
		echo "<script language='javascript'>
				alert('Category Deleted')
				window.location.assign('del_cat.php')
			</script>";		
	
	}
	?>