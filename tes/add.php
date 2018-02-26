<html>
<head>
	<title>Add Guru</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Id guru</td>
				<td><input type="text" name="Id_guru"></td>
			</tr>
			<tr> 
				<td>Nama Guru</td>
				<td><input type="text" name="Nama_guru"></td>
			</tr>
			<tr> 
				<td>Id Matkul</td>
				<td><input type="text" name="Id_matkul"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$Id_guru = $_POST['Id_guru'];
		$Nama_guru = $_POST['Nama_guru'];
		$Id_matkul = $_POST['Id_matkul'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO guru(Id_guru,Nama_guru,Id_matkul) VALUES('$Id_guru','$Nama_guru','$Id_matkul')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>