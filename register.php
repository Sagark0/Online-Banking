<?php
session_start();
$con=mysqli_connect('localhost','root','','login');
if(isset($_POST['signup']))
{
	$uname=$_POST['uname'];
	$branch=$_POST['branch'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];
	
	if($password==$password2)
		{
		mysqli_query($con,"INSERT INTO `login_info`(`uname`, `pass`, `branch`) VALUES ('$uname','$password','$branch')");
		echo "registered";
		header("refresh:2;url=index.php");
		}
	else{
		echo "Not Registered";
		header("refresh:2;url=index.php");
		}
}
?>
<html>
<head>
<title>Create Your Account</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<form class="box" method="POST" action="register.php">
<h2>Enter Details</h2>
<input type="text" placeholder="User Name" name="uname">
<input type="text" placeholder="Branch" name="branch">
<input type="password" placeholder="Password" name="password">
<input type="password" placeholder="Retype Password" name="password2">
<input type="submit" value="Sign Up" name="signup">
<a href='index.php'>Homepage</a>

</form>
</body
</html>