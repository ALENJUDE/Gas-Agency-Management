<form action="total.php" method="post">
	<?php
		include"db.php";
		$n=$_POST['name'];
		$c=$_POST['category'];
		$kg=$_POST['kg'];
		echo "<h3><center>Username: $n<br>
		  	Category: $c<br>
			  Weight: $kg KG <br> </center></h3>
		";
		echo "<br><center>--------------------------***----------------------------</center><br>";
		$qry="SELECT * FROM `products` WHERE `catogery`='$c'";
		$res=$con -> query($qry);
		while($row =$res -> fetch_assoc()){
				$p=$row['price'];
		}
		$t=$p*$kg;
		echo "<h3><center>Total Price: $t </center></h3><br>";
		mysqli_close($con);
	?>	
	<input type="hidden" name="name" value="<?php echo "$n" ?>">
	<input type="hidden" name="category" value="<?php echo "$c" ?>">
	<input type="hidden" name="kg" value="<?php echo "$kg" ?>">
	<input type="hidden" name="total" value="<?php echo "$t" ?>">
	<input type="submit" value="BUY NOW">
</form>
