<?php
	session_start();
	$user=$_SESSION['fbuser'];
	$conn=mysqli_connect("localhost","root","","1951060885_facebook");
	
	$query1=mysqli_query($conn,"select * from users where Email='$user'");
	$rec1=mysqli_fetch_array($query1);
	$userid=$rec1[0];
	mysqli_query($conn,"update user_status set status='Offline' where user_id='$userid'");
	unset($_SESSION['fbuser']);
	//session_destroy();
	header("location:../../index.php");
?>