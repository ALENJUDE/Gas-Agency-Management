<?php   
	
	include'db.php';
	$u=$_POST['username'];
	$p=$_POST['psw'];
	$f=$_POST['fullname'];
	$e=$_POST['email'];
	$m=$_POST['num'];
	}   
	$sql="INSERT INTO `login`(`username`, `pwd`, `fullname`, `email`, `mobno`) VALUES ('$u','$p','$f','$e','$m')";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)==0){
	 	header("location:login.html");
	}   
	else
	 	echo "try again";
	mysqli_close($con);
?>      