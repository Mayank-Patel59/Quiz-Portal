<?php
session_start();
include("../connect.php");
if(!isset($_SESSION['admin']))
{
	header("location:../index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Subject', 'Percentage'],
          <?php
     //include("connect.php");
     //$con=mysqli_connect("localhost","root","","quizzz") or die("Could not Connect My Sql");
      $stats=mysqli_query($con,"select subject,count(*) as number FROM user_result GROUP BY subject");
while($s=mysqli_fetch_array($stats))
{
  echo "['".$s['subject']."',".$s['number']."],";
}
?>]);

        var options = {
          title: 'Subjects Percentage'
};
       var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<style type="text/css">
	.able
	{
		width: 650px;
	padding: 8px;
		margin-left: 180px;
		border :2px solid white;
		border-radius: 15px;
		color: white;

	}
		input[type=text]
		{
    width: 500px;
    color:black;
    border:1px solid orange;
    padding: 4px;
    font-size: 18px;
    }
    .idd
    {
    	height: 60px;
    }
    .add
    {
    	width: 100px;height:30px;color: white;background-color: green;margin-left: 450px;
    }
    .ques
	{
	    padding: 8px;
		border :2px solid white;
		border-radius: 15px;
		color: white;

	}
	.bdown
	{
		border-bottom: 1px solid white;
		padding: 4px;
	}
	th
	{
		padding: 4px;
		border-bottom: 1px solid white;
	}
	</style>
</head>
<body bgcolor="#36c24">
	<div class="container wrapper">
<div class="container wrapper" style="margin-top: 10px;">
<div class="nav">
	<a style="float: right;color:white;text-decoration: none;margin-right: 30px;margin-top: 30px;height:20px;width:100px;border:1px solid white;border-radius: 10px" href="../logout.php">LogOut</a>
<h1 style="text-align: center;color: white;padding: 18px;">Online Quiz Portal - Admin Panel</h1>

</div>
<br/>
<ul>
		<li><a href="welcomeadmin.php">Add Questions</a></li>
	    <li><a href="del_ques.php">Delete Questions</a></li>
	    <li><a href="addcat.php">Add Category</a></li>
	    <li><a href="del_cat.php">Delete Category</a></li>
	    <li><a href="view_users.php">View Users</a></li>
	    <li><a href="view_users_results.php">View User Results</a></li>
	    
	</ul>