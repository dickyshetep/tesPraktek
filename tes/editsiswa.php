<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$Id_murid = $_POST['Id_murid'];
	$Nama_murid =$_POST['Nama_murid'];
	$Id_kelas=$_POST['Id_kelas'];
	//$email=$_POST['email'];
		
	// update user data
	
	$result = mysqli_query($mysqli, "UPDATE murid SET Nama_murid='$Nama_murid',Id_kelas ='$Id_kelas' WHERE Id_murid = $Id_murid");
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM murid WHERE Id_murid = $Id_murid ORDER BY Id_murid asc");
// if ($result === FALSE) {
  //  die(mysqli_error());
//}
while($user_data = mysqli_fetch_array($result))
{
	$Id_murid = $user_data['Id_murid'];
	$Nama_murid = $user_data['Nama_murid'];
	$id_kelas = $user_data['id_kelas'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>ID murid</td>
				<td><input type="text" name="Id_murid" value=<?php echo $Id_murid;?>></td>
			</tr>
			<tr> 
				<td>Nama murid</td>
				<td><input type="text" name="Nama_murid" value=<?php echo $Nama_murid;?>></td>
			</tr>
			<tr> 
				<td>ID Kelas</td>
				<td><input type="text" name="id_kelas" value=<?php echo $id_kelas;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="Id_murid" value=<?php echo $_GET['Id_murid'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>