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

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Enquirydb"; //name of the enquiry database

	// Establishing the connection
	$conn = @mysqli_connect($servername, $username, $password, $dbname);
	// Check connection

	//get data from the register.php and sanitise some
	$name = trim($_POST["name"]);
	$username = trim($_POST["username"]);
	$email = trim($_POST["email_add"]);
	$password = $_POST["pass"];
	$conf_pass = $_POST["confirm_pass"];
	$namepattern = "/[a-zA-Z]+$/";
	$emailpattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9]+\.[a-zA-Z0-9.-]{1,4}$/";

	$namevalid = false;
	$usernamevalid = false;
	$emailvalid = false;
	$passwordvalid = false;

	$sql_username = "SELECT * FROM usersdetails WHERE username = '$username'";
	$sql_email = "SELECT * FROM usersdetails WHERE email = '$email'";
	$check_username = mysqli_query($conn, $sql_username);
	$check_email = mysqli_query($conn, $sql_email);

	$errors = "";
	$message = "";

	//validation for the all fields
	if (isset($name)){
		if ((strlen($name)> 0) && (preg_match($namepattern, $name))){
			$namevalid = true;
		}
		else{
			$errors .= "<p> Invalid name </p>";
		}
	}

	if (isset($username)){
		if ((strlen($username) > 5) && (mysqli_num_rows($check_username)== 0)){
			$usernamevalid = true;
		}
		else{
			if (mysqli_num_rows($check_username)>0){
				$errors .=  "<p> Username already taken </p>";
			}
			elseif (strlen($username) < 5){
				$errors .=  "<p> Username must be longer than 5 characters </p>";
			}
		}
	}


	if (isset($email)){
		if (strlen($email)>0 && preg_match($emailpattern, $email) && mysqli_num_rows($check_email)==0 ){
			$emailvalid = true;
		}
		else{
			if (strlen($email)==0){
				$errors .= "<p> Enter an email address </p>";
			}

			elseif (!preg_match($emailpattern, $email)){
				$errors .= "<p> Please enter a valid email address</p>";
			}

			elseif (mysqli_num_rows($check_email)>0){
				$errors .= "<p> An account with the same email address already exists </p>";
			}
		}
	}

	if (isset($password)){
		if ((strlen($password) > 0) && ($password == $conf_pass)){
			$passwordvalid = true;
		}

		//if password doesn't match the confirm password field
		elseif ($password != $conf_pass){
			$errors .= "<p> Password does not match</p>";
		}

		else{
			$errors .= "<p> Enter a password </p>";
		}
	}

	if ($namevalid && $usernamevalid && $emailvalid && $passwordvalid){
		$sql = "INSERT INTO usersdetails (name, username, email, password)
				VALUES ('$name', '$username', '$email', '$password')";

		mysqli_query($conn, $sql);
	}

	if ($errors == ""){
		$message = "<h1> Registration Successful! </h1>";
	}

	else{
		$message = "<h1 class='msg'> Sorry, there were a few errors with your registration </h1>" . $errors;
	}

	mysqli_close($conn);

?>

<?php include("include/header.php"); ?>
<?php include("include/popUp.php"); ?>



 <div class="disclaimer2">

<table class="tablecenter">
	<tr>
		<td class="tdcenter"> <?php echo $message; ?> </td>
	</tr>

	<tr>
		<td class="tdcenter"> <a href="register.php" class="bttn"> Return to registration </a> </td>
	</tr>
</table>

</div>

<?php include("include/footer.php"); ?>


</body>
</html>
