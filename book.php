<div>
	<h3><center>BOOKING</center></h3><br><br>
	<form action="totalprice.php" method="post">
		USER NAME:<br>
		<input type="text" name="name" placeholder="Enter user name" required><br>
		Catagery:<br>
		<select id="category" name="category" required>
			<option value="0">--choose--</option>
			<option value="lpg">Lpg</option>
			<option value="oxygen">Oxygen</option>
			<option value="helium">Helium</option>
			<option value="carbon-di-oxide">Carbon-di-oxide</option>
		</select>
		<br>
		weight:<br>
		<input type="number" name="kg" placeholder="Enter weight in kg" required><br>
		<input type="submit" value="Booking">
	</form>
</div>
