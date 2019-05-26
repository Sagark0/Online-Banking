<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Login Page</title>
<style>
.box a {
	text-decoration:none;
	display:block;
	text-align:center;
	margin: 20px auto;
	border:2px solid #2ecc71;
	border-radius: 24px;
	color:white;
	width:110px;
	padding:14px 1px;
}
.box a:hover{
	background-color:#2ecc71;
}
</style>
</head>
<body>
<form class="box" method="POST" action="login.php">
<h2>Account Login</h2>
<input type="text" placeholder="Username" name="uname">
<input type="password" placeholder="Password" name="pass">
<input type="submit" value="Login" name='login'>
<a href="register.php">Register</a>

</form>

</body>
</html>
<?php
session_destroy();
?>