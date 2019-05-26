<?php
session_start();
$data=$_SESSION['name'];
if(isset($_POST['send'])){
	$con=mysqli_connect('localhost','root','','login');
	$uname=$_POST['uname'];
	$amount=$_POST['amount'];
	$sql="UPDATE `login_info` SET balance=balance+'$amount' WHERE uname='$uname' ";
	$sql1="UPDATE `login_info` SET balance=balance-'$amount' WHERE uname='$data' ";
	mysqli_query($con,$sql1);
	mysqli_query($con,$sql);
	echo "Money Sent";
	header("refresh:2;url:welcome.php");
}
?>
