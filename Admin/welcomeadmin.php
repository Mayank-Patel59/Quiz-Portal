<?php include("header.php");?>
</div>
<br/>
<br/>
<div class="container wrapper">
	<form  method="Post" action="add_q.php" id="form2">
	<table class="able">
		<tr><td class="idd">Question :</td><td class="idd"><input type="text" name="q" placeholder="Enter Question" required> </td></tr>
		<tr><td class="idd">Option 1 :</td><td class="idd"><input type="text" name="op1" placeholder="Enter Option 1" required></td></tr>
		<tr><td class="idd">Option 2 :</td><td class="idd"><input type="text" name="op2" placeholder="Enter Option 2." required></td></tr>
		<tr><td class="idd">Option 3 :</td><td class="idd"><input type="text" name="op3" placeholder="Enter Option 3." required></td></tr>
		<tr><td class="idd">Option 4 :</td><td class="idd"><input type="text" name="op4" placeholder="Enter Option 4." required></td></tr>
		<tr><td>Select Answer :</td><td><select name="ans" class="styled-select">
			<option selected="true" disabled="disabled">Select Answer</option>
			<option value="0">Option 1</option>
			<option value="1">Option 2</option>
			<option value="2">Option 3</option>
			<option value="3">Option 4</option>
			
		</select></td></tr>
		<tr><td class="idd">Category :</td><td class="idd"><select  class="styled-select" name="cat" required><option selected="true" disabled="disabled">Select Subject</option>
	<?php 
	$cat_rows = mysqli_query($con, "select * from cat");
	while($row=mysqli_fetch_array($cat_rows)){?>
	<option value="<?php echo $row['cat_id']; ?>"><?php echo $row['name']; ?></option>
	<?php } ?></select></td></tr>
	</table>
	<br/>
	<button class="add" type="submit" >ADD</button>
	</form>
	</div>
	
</body>
</html>