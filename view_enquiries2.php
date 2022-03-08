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







	<!-- header tag containing the logo and the navigation bar-->
	<header>

	    <!-- Navigation bar with nested unordered list to create a sub menu for products-->
	    <!-- sub menu drop down list enhancement referred to youtube channel "Easy Tutorials" link:-https://www.youtube.com/watch?v=wHFflWvii3M&t=665s-->
	    <nav>
	     <ul>
         <li><a href="view_enquiries.php">View Enquiries</a></li>
   			<li><a href="edit_user.php"> Manage Accounts </a></li>
   			<li><a href="logout.php"> Log Out </a></li>

	      </ul>
	    </nav>
	</header>


	 <div class="disclaimer2">


	<?php
	// set the servername,username and password
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Enquirydb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$dbname);
	// Check connection
	if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT id, firstname, lastname, email, street, city, state, postcode, phonenum, product, subject, comment, appoint_date, appoint_time FROM EnqDetails";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
					echo "<br>id: " . $row["id"]. "<br> - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br> - Email: " . $row["email"]. "<br> - Address:  " . $row["street"]. "<br> - City: " . $row["city"].  "<br> -State: " . $row["state"]. "<br> -PostCode: " . $row["postcode"]. "<br> -Contact_No: " . $row["phonenum"]. "<br> -Subject_Topic: " . $row["subject"]. "<br> -Preffered Date: " . $row["appoint_date"]. "<br> -PrefferedTime: " . $row["appoint_time"]. " <br><br><hr><br>";
			}
	} else {
			echo "0 results";
	}

	mysqli_close($conn);
	?>

</div>



	</body>
	</html>
