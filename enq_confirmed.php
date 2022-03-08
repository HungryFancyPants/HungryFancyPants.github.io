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


  ?>

	<?php
	//Establishing connection to database
	//setting the value of servername, username and password
	$servername = "localhost";
	$username = "root";
	$password = "";



	//establishing connection
	$conn = @mysqli_connect($servername, $username, $password);

	//Creating the database
	$sql = "CREATE DATABASE Enquirydb";

	mysqli_query($conn, $sql);
	mysqli_close($conn); //close the connection

?>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "Enquirydb"; //name of the enquiry database

		// Establishing the connection
		$conn = @mysqli_connect($servername, $username, $password, $dbname);
/*
    if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
 }else{
 echo "Successfully connecting to the database\n";
 echo "<br />";}
 */

		$sql = "CREATE TABLE EnqDetails(
			id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			firstname VARCHAR(25) NOT NULL,
			lastname VARCHAR(25) NOT NULL,
			email VARCHAR(50) NOT NULL,
			street VARCHAR(40) NOT NULL,
			city VARCHAR(20) NOT NULL,
			state VARCHAR(20) NOT NULL,
			postcode INT(5) NOT NULL,
			phonenum INT(11) NOT NULL,
			product VARCHAR(20) NOT NULL,
			subject VARCHAR(40) NOT NULL,
			comment VARCHAR(600),
			appoint_date DATE NOT NULL,
			appoint_time TIME NOT NULL
		)";

		mysqli_query($conn, $sql);

		mysqli_close($conn);

	?>



	<?php
	  // set the servername,username and password
	  $servername = "localhost";
	  $username = "root";
	  $password = "";
	  $dbname = "Enquirydb";
    $error = false;

		$errormsg = "";
		$msg = "";




	  // Create connection
	  $conn = mysqli_connect($servername, $username, $password,$dbname);
	  // Check connection
	  if (!$conn) {
	      die("Connection failed: " . mysqli_connect_error());
	  }

	  //get value enquiry.php
	  $fname = $_POST['fname'];
	  $lname = $_POST['lname'];
	  $email = $_POST['email'];
	  $street = $_POST['adrs'];
	  $city = $_POST['city'];
	  $state = $_POST['state'];
	  $phone= $_POST['cntc'];
	  $product= $_POST['sub_product'];
	  $subject = $_POST['subject'];
	  $postcode = $_POST['pCde'];
	  $comment = $_POST['desC'];
	  $ptime = $_POST['starttime'];
	  $pdate = $_POST['date'];

    if (!empty($fname)){
    			$fname = sanitiseInput($fname);
    			if (!preg_match("/[a-zA-Z]+$/",$fname)){
    				$errormsg .= "<p>Error! First name, only letters and spaces allowed.</p>";
    				$error = true;
    			} elseif (strlen($fname) > 25){
    				$errormsg .= "<p>Error! Firstname must have less than 25 characters.</p>";
    				$error = true;
    			}
    		} else {
    			$errormsg .= "<p>Error! First name is empty</p>";
    			$error = true;
    		}

    		if (!empty($lname)){
    			$lname = sanitiseInput($lname);
    			if (!preg_match("/[a-zA-Z]+$/",$lname)){
    				$errormsg .= "<p>Error! Last name, only letters and spaces allowed.</p>";
    				$error = true;
    			} elseif (strlen($lname) > 25){
    				$errormsg .= "<p>Error! Last tname must have less than 25 characters.</p>";
    				$error = true;
    			}
    		} else {
    			$errormsg .= "<p>Error! Last name is empty</p>";
    			$error = true;
    		}

    		if (!empty($email)){
    			$email = sanitiseInput($email);
    			if (!preg_match("/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9]+\.[a-zA-Z0-9.-]{1,4}$/",$email)){
    				$errormsg .= "<p>Error! Please enter a valid email address (Must contain '@' and '.').</p>";
    				$error = true;
    			} elseif (strlen($email) > 50){
    				$errormsg .= "<p>Error! Email must be less than 50 characters.</p>";
    				$error = true;
    			}
    		} else {
    			$errormsg .= "<p>Error! Email is empty</p>";
    			$error = true;
    		}

    		if (!empty($street)){
    			$street = sanitiseInput($street);
    			if (!preg_match("/[a-zA-Z0-9\s]$/",$street)){
    				$errormsg .= "<p>Error! Street name must not contain special characters.</p>";
    				$error = true;
    			} elseif (strlen($street) > 40){
    				$errormsg .= "<p>Error! Street name must be less than 40 characters.</p>";
    				$error = true;
    			}
    		} else {
    			$errormsg .= "<p>Error! Street name is empty</p>";
    			$error = true;
    		}

    		if (!empty($city)){
    			$city = sanitiseInput($city);
    			if (!preg_match("/[a-zA-z]+$/",$city)){
    				$errormsg .= "<p>Error! City name must not contain special characters.</p>";
    				$error = true;
    			} elseif (strlen($city) > 20){
    				$errormsg .= "<p>Error! City name must be less than 40 characters.</p>";
    				$error = true;
    			}
    		} else {
    			$errormsg .= "<p>Error! City name is empty</p>";
    			$error = true;
    		}

    		if (empty($state)){
    			$errormsg .= "<p>Error! Please select a state</p>";
    			$error = true;
    		}

    		if (!empty($postcode)){
    			$postcode = sanitiseInput($postcode);
    			if (is_nan($postcode)){
    				$errormsg .= "<p>Error! Postcode should only contain numbers.</p>";
    				$error = true;
    			} elseif (!preg_match("/\d+$/",$postcode)){
    				$errormsg .= "<p>Error! Postcode name must not contain special characters.</p>";
    				$error = true;
    			} elseif ((strlen($postcode) > 5) || (strlen($postcode) < 5)){
    				$errormsg .= "<p>Error! Postcode must be 5 digits</p>";
    				$error = true;
    			}
    		} else {
    			$errormsg .= "<p>Error! Postcode is empty</p>";
    			$error = true;
    		}

    		if (!empty($phone)){
    			$phone = sanitiseInput($phone);
    			if (!preg_match("/[0-9+$]/",$phone)){
    				$errormsg .= "<p>Error! Phone number should only contain digits.</p>";
    				$error = true;
    			} elseif (strlen($phone) > 10){
    				$errormsg .= "<p>Error! Phone number should be 10 digits or less.</p>";
    				$error = true;
    			}
    		} else {
    			$errormsg .= "<p>Error! Phone number should not be empty</p>";
    			$error = true;
    		}

    		if (empty($product)){
    			$errormsg .= "<p>Error! Please select a product</p>";
    			$error = true;
    		}

    		if (!empty($subject)){
    			if (strlen($subject) > 40){
    				$errormsg .= "<p>Error! Subject cannot have more than 40 characters</p>";
    				$error = true;
    			}
    		} else {
    			$errormsg .= "<p>Error! Subject cannot be empty</p>";
    			$error = true;
    		}

    		if (!empty($comment)){
    			if (strlen($comment) > 600){
    				$errormsg .= "<p>Error! Comment cannot have more than 600 characters</p>";
    				$error = true;
    			}
    		} else {
    			$errormsg .= "<p>Error! Comment cannot be empty</p>";
    			$error = true;
    		}

    		if (!empty($pdate)){
    			if (date("Y-m-d") > $pdate){
    				$errormsg .= "<p>Error! Appointment date cannot be a past or current date</p>";
    				$error = true;
    			}
    		} else {
    			$errormsg .= "<p>Error! Date cannot be empty</p>";
    			$error = true;
    		}

    		if (empty($ptime)){
    			$errormsg .= "<p>Error! Appointment time cannot be empty</p>";
    			$error = true;
    		}

	if ($error == false){
	  $sql = "INSERT INTO EnqDetails ( firstname, lastname, email, street, city, state, postcode, phonenum, product, subject, comment, appoint_date, appoint_time )
	  VALUES ('$fname', '  $lname ', '$email','$street','$city','$state','$postcode','$phone','$product','$subject', '$comment','$pdate','$ptime',)";

		}
	  /*if (mysqli_query($conn, $sql)) {
	      echo "New record created successfully";
	  } else {
	      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	  }*/
    if (@mysqli_query($conn, $sql)){
    $msg = "<h1> Your enquiry has been submitted! </h1>";
  } else {
    $msg = "<h1> There seems to be a few errors with record submission, please fix the errors bellow and resubmit </h1> ";
  }

  function sanitiseInput($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}


	  mysqli_close($conn);
	  ?>





<!-- header tag containing the logo and the navigation bar-->
<?php include("include/header.php"); ?>
<?php include("include/popUp.php"); ?>

<div class="enquiry3">

<h1 id="table_id">Booking Confirmed</h1>

<?php
//get the value from enquiry.php
$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['street'] = $_POST['adrs'];
$city = $_POST['city'];
$state = $_POST['state'];
$phone= $_POST['cntc'];
$product= $_POST['sub_product'];
$subject = $_POST['subject'];
$postcode = $_POST['pCde'];
$comment = $_POST['desC'];
$ptime = $_POST['starttime'];
$pdate = $_POST['date'];
?>

<!--Arrange data into table -->
<!--You may change the way you want to display the data -->
<!--This is just an example -->
<div class="info_table">
<table >
<th>Description</th>
<th>Value</th>
<tr><td>First name</td><td><?php echo $fname;?></td></tr>
<tr><td>Last name</td><td><?php echo $lname;?></td></tr>
<tr><td>Email address</td><td><?php echo $email;?></td></tr>
<tr><td>Contact</td><td><?php echo $phone;?></td></tr>
<tr><td>Issue</td><td><?php echo $subject;?></td></tr>
<tr><td>Product</td><td><?php echo $product;?></td></tr>
<tr><td>Address</td><td><?php echo $street;?></td></tr>
<tr><td>State</td><td><?php echo $state;?></td></tr>
<tr><td>City</td><td><?php echo $city;?></td></tr>
<tr><td>Postal Code</td><td><?php echo $postcode;?></td></tr>
<tr><td>FeedBack</td><td><?php echo $comment;?></td></tr>
<tr><td>Preffered Time</td><td><?php echo $ptime;?></td></tr>
<tr><td>Preferred Date</td><td><?php echo $pdate;?></td></tr>
<br>

</table>
<br><br>
  <a href="welcome.php" id="ksw" text-decoration="none" title="Welcome"><h1 class="logo2" style="padding-top: 10px;" ><span class="kw2"style="font-size:35px;" translate="no">DONE</span></h1></a>
</div><br><br>

</div>


</div>

<?php include("include/footer.php"); ?>



</body>
</html>
