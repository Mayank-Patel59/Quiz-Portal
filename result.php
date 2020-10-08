<?php
include("connect.php");
session_start();
if(!isset($_SESSION['email']) && !isset($_SESSION['name']))
{
	header("location:index.php");
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
			padding: 5px;
			border-bottom: 2px solid white;
			

		}
		th
		{
			padding: 5px;
			border-bottom: 2px solid white;


		}
		table
		{
			color: white;
			border:2px solid white;
			border-radius: 15px;
			padding: 5px;

		}
	</style>
</head>
<body bgcolor="#36c24">
	<div class="nav" style="margin-top: 10px;">
<h1 class="nav-cap">Online Quiz</h1>
<ul>
	<li><a href="logout.php">LogOut</a></li>
	<li><a href="result.php">My Results</a></li>
	<li><a href="welcome.php">Home</a></li>
</ul>
</div>

<h2 style="text-align: center;color: white;padding: 18px;">Results of <?php echo $_SESSION['name']."!";?></h2>
<center><table>
	<tr><th>Subject</th><th>Marks</th><th>Given Date Time</th></tr>
	<?php $sql=mysqli_query($con,"select * from user_result where email_id='".$_SESSION['email']."'");
	while($row=mysqli_fetch_assoc($sql))
	{
		echo "<tr><td>".$row['subject']."</td><td>".$row['marks']."%</td><td>".$row['gdatetime']."</td></tr>";
	} ?>

</table></center>



</body>
</html>
