<?php
session_start();
$uname=$_SESSION['name'];
$con=mysqli_connect("localhost","root","","login");
$result=mysqli_query($con,"SELECT * FROM `transaction` WHERE sender='$uname' OR receiver='$uname'");
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)) {
	echo "Transaction Number :{$row['tnum']}  <br> ".
         "SENDER : {$row['sender']} <br> ".
         "RECEIVER : {$row['receiver']} <br> ".
		 "TIME : {$row['time']} <br> ".
		 "AMOUNT : {$row['amount']} <br> ".
         "--------------------------------<br>";
}
}
else {
    echo "0 results";
		}
?>
