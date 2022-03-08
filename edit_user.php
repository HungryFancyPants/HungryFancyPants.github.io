<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="description" content="Basic CSS elements"/>
	<meta name="keywords" content="HTML5, tags, CSS"/>
	<meta name="author" content="Minhajul Hossain Moyeen"/>
  <link href="styles/meatstyle.css" rel="stylesheet"/>
  <link href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"  rel="stylesheet">
  <script src="s.js"></script>
  <script src="script.js"></script>
  <script src="enhancements.js"></script>
  <script src="enq_process.js"></script>
<title>Enquiry form</title>

</head>
<body class="disclaim">

	<?php include("include/header.php"); ?>
	<?php include("include/popUp.php"); ?>


 <div class="disclaimer2">
<h1 class="page_h1"> Users </h1>

</div>
	 <div class="enquiry32">




<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Enquirydb"; //name of the enquiry database

	$conn = @mysqli_connect($servername, $username, $password, $dbname);

	if($conn){
		$query = "SELECT * FROM usersdetails";
		$result = mysqli_query($conn, $query);

		if($result < $query){
			$record = mysqli_fetch_assoc($result);
		}
		mysqli_close($conn);
	}




?>

<table class="viewEnquiries">
  	<tr class="head">
		<td>User ID</td>
    	<td>Name</td>
    	<td>Username</td>
    	<td>Email</td>
    	<td>Password</td>
    	<td>Edit</td>
		<td>Delete</td>
  	</tr>

<?php
	$row = mysqli_fetch_assoc($result);
	while($row){
?>

	<tr>
    	<td><?php echo $row["id"]; ?></td>
    	<td><?php echo $row["name"]; ?></td>
    	<td><?php echo $row["username"]; ?></td>
    	<td><?php echo $row["email"]; ?></td>
    	<td><?php echo $row["password"]; ?></td>
    	<td><a href="edit_data.php?id=<?php echo $row["id"]; ?>" class="bttn"> Edit </a></td>
		<td><a href="delete_user.php?id=<?php echo $row["id"]; ?>"class="bttn">Delete</td>
	</tr>

<?php
		$row = mysqli_fetch_assoc($result);
	}
?>


</table>

</div>


<?php include("include/footer.php"); ?>


</body>
</html>
