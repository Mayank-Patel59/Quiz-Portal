<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="my.css">
	<style type="text/css">
		td
		{
			padding: 3px;
		}
		.error
		{
			color: red;
		}
	</style>
</head>
<body bgcolor="#36c24">
	<?php
	include "connect.php";	
	$fne=$lne=$ee=$pe=$cpe=" ";
	$fname=$lname=$email="";
	$v=1;
if(isset($_POST['Register']))
{
	
 $fname = trim($_POST['fname']);
 $lname=trim($_POST['lname']);
 $email = trim($_POST['em']);
 $gender=trim($_POST['gender']);
 $pass = trim($_POST['password']);
 $cpass = trim($_POST['cpassword']);
 if (!preg_match("/^[a-zA-Z ]*$/",$fname)) 
 {
 	$v=0;
  $fne = "Only letters and white space allowed"; 
 }
 if (!preg_match("/^[a-zA-Z ]*$/",$lname)) 
 {
 	$v=0;
  $lne = "Only letters and white space allowed"; 
 }
if(!preg_match("/^[_.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+.)+[a-zA-Z]{2,6}$/i", $email))
 {
 	$v=0;
  $ee = "not valid email !";
 }
 if(strlen($pass) >=11)
 {
 	$v=0;
  $pe = " max 10charcaters !";
 }
 
 if($v==1)
 {
 	$name=$fname." ".$lname;
        $get_email=mysqli_query($con,"select * from user where email_id='".$email."'");
		$valid=mysqli_num_rows($get_email);
		
		
		if($valid > 0)
		{
		echo "<script language='javascript'>
				alert('Error :- Email-ID already exist plz change user id.')
				window.location.assign('Register.php')
			</script>";		
		}
		else
		{
			
		$query = "insert into user values('".$email."','".$name."','".$gender."','".$pass."',now())";
			$register=mysqli_query($con,$query) or die ("Error in query");
				echo "<script language='javascript'>
				alert('Sucessfully Registered')
				window.location.assign('index.php')
			</script>";		
		
			}
 }
}
?>

	<div class="container wrapper" style="margin-top: 10px;">
<div class="nav">
<h1 style="text-align: center;color: white;padding: 18px;">Online Quiz Portal</h1>
</div>
<form action="Register.php" method="post">
<table class="reg">
	<tr><td style="color: white;font-size: 25px;text-align: center;">REGISTRATION FORM  </td>
	</tr>
<tr><td><label class="heading">FirstName</label><br/><input type="text" name="fname" value="<?php echo $fname;?>" required><span class = "error"><?php echo $fne;?></span></td></tr>
	<tr><td><label class="heading">LastName</label><br/><input type="text" name="lname" value="<?php echo $lname;?>" required><span class = "error"><?php echo $lne;?></span></td></tr>
	<td><label class="heading">Email-id</label><br/><input type="text" name="em" value="<?php echo $email;?>"required><span class = "error"><?php echo $ee;?></span></td></tr>
	<tr><td><label class="heading">Gender</label><br/>
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>
 value="male"> Male<br>
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>
 value="female"> Female<br>
    </td></tr>
	<tr><td><label class="heading">Password</label><br/><input type="password" name="password" required><span class = "error"><?php echo $pe;?></span></td></tr>
	<tr><td><label class="heading"> Confirm Password</label><br/><input type="password" name="cpassword" required><span class = "error"><?php echo $cpe;?></span></td></tr>
	<tr><td><button class="button" name="Register">Register</button></td></tr>
</table>
<br/>

</form>
</div>
</body>
</html>