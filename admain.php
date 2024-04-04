<?php
	$u=$_POST['username'];
	$p=$_POST['pwd'];
	$con = mysqli_connect('localhost','root','','gasagent');
	if(mysqli_connect_errno($con)){
		echo"error";
	}
	$sql="SELECT * FROM `admin` WHERE `username`='$u' and `password`='$p'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)){
		header("location:adminmain.php");
	}
	else
		echo "try again";
	mysqli_close($con);
?>