<?php
include("header.php");
$query=mysqli_query($con,"select * from user_result");
echo "<div class='container wrapper'> <br/><br/><h2 style='text-align:center;color:white;'>Users Results.		</h2><br/><table class='ques' style='float:left'>";
echo "<tr><th>User Email-Id</th><th>Subject</th><th>Marks</th><th>Date-Quiz-Given</th></tr> ";
while($row=mysqli_fetch_assoc($query))
{
	echo "<tr><td class='bdown'>$row[email_id]</td><td class='bdown'>$row[subject]</td><td class='bdown'>$row[marks]%</td><td class='bdown'>$row[gdatetime]</td></tr>";
}
echo"<table><div id='piechart' style='width: 400px; height: 400px;float:right;border-radius:20px;'></div></div>";
?>