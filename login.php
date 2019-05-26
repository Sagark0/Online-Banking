<?php
$uname=$_POST['uname'];
$pass=$_POST['pass'];

session_start();
$con=mysqli_connect("localhost","root","","login");
$result=mysqli_query($con,"SELECT * FROM `login_info` WHERE uname='$uname' && pass='$pass' ");
$count=mysqli_num_rows($result);
if($count==1)
{
echo "Login Successful";
$_SESSION['name']=$uname;
$_SESSION['log']=1;
header("refresh:2;url=welcome.php");
}
else{
echo "Wrong Credentials";
header("refresh:2;url=index.php");
}
?>