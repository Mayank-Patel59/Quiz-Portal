<?php
	session_start();
		include "connect.php";
		extract($_POST);		
		$email=test_input($uname);
		$pass=test_input($psw);
		if(!preg_match('/^[a-z\d\._-]+@([a-z\d-]+\.)+[a-z]{2,6}$/i',$email))
		{
          echo "<script language='javascript'>
				alert('invalid email')	
				window.location.assign('index.php')
			</script>";
		}
		else
		{
	    $sql = mysqli_query($con,"select * from user where email_id='".$email."' and password='".$pass."'");
	    $details=mysqli_fetch_assoc($sql);
		$num=mysqli_num_rows($sql);
		if($num==0)
		{	
			if($email=="Admin@gmail.com" && $pass=="Admin")
			{
				$_SESSION['admin']="loggedin";
				header("location:Admin/welcomeadmin.php");
			}
			else
			{
		
			echo "<script language='javascript'>
				alert('Error :- Username or Password is Invalid')	
				window.location.assign('index.php')
			</script>";	
			}
		}
		else
		{
			 session_start();
			 $_SESSION['name']=$details['name'];
			$_SESSION['email']=$email;
			header("location:welcome.php");
		}
	}
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
?>




	