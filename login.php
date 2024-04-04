<?php
	
	include'db.php';
	$u=$_POST['username'];
	$p=$_POST['pwd'];
	$sql="SELECT * FROM `login` WHERE `username`='$u' and `pwd`='$p'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)){
		header("location:main.php");
	}
	else
		echo "try again";
	mysqli_close($con);
?>