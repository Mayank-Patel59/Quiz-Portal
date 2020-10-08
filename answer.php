<?php
session_start();
include("connect.php");
$r=0;
$w=0;
$na=0;
$get_answer=mysqli_query($con,"select * from quest where cat_id='".$_SESSION['catid']."' LIMIT 10");
while ($row=mysqli_fetch_assoc($get_answer))
 {
	if($row['ans']==$_POST[$row['id']])
		$r++;
	elseif ($_POST[$row['id']]=="NA")
		$na++;
	else
		$w++;
	}
	//echo $na;
	$t=$r+$w+$na;
	$ta=$r+$w;
	$p=round(($r*100)/$t);
	if(isset($p)&&isset($_SESSION['name'])&&isset($_SESSION['email'])){
	$q="select name from cat where cat_id='".$_SESSION['catid']."'";
	$cat_name=mysqli_query($con,$q);
	$fetch_name=mysqli_fetch_assoc($cat_name);
	$cname=$fetch_name['name'];
	$marks=mysqli_query($con,"insert into user_result values (NULL,'".$_SESSION['email']."','".$cname."',$p,now())");
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="my.css">
	<style type="text/css">
		td
		{
			padding: 10px;
			color: white;
			font-size:25px;
		}
	</style>
</head>
<body bgcolor="#36c24">
	<div class="nav" style="margin-top: 10px;">
<h1 style="text-align: center;color: white;"> Online Quiz </h1>
</div>

	<div class="container wrapper">
		<h1 style="color:white;text-align: center;margin-top: 5px;">YOUR RESULT</h1>
		<div class="result">
			<table>
				<tr><td>Total Questions     : </td><td><?php echo $t;?></td></tr>
				<tr><td>Total Attempted     : </td><td><?php echo $ta;?></td></tr>
				<tr><td>Total Not-Attempted : </td><td><?php echo $na;?></td></tr>
				<tr><td>Right Answers       : </td><td><?php echo $r;?></td></tr>
				<tr><td>Wrong Answers       : </td><td><?php echo $w;?></td></tr>
				<tr><td>Percentage          : </td><td><?php echo $p."%";?></td></tr>
				
			</table>
		</div><br/>
		<a href="welcome.php" style="text-decoration: none;padding: 5px;margin-left: 550px;background-color: green;color: white;width: 100px;">HOME</a>
	</div>

</body>
</html>