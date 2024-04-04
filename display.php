<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
</head>
<body>
	<table width="100" cellpadding="15" cellspacing="0" border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>CATOGERY</th>
				<th>KILOGRAMS</th>
				<th>PRICE</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sql = "SELECT * FROM `products` ";
				$result = mysqli_query($con,$sql);
				if ($result) {
					while ($row = mysqli_fetch_assoc($result)) {
						$id = $row['id'];
						$c = $row['catogery'];
						$kg=$row['kg'];
						$p = $row['price'];
						echo '<tr>
							<td> '.$id.'</td>
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
	<a href="adminmain.php">BACK</a>
</body>
</html>