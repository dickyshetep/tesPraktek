<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$Id_guru = $_GET['Id_guru'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM guru WHERE Id_guru = $Id_guru");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>
