<?php
include("header.php");
echo "<br/><br/><br/><form method='post' action='addcat.php' id='adcat'><div class='container wrapper' >
<div style='color:white;margin-left:200px;'>
Enter Subject Name : <input type='text' name='cat'><br/><br/>
<button class='add' type='submit' name='submit' >ADD</button>
</form>
</div></div>";
if(isset($_POST['submit']))
{
$query=mysqli_query($con,"insert  into cat values (NULL,'".$_POST['cat']."')");
	if($query)
	{
		echo "<script language='javascript'>
				alert('Category Added')
				window.location.assign('addcat.php')
			</script>";		
	
	}
}
?>
