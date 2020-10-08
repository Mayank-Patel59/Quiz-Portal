<?php
include("header.php");
echo "<br/><div class='container wrapper'><h2 style='text-align:center;color:white;'>Categories/Subject</h2><br/>";
echo "<table class='ques' style='margin-left:450px;' >";
echo "<tr><th>Subject</th></tr>";
 $query=mysqli_query($con,"select * from cat");
while($row=mysqli_fetch_assoc($query))
{
echo"<tr><td class='bdown'>$row[name]</td><td class='bdown'><a href='delc.php?delcat=$row[cat_id]'>Delete</a></td></tr> ";
}
echo"</table></div>";
	
?>
