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
	    <h1 class="logo"><span class="kw" translate="no">CUTLET</span></h1>

	    <!-- Navigation bar with nested unordered list to create a sub menu for products-->
	    <!-- sub menu drop down list enhancement referred to youtube channel "Easy Tutorials" link:-https://www.youtube.com/watch?v=wHFflWvii3M&t=665s-->
	    <nav>
	     <ul>
	        <li><a href="index.html" target="_blank">HOMEPAGE </a></li>
	        <li><a href="#" target="_blank">ENHANCEMENTS</a>
	          <div class="sub_menu2" onchange="droplists()">
	                <ul id="myList" onchange="droplists()">

	                     <script class="script_mod">

	                     var v = "Enhancements 1";

	                    var w = "Enhancements 2";

	                     var data = [v , w];


	                     var resultv =  data[0].link("enhancements.html");
	                     var resultw =  data[1].link("enhancements2.html");

	                     document.getElementById("myList").innerHTML = (resultv + resultw);

	                      </script>
	                </ul>
	         </div>
	        </li>
	        <li><a href="#" target="_blank">MEAT PRODUCTS</a>
	          <div class="sub_menu2">
	           <!--<ul>
	               <li><a href="product1(redmeats).html" target="_blank">Red Meat</a> &nbsp; <span class="bars"> | </span></li>
	               <li><a href="product2(bird).html" target="_blank">Bird Meat</a>  &nbsp; <span class="bars"> | </span></li>
	               <li><a href="product3(fish).html" target="_blank">Fish</a> &nbsp; <span class="bars"> | </span><br></li>
	               <li><a href="product4(exotic).html" target="_blank">Exotic Meat</a> &nbsp; <span class="bars"> |</span></li>
	           </ul>-->

	           <ul id="myList2" onchange="droplists1(x, y, a ,b)">

	                <script class="script_mod">
	                var x = "Red Meat";

	                var y = "Bird Meat";

	                var a = "Fish";

	                var b = "Exotic Meat";

	                var data = [x , y, a , b];




	                var resultx =  data[0].link("product1(redmeats).html");
	                var resulty =  data[1].link("product2(bird).html");
	                var resulta =  data[2].link("product3(fish).html");
	                var resultb =  data[3].link("product4(exotic).html");

	                document.getElementById("myList2").innerHTML = (resultx + resulty + resulta + resultb);
	                 </script>
	           </ul>
	         </div>
	        </li>
	        <li><a href="aboutme.html" target="_blank">ABOUT US</a></li>
	        <li><a href="disclaimer.html" target="_blank">DISCLAIMER</a></li>
	      </ul>
	    </nav>
	</header>


	<div class ="popup" >
	   <div class= "contentBox">
	     <div class ="cross_button"></div>
	      <div class= "imgbox">
	        <img src="images/butcher.png">
	      </div>
	      <div class="announcement">
	        <div class="annun">
	          <h3><span> Venison </span><br>
	          Available Now </h3>
	          <h2>10<sup>%</sup><span>off</span></h2>
	          <p>For the first 20 customers</p>
	          <a href="product4(exotic).html">Get the Deal</a>
	        </div>
	      </div>
	  </div>
	</div>


	<!-- code to add auto pop up in webpage
	idea sourced from  Online Tutorials https://www.youtube.com/watch?v=U2k4DWKt_FE-->

	<script>


	const popup = document.querySelector('.popup');
	const close = document.querySelector('.cross_button');

	window.onload = function(){
	  setTimeout(function(){
	    popup.style.display="block";

	}, 2000)
	}

	close.addEventListener('click', () => {
	popup.style.display="none";

	})

	</script>


	<a class="button_12" >
	<button type="submit" class="button_21" name="button">Translate Website<br><div id="google_translate_element" onchange="googleTranslateElementInit()"></div></button>
	 </a>



	 <div class="enquiry">


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

	<footer>

	  <a href="index.html" title="Our Homepage"><h1 class="logo"><span class="kw" translate="no">CUTLET</span></h1></a>

	  <div class="details" id="contact_order">

	  <div class="footer_menu">

	    <ul>
				<li><strong class="minimenu"><span class="kw" translate="no">CUTLET</span></strong></li>
				<li><a href="index.html" class="flinks">Home Page</a></li>
				<li><a href="enquiry.html" class="flinks">Enquiries</a></li>
				<li><a href="disclaimer.html" class="flinks">Disclaimer</a></li>
				<li><a href="enhancements.html" class="flinks">Enhancements</a></li>
			</ul>

			<ul>
				<li><strong class="minimenu">Products</strong></li>
				<li><a href="product1(redmeats).html" class="flinks">Red Meats</a></li>
				<li><a href="product2(bird).html" class="flinks">Bird Meats</a></li>
				<li><a href="product3(fish).html" class="flinks">Fish</a></li>
				<li><a href="product4(exotic).html" class="flinks">Exotic Meats</a></li>
			</ul>

			<ul>
				<li> <strong class="minimenu">About Us</strong> </li>
	      <li> <a href="aboutme.html" class="flinks">Author's Detail</a><br><br><br></li>
			</ul>


		</div>

	  <h2>Contact Us</h2>
	  <!--Contact details, icon download- https://www.flaticon.com/ -->
	  <p><a href="https://www.facebook.com/CutLet-100551645477090" target="_blank"><img src="images/facebook_icon.png" title="Visit Us on Facebook" alt="Our Facebook Link"/></a> &nbsp;
	     <a href="https://wa.me/qr/74LHPZBMWYZ6K1" target="_blank"><img src="images/whatsapp_icon.png" alt="Our whatsapp number" title="Contact Us on Whatsapp"/></a> &nbsp;
	     <a href="mailto:101230484@students.swinburne.edu.my" target="_blank"><img src="images/gmail.png" alt="Our gmail address" height="48" width="44" title="Contact Us via Email" /></a> &nbsp;
	     <a href="https://www.instagram.com/CutLet-100551645477090" target="_blank"><img src="images/instagram_icon.png" alt="Our Instagram Link" title="check Us on Instagram"/></a></p> &nbsp;
	     <img src="images/halal.png" title="WE ARE 100% HALAL" alt="Halal Products" height="48" width="44"/> &nbsp;
	  </div>

	<!--Enhancement Google map tab linking referred to Youtube Channel:- "Geek Tutorials" link:- https://www.youtube.com/watch?v=KIC0OK9nKXY -->
	  <div class="mapping" id="maps">
	    <h2>Our Address:</h2>
	    <p>296, Lorong Tabuan Dayak 6, King Centre, 93350, Kuching, Sarawak.</p>
	    <p>Or click below...</p>
	    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4026724120695!2d110.35643741457282!3d1.5263408988868885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba70d915f6b2f%3A0x4a6fa38ac11b2e5b!2s296%2C%20Lorong%20Tabuan%20Dayak%206%2C%20King%20Centre%2C%2093350%20Kuching%2C%20Sarawak!5e0!3m2!1sen!2smy!4v1617047646830!5m2!1sen!2smy" height="300"  loading="eager" ></iframe></p>
	  </div>

	  <div class="footer_acknowledgement">
	    <h3> Acknowledgements </h3>
	    <p> CUTLET would like to acknowledge the content usage from </p>
	    <a href="https://use.fontawesome.com/releases/v5.4.1/css/all.css " target="new_window" title="Click to visit their website" class="flinks"> Fontawesome</a> |
	    <a href="https://www.w3schools.com/html/html_forms.asp " target="new_window" title="Click to visit their website" class="flinks"> w3schools.com</a> |
	    <a href="https://www.flaticon.com/" target="new_window" title="Click to visit their website" class="flinks">FlatIcon</a> |
	        <a href="https://www.youtube.com/watch?v=wHFflWvii3M&t=665s " target="new_window" title="Click to visit their website" class="flinks"> Easy Tutorials Youtube</a>

	  </div>


		<p class="footer_credit">  Est. 2021 | Copyright &#169; CUTLET Butchery Co. |Email: <a href="mailto:101226535@students.swinburne.edu.my" class="ext_link" title="Email Dexter Ho"> 101230484@students.swinburne.edu.my</a> </p>

	  <div id="iconcredit">??Icons made by <a href="https://www.flaticon.com/authors/dinosoftlabs" title="DinosoftLabs">DinosoftLabs</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
	</footer>
	<!-- Enhancement scroll up button Youtube Channel:- "DarkCode" link:- https://www.youtube.com/watch?v=Vef9bxTilCU -->
	<div class="scrollbtn">
	<a href="#"> <i class="fas fa-arrow-up"></i> </a>
	</div>
	</body>
	</html>
