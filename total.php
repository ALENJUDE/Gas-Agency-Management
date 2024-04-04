<?php
	include"db.php";
	$n=$_POST['name'];
	$c=$_POST['category'];
	$kg=$_POST['kg'];
	$t=$_POST['total'];
	$qry="INSERT INTO `userorders`( `username`, `category`, `weight`, `price`) VALUES ('$n','$c','$kg','$t')";
	$res=mysqli_query($con,$qry);
	if(mysqli_num_rows($res)==0){
		echo "";
	 	header("location:main.php?a=0");
	}   
	else
	 	echo "try again";
	mysqli_close($con);
?>      
?>