<?php	
	
		include "connect.php";	
		extract($_POST);
		$name=trim($fname)." ".trim($lname);
		$email_id=trim($em);
		$gen=$gender;
		$psw=trim($password);
		#$date = date('m/d/Y h:i:s');
		$get_email=mysqli_query($con,"select * from user where email_id='".$email_id."'");
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
			
		$query = "insert into user values('".$email_id."','".$name."','".$gen."','".$psw."',now())";
			$register=mysqli_query($con,$query) or die ("Error in query");
				echo "<script language='javascript'>
				alert('Sucessfully Registered')
				window.location.assign('index.php')
			</script>";		
		
			}
			
			
			
				
		
?>