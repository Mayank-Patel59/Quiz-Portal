<?php 
session_start();
extract($_SESSION);
include("connect.php");
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
		padding: 10px;
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

<div class="container wrapper" style="height: 460px;border:1px solid white;border-radius: 20px;margin-top:20px;">
	<h2 style="color: white;margin-top: 5px;padding: 5px;">Welcome <?php echo " ".$_SESSION['name']." !" ?></h2>
	<h2 style="color: white;text-align: center;margin-top: 5px;">INSTRUCTIONS</h2><br/>
	<div class="instructions">
		<table class="itable">
			<tr><td>*This is MCQ based Quiz</td></tr>
			<tr><td>*User has to select one option from the given four options</td></tr>
			<tr><td>*Time given for the quiz is 5 mins.</td></tr>
			<tr><td>*Select The Subject and click on Start Quiz.</td></tr>
			
		</table>
	</div>
	<br/>
	<h2 style="color: white;text-align: center;"> Select Subject</h2><br/>
	<form action="quiz.php" method="post">
		<select class="styled-select" name="cat"><option selected="true" disabled="disabled">Select Subject</option>
	<?php 
	$cat_rows = mysqli_query($con, "select * from cat");
	while($row=mysqli_fetch_array($cat_rows)){?>
	<option value="<?php echo $row['cat_id']; ?>"><?php echo $row['name']; ?></option>
	<?php } ?> 
    </select><br/>
    <br/>

	<button name="submit" style="width: 100px;height:30px;color: white;background-color: green;margin-left: 500px;">START QUIZ</button>

</form>
</div>
</body>
</html>