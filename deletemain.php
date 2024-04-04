<?php
	$id=$_POST['id'];

	include'db.php';
	$qry ="DELETE FROM `products` WHERE `c_id`='$id'";
	$res=$con -> query($qry);
	if($res==1){
		header("location:display.php");
	}
	else
		echo "try again 
				<br><br><a href='adminmain.php'>BACK</a><br><br>";
	mysqli_close($con);
?>