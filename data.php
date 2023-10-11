
<!--
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
</head>
<body>
	<form method="post" action="">
		<table border="1" bgcolor="skyblue" bordercolor="blue" align="center">
			<tr>
				<td align="center">Sign Up</td>
			</tr>
			<tr>
				<td align="center"><input type="text" name="first_name" placeholder="Enter Your First Name"></td>
			</tr>
			<tr>
				<td align="center"><input type="text" name="last_name" placeholder="Enter Your Last Name"></td>
			</tr>
			<tr>
				<td align="center"><input type="email" name="email" placeholder="Enter Your Email"></td>
			</tr>
			<tr>
				<td align="center"><input type="text" name="phone_number" placeholder="Enter Phone Number"></td>
			</tr>
			<tr>
				<td align="center"><input type="password" name="password" placeholder="Enter Your Password"></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" name="submit" value="Submit"></td>
			</tr>
			<tr>
				<td align="center"><a href="signin.php">Already have account</a></td>
			</tr>
		</table>
	</form>
</body> 
</html>-->
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'registration_form') or die('Please check your database');
if (isset($_POST['submit'])) {
	$first_name=$_POST['name'];
	$email=$_POST['email'];
	$phone_number=$_POST['phone'];
	$message=$_POST['message'];

	$query="INSERT INTO `company`(`First_name`, `email`, `phone_number`, `Message`) VALUES ('$first_name','$email','$phone_number','$message')";
	$ins=mysqli_query($con,$query);

	
	if ($ins)
	 {
	 		header('loaction:');
	}
	else
	{
		echo "Something wents wrong";
	}
}
?>