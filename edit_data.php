<!DOCTYPE html>
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
<body class="backclr">


		<?php include("include/header.php"); ?>
		<?php include("include/popUp.php"); ?>


	 <div class="disclaimer2">

<h1 class="page_h1"> Update </h1>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Enquirydb"; //name of the enquiry database
	$id = $_REQUEST["id"];

	$conn = @mysqli_connect($servername, $username, $password, $dbname);

	if($conn){
		$query = "SELECT * FROM usersdetails WHERE id='".$id."'";
		$result = mysqli_query($conn, $query);

		if($result < $query){
			$record = mysqli_fetch_assoc($result);
		}
		mysqli_close($conn);
	}


?>

<table class="viewEnquiries">
<form id="acc" method="post" action="data_process.php">
<?php
	$row = mysqli_fetch_assoc($result);
	while($row){
?>


	<tr style="color: gold;">
		<td class="head">User ID</td>
		<td><?php echo $row["id"]; ?></td>
		<td><input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/> <?php echo $row["id"]; ?> </td>
	</tr>

	<tr style="color: gold;">
		<td class="head">Name</td>
		<td><?php echo $row["name"]; ?></td>
		<td><input type="text" name="name" value="<?php echo $row["name"]; ?>"/></td>
	</tr>

	<tr style="color: gold;">
		<td class="head">Username</td>
		<td><?php echo $row["username"]; ?></td>
		<td><input type="hidden" name="username" value="<?php echo $row["username"]; ?>"/> <?php echo $row["username"]; ?> </td>
	</tr>

	<tr style="color: gold;">
		<td class="head">Email</td>
		<td><?php echo $row["email"]; ?></td>
		<td><input type="hidden" name="email" value="<?php echo $row["email"]; ?>"/> <?php echo $row["email"]; ?></td>
	</tr>

	<tr style="color: gold;">
		<td class="head">Password</td>
		<td><?php echo $row["password"]; ?></td>
		<td><input type="text" name="password" value="<?php echo $row["password"]; ?>"/></td>
	</tr>

	<tr style="color: gold;">
		<td class="head">Confirm Password</td>
		<td></td>
		<td><input type="text" name="confirm_pass" value="<?php echo $row["password"]; ?>"/></td>
	</tr>

<?php
		$row = mysqli_fetch_assoc($result);
	}
?>
	<tr>
		<td colspan="3">
			<button type="submit" value="submit" class="zoom"> Update </button>
		</td>
	</tr>
</form>
</table>

</div>


	<?php include("include/footer.php"); ?>

</div>
</body>
</html>
