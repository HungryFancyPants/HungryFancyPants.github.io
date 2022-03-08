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
	<!-- Creating the table to store the user details -->
	<?php
		//to connect to database
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

		mysqli_close($conn);

	?>

  <?php include("include/header.php"); ?>
  <?php include("include/popUp.php"); ?>


 <div class="disclaimer2">

<h1 class="registerh"> Create User </h1>


<p class="center"> Please fill in your details in the following fields below: </p>


<form action="processregister.php" method="post">

	<fieldset>

	<legend class="registeruser"> New User </legend>

	<p>
	<label for="name">  Name: </label> <br/>
	<input type="text" placeholder="Enter your name here" name="name" id="name"/>
	</p>

	<p>
	<label for="username">  Username: </label> <br/>
	<input type="text" placeholder="10 characters or more" name="username" id="username"/>
	</p>

	<p>
	<label for="email_add">  Email Address: </label> <br/>
	<input type="text" placeholder="Email Address" name="email_add" id="email_add"/>
	</p>

	<p>
	<label for="pass">  Password: </label> <br/>
	<input type="password" name="pass" id="pass" size="75"/>
	</p>

	<p>
	<label for="confirm_pass">  Confirm Password: </label> <br/>
	<input type="password" name="confirm_pass" id="confirm_pass" size="75"/>
	</p>


<div class="registerbttns">
	<button type="submit" value="submit" class="zoom"> Register</button>
	<button type="reset" value="reset" class="zoom"> Cancel</button>
</div>

	<p> Already have an account? Login <button type="submit" style="background-color:black;" value="submit" class="zoom">  <a href="login.php"  class="ext_link">here </a> </button> </p>

	</fieldset>
  <br><br><br>


</form>

</div>

<?php include("include/footer.php"); ?>



</body>
</html>
