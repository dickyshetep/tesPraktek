<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$Id_guru = $_POST['Id_guru'];
	$Nama_guru =$_POST['Nama_guru'];
	$Id_matkul=$_POST['Id_matkul'];
	//$email=$_POST['email'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE guru SET Nama_guru='$Nama_guru',Id_matkul ='$Id_matkul' WHERE Id_guru = $Id_guru");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM guru WHERE Id_guru = $Id_guru ORDER BY Id_guru asc");
// if ($result === FALSE) {
  //  die(mysqli_error());
//}
while($user_data = mysqli_fetch_array($result))
{
	$Id_guru = $user_data['Id_guru'];
	$Nama_guru = $user_data['Nama_guru'];
	$Id_matkul = $user_data['Id_matkul'];
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
				<td>ID Guru</td>
				<td><input type="text" name="Id_guru" value=<?php echo $Id_guru;?>></td>
			</tr>
			<tr> 
				<td>Nama Guru</td>
				<td><input type="text" name="Nama_guru" value=<?php echo $Nama_guru;?>></td>
			</tr>
			<tr> 
				<td>ID Matkul</td>
				<td><input type="text" name="Id_matkul" value=<?php echo $Id_matkul;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="Id_guru" value=<?php echo $_GET['Id_guru'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>