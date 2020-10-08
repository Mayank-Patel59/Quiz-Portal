<?php
include("header.php");
$query=mysqli_query($con,"select * from user");
echo "<div class='container wrapper'> <br/><br/><h2 style='text-align:center;color:white;'>Registered Users.		</h2><br/><table class='ques' style='margin-left:200px;'>";
echo "<tr><th>Username</th><th>Email_id</th><th>Gender</th><th>Date-Created</th></tr> ";
while($row=mysqli_fetch_assoc($query))
{
	echo "<tr><td class='bdown'>$row[name]</td><td class='bdown'>$row[email_id]</td><td class='bdown'>$row[gender]</td><td class='bdown'>$row[date_created]</td></tr>";
}
echo"<table></div>";
?>