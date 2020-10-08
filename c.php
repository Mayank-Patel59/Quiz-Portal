<?php 
print_r($_POST);
session_start();
include("connect.php");
$r=0;
$w=0;
$na=0;
$get_answer=mysqli_query($con,"select * from quest where cat_id='".$_SESSION['catid']."' LIMIT 10");
while ($row=mysqli_fetch_assoc($get_answer))
 {
 	echo $row['ans'];
 	echo "<br/>";
	echo $_POST[$row['id']];
	echo "<br/>";
		
	if($row['ans']==$_POST[$row['id']]){
		//echo $row['ans'];
		//echo $_POST[$row['id']];
		$r++;
	}
	elseif ($_POST[$row['id']]=="NA")
	{
		$na++;
	}
	else
	{
		$w++;
	}
	} ?>