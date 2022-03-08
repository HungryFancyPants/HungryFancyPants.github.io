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
<body class="backclr">
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Enquirydb"; //name of the enquiry database
	$errormsg = '';
	$msg = '';

	$conn = @mysqli_connect($servername, $username, $password, $dbname);


	$id = $_POST['id'];
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$conf_pass = $_POST['confirm_pass'];
	$namepattern = "/[a-zA-Z]+$/";
	$emailpattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9]+\.[a-zA-Z0-9.-]{1,4}$/";

	$namevalid = false;
	$passwordvalid = false;



	if (isset($name)){
		if ((strlen($name)> 0) && (preg_match($namepattern, $name))){
			$namevalid = true;
		}
		else{
			$errormsg .= "<p> Invalid name </p>";
		}
	}


	if (isset($password)){
		if ((strlen($password) > 0) && ($password == $conf_pass)){
			$passwordvalid = true;
		}

		else if ($password != $conf_pass){
			$errormsg .= "<p> Password does not match</p>";
		}

		else{
			$errormsg .= "<p> Enter a password </p>";
		}
	}

	if ($namevalid && $passwordvalid){
		$sql = "UPDATE usersdetails SET id='".$id."', name='".$name."', username='".$username."',
				email='".$email."', password='".$password."' where id='".$id."'";

		mysqli_query($conn, $sql);
	}

	if ($namevalid && $passwordvalid){
		$msg = "<h1> Your data has been updated! </h1>";
	} else {
		$msg = "<h1> There seems to be an error with data update, please fix the errors below </h1>";
	}

	function sanitiseInput($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	mysqli_close($conn);


	if ($_SESSION["id"] == ""){ //if session variable is empty, means that users have logged out
		header("location: login.php"); //does not allow users to view the page if they are logged out
	}

?>

<?php include("include/header.php"); ?>
<?php include("include/popUp.php"); ?>



 <div class="disclaimer2">

	<?php echo $msg; ?>



	<?php
		if ($namevalid && $passwordvalid){
	?>

		<table>
			<tr>
				<td colspan="2"> Updated Data </td>
			</tr>

			<tr>
				<td>User ID</td>
				<td><?php echo $id; ?></td>
			</tr>

			<tr>
				<td>Name</td>
				<td><?php echo $name; ?></td>
			</tr>

			<tr>
				<td>Username</td>
				<td><?php echo $username; ?></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><?php echo $email; ?></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><?php echo $password; ?></td>
			</tr>
		</table>
	<?php
		} else {
			echo $errormsg;
		}
	?>


</div>

<?php include("include/footer.php"); ?>



</body>
</html>
