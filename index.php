<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="my.css">
	<style type="text/css">
		td
		{padding: 3px;}
	</style>
	<script src="jquery.js" type="text/javascript"></script>
	<script src="cycle.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function()
			{
				$('#Slider').cycle('fade');

			});
	</script>
</head>
<body bgcolor="#36c24">
	<div class="container wrapper" style="margin-top: 10px;">
<div class="nav">
<h1 style="text-align: center;color: white;padding: 18px;">Online Quiz Portal</h1>
</div>
<form action="checklogin.php" method="post">
<table class="login">
<tr><td style="color: white;font-size: 25px;text-align: center;">LOGIN FORM  </td></tr>
<tr><td>
<label class="heading">Email-ID</label><br/>
<input type="text" placeholder="Enter Email-id" name="uname" required><br/></td></tr>
<tr><td><label class="heading">Password</label><br/>
<input  type="password" placeholder="Enter Password" name="psw" required><br/></td></tr>
<tr><td><button  class="button" name="Submit" >Login</button></td></tr>
<tr><td><a style="text-decoration: none;color: white;font-size: 18px;float: right;" href="Register.php">Register?</a></td></tr>
</table>
</form>

<div id="Slider">
	<img src="1.jpg">
	<img src="2.png">
	<img src="3.jpg">
</div>
</div>
<div class="nav" style="margin-top: 50px;">
<h4 style="text-align: center;color: white;padding: 18px;margin-top: 5px;">Designed & Developed By Abhishek & Melvin</h4>
</div>

</body>
</html>