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
<?php include("include/header.php"); ?>
<?php include("include/popUp.php"); ?>





<?php
//get value register.php
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
?>



<form id="bookform" method="post" action="enq_confirmed.php">
<!--keep the value as hidden-->
<!--so this value can pass to process.php-->
<input type="hidden" name="fname" value="<?php echo $fname; ?>">
<input type="hidden" name="lname" value="<?php echo $lname; ?>">
<input type="hidden" name="email" value="<?php echo $email; ?>">
<input type="hidden" name="cntc" value="<?php echo $phone; ?>">
<input type="hidden" name="sub_product" value="<?php echo $product; ?>">
<input type="hidden" name="subject" value="<?php echo $subject; ?>">
<input type="hidden" name="adrs" value="<?php echo $street; ?>">
<input type="hidden" name="state" value="<?php echo $state; ?>">
<input type="hidden" name="city" value="<?php echo $city; ?>">
<input type="hidden" name="pCde" value="<?php echo $postcode; ?>">
<input type="hidden" name="desC" value="<?php echo $comment; ?>">
<input type="hidden" name="date" value="<?php echo $pdate; ?>">
<input type="hidden" name="starttime" value="<?php echo $ptime; ?>">


<div class="disclaimer2">
	<fieldset>
		<legend>User Details</legend>
			<p>Your Name: <span id="confirm_name"><?php echo $fname; ?></span></p><hr>
			<p>Your Last Name: <span id="confirm_lname"><?php echo $lname; ?></span></p><hr>
			<p>Your Email: <span id="confirm_email"><?php echo $email; ?></span></p><hr>
			<p>Your Phone : <span id="confirm_contact"></span><?php echo $phone; ?></p><hr>
			<p>Selected Subject: <span id="confirm_sub"></span><?php echo $product; ?></p><hr>
			<p>Selected Product: <span id="confirm_product"></span><?php echo $subject; ?></p><hr>
			<p>Your Address: <span id="confirm_adrs"></span><?php echo $street; ?></p><hr>
			<p>Your State: <span id="confirm_state"></span><?php echo $state; ?></p><hr>
			<p>Your City: <span id="confirm_cty"></span><?php echo $city; ?></p><hr>
			<p>Your Postcode: <span id="confirm_pCde"></span><?php echo $postcode; ?></p><hr>
			<p>Description: <span id="confirm_des"></span><?php echo $comment; ?></p><hr>
			<p>Your Prefered Date: <span id="confirm_date"></span><?php echo $pdate; ?></p><hr>
			<p>Your Prefered Time: <span id="confirm_time"></span><?php echo $ptime; ?></p><hr>
	   	&nbsp; &nbsp;


      <input type="submit" value="Confirm Booking" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	  	<input type="button" value="Cancel" id="cancelButton" onclick="cancelBooking()">
 </fieldset>
</div>


      
</form>


<!--footer-->

<?php include("include/footer.php"); ?>

</body>
</html>
