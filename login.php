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

	$checktable = "SELECT * FROM usersdetails";

		//checking if table usersdetails exists
		if (mysqli_query($conn, $checktable) == null){
			//create the usersdetails table if it doesnt exist
			$sql = 	"CREATE TABLE usersdetails (
			id int(11) UNSIGNED NOT NULL AUTO_INCREMENT	PRIMARY KEY,
			name VARCHAR(50) NOT NULL,
			username VARCHAR(50) NOT NULL,
			email VARCHAR(50) NOT NULL,
			password VARCHAR(100) NOT NULL
			)";

			$insertuser = "INSERT INTO usersdetails (name, username, email, password)
			VALUES ('Admin', 'useradmin', 'admin@mail.com', 'admin123')";

			mysqli_query($conn, $sql);
			mysqli_query($conn, $insertuser);
		}


		if (isset($_SESSION["id"])){
		if ($_SESSION["id"]){  //if session variable exists
			header("location: welcomepage.php"); //if users are already logged in, redirect to welcomepage without needing to log in
		}
	}

	//if users are not logged in, execute the following
	$userexists = false;
	$queryResult = mysqli_query($conn, "SELECT * FROM usersdetails");
	$msg = "";

	if (isset($_POST["lusername"]) && isset($_POST["lpass"])){
		//trim to remove leading whitespaces
		$lusername = $_POST["lusername"];
		$lpass = $_POST["lpass"];
	}

	//verify the username and password are not empty
	if ((!empty($lusername)) && (!empty($lpass))){

		while ($row = mysqli_fetch_assoc($queryResult)){
			if ($row['username'] == $lusername && $row['password'] == $lpass){
				$userexists = true;
				$_SESSION["name"] = $row["name"]; //set the session variable to display user's name
				$_SESSION["id"] = session_id(); //session variable to check if users are still logged in
 			}
		}

		if ($userexists){
			header("location: welcomepage.php"); //if user successfully logs in, redirects to welcomepage
		}
		else{
			$msg = "<p class='red'> *User doesn't exist! </p>";
		}
	}

	mysqli_close($conn);
?>

<?php include("include/header.php"); ?>
<?php include("include/popUp.php"); ?>

 <div class="disclaimer2">


<h1 class="registerh"> Login </h1>


<form action="" method="post">
	<fieldset>
	<legend class="loginuser"> User Login </legend>

	<p>
	<label for="lusername">  Username: </label> <br/>
	<input type="text" name="lusername" id="lusername"/>
	</p>


	<p>
	<label for="lpass">  Password: </label> <br/>
	<input type="password" name="lpass" id="lpass" size="75"/>
	</p>

	<div class="loginbttn">
	<button type="submit" value="submit" class="zoom"> Login </button>
	</div>

	<?php
		if (isset($msg) && !empty($msg)){
			echo $msg;
		}
	?>
		<p> No account? Register 	<button type="submit" style="background-color:black;" value="submit" class="zoom">  <a href="register.php"  class="ext_link">here </a> </button></p>
	</fieldset>

</form>

</div>

<?php include("include/footer.php"); ?>


</body>
</html>
