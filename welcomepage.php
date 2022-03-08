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
	<!-- Creating the table to store the user details -->

<?php
	if (isset($_SESSION["name"])){
		$name = $_SESSION["name"];
	}

	else{
		$name = "user";
	}

?>

<?php include("include/header.php"); ?>
<?php include("include/popUp.php"); ?>


 <div class="disclaimer2">
	<h1 class="page_h1"> Welcome back, <?php echo $name; ?></h1>

<?php include("view_enquiries2.php");?>


</div>

<?php include("include/footer.php"); ?>


</body>
</html>
