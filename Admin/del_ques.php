<?php
include("header.php");
echo "<br/><div class='container wrapper'>";
echo "<table class='ques'>";
echo "<tr><th>Question</th><th>Answer</th><th>Option 1</th><th>Option 2</th><th>Option 3</th><th>Category</th></tr>";
 $query=mysqli_query($con,"select * from quest INNER JOIN cat ON quest.cat_id=cat.cat_id");
while($row=mysqli_fetch_assoc($query))
{
echo"<tr><td class='bdown'>$row[q]></td><td class='bdown'>$row[op1]</td><td class='bdown'>$row[op2]</td><td class='bdown'>$row[op3]</td><td class='bdown'>$row[op4]</td><td class='bdown'>$row[ans]></td><td class='bdown'>$row[name]</td><td class='bdown'><a href='del.php?delete=$row[id]'>Delete</a></td></tr> ";
}
echo"</table></div>";
?>
