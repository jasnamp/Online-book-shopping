<?php
include_once 'connection.php';
SESSION_start(); //database connection page
if(isset($_POST["submit1"]))
{
	echo "Invalid username or password";
	$username=$_POST["email_id"];   //username value from the form
	$password=$_POST["password"];	//password value from the form
	//echo $username;
	$sql="select* from login where email_id='$username' and password='$password'"; //value querried from the table
	$res=mysqli_query($con,$sql);  //query executing function

	if($fetch=mysqli_fetch_array($res))
	{
		if($fetch[role]==1) // role means admin or user , for admin set to 0 and for user set to
		{
			$_SESSION["email_id"]=$username;	// setting username as session variable
			header("location:admin.php");	//home page or the dashboard page to be redirected
		}
		else if($fetch[role]==0) // role means admin or user , for admin set to 0 and for user set to
		{
			$_SESSION["email_id"]=$username;	// setting username as session variable
			header("location:state.php");

		}

	}


}
if(isset($_POST["submit2"]))
{
	header("location:state.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Simple Login Form</title>
<meta charset="UTF-8" />
<meta name="Designer" content="PremiumPixels.com">
<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="structure.css">

</head>

<body>
<form class="box login" method="post" name="submit">
	<fieldset class="boxBody">
	<th>Login</th>
	  <label>Username</label>
	  <input type="text" tabindex="1" placeholder="enter the username" name="email_id" required>
	  <label><a href="#" class="rLink" tabindex="5">Forget your password?</a>Password</label>
	  <input type="password" placeholder="enter the password"  name="password" tabindex="2" required>

<br>
	  <input type="submit" class="btnLogin" value="Login" name="submit1">
		<br>
		<h3>You r a new user??</h3>
		<a href="BlurMenu/index7.php">
				<strong>&laquo; Register Now: </strong>
		</a>
</fieldset>
</form>
<footer id="main">

</footer>
</body>
</html>
