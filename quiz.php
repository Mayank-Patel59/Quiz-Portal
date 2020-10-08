<?php
session_start();
include("connect.php");
if(!isset($_POST['cat']))
header("location:welcome.php");
$_SESSION['catid']=$_POST['cat'];


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="my.css">
<style type="text/css">
	td
	{
		padding: 5px;
	}
</style>
<script type="text/javascript">
	function timeout()
	{
		var minute=Math.floor(timeLeft/60);
		var second=timeLeft%60;
		if(timeLeft<=0)
		{
			clearTimeout(tm);
			document.getElementById("quizform").submit();
		}
		else
		{
			document.getElementById("time").innerHTML="TimeLeft : "+minute+":"+second;
		}
		timeLeft--;
		var tm=setTimeout(function() {timeout()}, 1000);
	}
</script>

</head>
<body bgcolor="#36c24" onload="timeout()">
<div class="container wrapper">
	<h1 style="color:white;text-align: center;margin-top: 5px;"> ONLINE QUIZ </h1><br/><br/>
	<script type="text/javascript">
		var timeLeft= 5*60;
	</script>
	
	<div id="time" style="float: right;color: white;font-size: 20px;margin-right: 100px;margin-bottom: 10px;border-radius: 2px;border:2px solid white;padding: 2px;">TimeOUT</div><br/>
	<form id="quizform" action="answer.php" method="post">
	<?php
	$ques=mysqli_query($con,"select * from quest where cat_id='".$_POST['cat']."' LIMIT 10");
	#$opt=mysqli_fetch_assoc($ques);
	$i=1;
	while($row=mysqli_fetch_assoc($ques))
	{
		//$opts=array($row['ans'],$row['op1'],$row['op2'],$row['op3']);
		//shuffle($opts);?>
		<table style="color:white;
 	border-radius: 15px;
 	border:2px solid white;width: 1000px;padding: 12px;">
 	<tr><td style="border-bottom: 2px solid white;padding: 5px;"><?php echo $i."] ".$row['q']; ?> </td></tr>
 	<?php if(isset($row['op1'])) {?>
	<tr><td><input type="radio" value="0" name="<?php echo $row['id'];?>"> <?php echo $row['op1'];?>
	<br/>	</td></tr>
	<?php } ?>
	<?php if(isset($row['op2'])) {?>
	<tr><td><input type="radio" value="1" name="<?php echo $row['id'];?>"> <?php echo $row['op2'];?>
		</td></tr>
		<?php } ?>
		<?php if(isset($row['op3'])) {?>
	<tr><td><input type="radio" value="2" name="<?php echo $row['id'];?>"> <?php echo $row['op3'];?>
		</td></tr>
		<?php } ?>
		<?php if(isset($row['op4'])) {?>
	<tr><td><input type="radio" value="3" name="<?php echo $row['id'];?>"> <?php echo $row['op4'];?>
		</td></tr>
		<tr><td><input type="radio" checked="checked" style="display: none;" value="NA" name="<?php echo $row['id'];?>">
			</td></tr>
		<?php } ?>
		</table>
		<br/>
		<br/>
		
	<?php $i++;} ?>


<center>	<input style="text-decoration: none;padding: 5px;background-color: green;color: white;" type="submit" value="FINISH"></center>
</form>
</div>
</body>
</html>