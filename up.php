<?php
	include'db.php';
	$id=$_POST['id'];
	$c=$_POST['catogery'];
	$kg=$_POST['kg'];
	$p=$_POST['price'];
	$qry="UPDATE `products` SET `catogery`='$c',`kg`='$kg',`price`='$p' WHERE  `c_id`='$id'";
	$res=mysqli_query($con,$qry);
	if($res==1){
		header("location:display.php");
	}
	else
		echo "try again 
				<br><br><a href='adminmain.php'>BACK</a><br><br>";
	mysqli_close($con);
?>