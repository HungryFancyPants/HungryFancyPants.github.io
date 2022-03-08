<?php
	$id = $_GET['id'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Enquirydb";
	
	$conn = @mysqli_connect($servername, $username, $password, $dbname);

	//sql to delete a record
	$sql = "DELETE FROM usersdetails WHERE id=$id"; 
	$result = mysqli_query($conn,$sql) or die ( mysqli_error($conn));
	header("Location: edit_users.php"); 
?>
