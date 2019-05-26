<?php
session_start();
if(isset($_SESSION['log']))
{
?>


<html>
<head>
<title>Welcome</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<body>
<div class="box">
<h2>Welcome, <?php echo $_SESSION['name'] ;?></h2>
<form method="POST" action="welcome.php">				<!--Balance FOrm-->
<input type="submit" value="Check Balance" name="balance">
<span style="color:white;">
<?php
$data=$_SESSION['name'];
if(isset($_POST['balance'])){
	$con=mysqli_connect('localhost','root','','login');
	$result=mysqli_query($con,"SELECT balance FROM `login_info` WHERE uname='$data' ");
	if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
			echo $row["balance"]." Rupees";
			}
			} 
	else {
    echo "0 results";
		}
}
?>
</span>
</form>													<!--Balance FOrm ends-->

<form method="POST" action="welcome.php">			<!--Money Sender Form-->
<input type="text" placeholder="Username of Receiver" name="uname">
<input type="text" placeholder="Amount" name="amount">
<input type="submit" value="Send Money" name="send">
 
<?php
if(isset($_POST['send'])){
	$con=mysqli_connect('localhost','root','','login');
	$uname=$_POST['uname'];
	$amount=$_POST['amount'];
	$sql="UPDATE `login_info` SET balance=balance+'$amount' WHERE uname='$uname' ";
	$sql1="UPDATE `login_info` SET balance=balance-'$amount' WHERE uname='$data' ";
	$sql2="INSERT INTO `transaction`(`sender`, `receiver`,`amount`) VALUES ('$data','$uname','$amount')";
	mysqli_query($con,$sql1);
	mysqli_query($con,$sql);
	mysqli_query($con,$sql2);
	echo "Money Sent";
}
?>															<!--Money Sender form ends-->
</form>														<!--transaction form submition-->
<form method="POST" action="transaction.php">
<input type="submit" value="Show Transactions" name="trans">
</form>

</div>														<!--div ends for central box -->


<div class="menu">
<form method="POST" action="welcome.php">					<!--logout form-->
<input type="submit" value="Delete Account" name="delete">
<?php
if(isset($_POST['delete'])){
	$con=mysqli_connect('localhost','root','','login');
	$sql="DELETE FROM `login_info` WHERE uname='$data' ";
	mysqli_query($con,$sql);
	echo "Account Deleted";
	header("refresh:2;url=index.php");
}
?>


<input type="submit" value="Logout" name="logout">
<?php
if(isset($_POST['logout'])){
	header("refresh:0;url=index.php");
}
?>
</form>
</div>

</body>
</head>

</html>

<?php
}
else{
echo "Protected";
header("refresh:2;url=index.php");
}
?>
