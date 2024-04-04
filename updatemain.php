<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
	<?php
	$id=$_POST['id'];

	include'db.php';
	$qry ="SELECT * FROM `products` WHERE  `c_id`='$id'";
	$result=$con -> query($qry);
	while($row =$result -> fetch_assoc()){
		$c =$row['catogery'];
		$kg =$row['kg'];
		$p =$row['price'];
	}
	?>
	<center>
	<form action="up.php" method="POST">
		C_id:
		<input type="text"  value="<?php echo $id ;?>" name="id"/><br>
		Catogery<br>
		<input type="text" name="catogery" value="<?php echo $c; ?>"/><br><br>
		Kilogram<br>
		<input type="text" name="kg" value="<?php echo $kg ?>"/><br><br>
		price<br>
		<input type="text" name="price" value="<?php echo $p; ?>"/><br><br>
		<input type="submit" name="btnsubmit" value="UPDATE DATA"/><br><br>
</form>
</center>
</body>
</html>