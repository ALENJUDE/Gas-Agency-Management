<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>MY ORDERS</title>
</head>
<body>
	<table width="100" cellpadding="15" cellspacing="0" border="1">
		<thead>
			<tr>
				<th>CATOGERY</th>
				<th>KILOGRAMS</th>
				<th>PRICE</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$n=$_POST['name'];
				$sql = "SELECT * FROM `userorders` WHERE `username`='$n' ";
				$result = mysqli_query($con,$sql);
				if ($result) {
					while ($row = mysqli_fetch_assoc($result)) {
						$c = $row['category'];
						$kg=$row['weight'];
						$p = $row['price'];
						echo '<tr>
							<td> '.$c.'</td>
							<td> '.$kg.'</td>
							<td> '.$p.'</td>
						</tr>';
					}
				}
			?>
			
		</tbody>
	</table>
	<br><br>
	<a href="main.php">BACK</a>
</body>
</html>