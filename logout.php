


<?php
//Executes the codes if users click logout in the navigation bar
	session_start();
	session_unset(); //unset all session variables
	session_destroy(); //destroys the current session
?>

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


<h1 class="registerh"> Logout </h1>
<div class="enquiry3">
<table class="tablecenter">
	<tr>
		<td class="tdcenter"> <p> You have been logged out. </p> </td>
	</tr>

	<tr>
		<td class="tdcenter"> <a href="index.php" class="bttn"> Return to home page </a> </td>
	</tr>

</table>
</div>

</div>

<?php include("include/footer.php"); ?>


</body>
</html>
