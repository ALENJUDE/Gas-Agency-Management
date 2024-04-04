<?php   
	
	include'db.php';
	$id=$_POST['id'];
	$c=$_POST['name'];
	$kg=$_POST['kg'];
	$p=$_POST['price'];
	  
	$sql="INSERT INTO `products`(`c_id`,`name`, `kg`, `price`) VALUES ('$id',$c','$kg','$p')";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)==0){
	 	header("location:display.php");
	}   
	else
	 	echo "try again";
	mysqli_close($con);
?>      