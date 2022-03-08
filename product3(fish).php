<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="description" content="Basic CSS elements"/>
	<meta name="keywords" content="HTML5, tags, CSS"/>
	<meta name="author" content="Minhajul Hossain Moyeen"/>
  <link href="styles/meatstyle.css" rel="stylesheet"/>
  <link href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"  rel="stylesheet">
  <script src="script.js"></script>
  <script src="enhancements.js"></script>
<title>Catch of the day(Fish)</title>
</head>
<body>


    <?php include("include/header.php"); ?>
    <?php include("include/popUp.php"); ?>

<article class="artc1">
  <!--article containing image and paragraph-->
  <!--image sourced from https://www.tankfullyfresh.com/image/cache/catalog/products/Seabass%20Whole-1000x1000.jpg-->
  <img src="images/seabass.jpg" alt="Fresh meats" id="img1"/>
  <div class="meat_knowledge1">
  <h2>SEABASS</h2>
  <p>Our seabass is collected freshly caught from the local fisherman and we like to maintain a bigger size fish so that our customers can experience the proper taste of a fresh fish.</p>
  <div class="price"><p> Price. 800.00 <span class="currency">MYR</span><span class="amount">(per kilo)</span> </p>
  </div>
  <a class="button_1" onclick="storeitem('SEABASS')">
 <button type="submit" class="button_2" name="button">Enquiry</button>
</a>
  </div>

</article> <br><br>

<article class="artc2">
  <!--article containing image and paragraph-->
  <!--image sourced from https://s3.envato.com/files/280513089/41277_.jpg-->
  <img src="images/salmon.jpg" alt="Fresh meats" id="img2"/>
  <div class="meat_knowledge2">
  <h2>SALMON FILLET</h2>
  <p>Fresh Sashimi Grade "Atlantic Salmon" fillet that we collect from the local farms every week as wild salmon may contain high risks of containing parasites. No cleaning or prep is needed, we provide ready to make sushi.</p><br>
        <div class="price"><p> Price. 15.50 <span class="currency">MYR</span><span class="amount">(per 190g)</span> </p>
        </div>
        <a class="button_1" onclick="storeitem('SALMON FILLET')">
       <button type="submit" class="button_2" name="button">Enquiry</button>
     </a>
  </div>

</article><br><br>

<article class="artc3">
  <!--article containing image and paragraph-->
  <!--image sourced from https://img.freepik.com/free-photo/fresh-raw-quail-set-top-view-dark-wooden-table_249006-3381.jpg?size=626&ext=jpg-->
  <img src="images/sotong.jpg" alt="Fresh meats" id="img3"/>
  <div class="meat_knowledge3">
  <h2>SQUID</h2>
  <p>Fresh squid/sotong should have a clean ocean scent, and it should look shiny and plump, not deflated.That's why we get our sotong supply everday early morning</p>
  <div class="price"><p> Price. 800.00 <span class="currency">MYR</span><span class="amount">(per kilo)</span> </p>
  </div>
  <a class="button_1" onclick="storeitem('SQUID')">
 <button type="submit" class="button_2" name="button">Enquiry</button>
</a>
  </div>
</article> <br><br>

<article class="artc4">
  <!--article containing image and paragraph-->
  <!--image sourced from https://img.freepik.com/free-photo/fresh-raw-quail-set-top-view-dark-wooden-table_249006-3381.jpg?size=626&ext=jpg-->
  <img src="images/1491764.jpg" alt="Fresh meats" id="img4"/>
  <div class="meat_knowledge4">
  <h2>BOSTON LOBSTER</h2>
  <p>Bostonians are proud of their lobsters. In fact, many believe that the best place to have a lobster is in New England.In order to provide the service we collect our lobsters alive and sell them fresh.</p><br>
    <div class="price"><p> Price. 85.50 <span class="currency">MYR</span><span class="amount">(per kilo)</span> </p>
    </div>
    <a class="button_1" onclick="storeitem('BOSTON LOBSTER')">
   <button type="submit" class="button_2" name="button">Enquiry</button>
 </a>
 </div>

</article> <br><br>


<?php include("include/calculator.php"); ?>

<!--footer-->

    <?php include("include/footer.php"); ?>
</body>
</html>
