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
<title>Our Bird Meat Section</title>
</head>
<body>


    <?php include("include/header.php"); ?>
    <?php include("include/popUp.php"); ?>




<article class="artc1">
  <!--article containing image and paragraph-->
  <!--image sourced from https://apmeats.co.uk/pub/media/catalog/product/cache/8fbab15fb93528096337e3b010f3f1e6/w/h/whole_chicken_2.jpg-->
  <img src="images/chkn.jpg" alt="Fresh meats" id="img1"/>
  <div class="meat_knowledge1">
  <h2>WHOLE CHICKEN</h2>
  <p>We believe the best bird meat is the freshest bird meat.We butcher our chicken fresh and serve to our customers so they can taste the best quality meat that frozen meat can not provide. </p>
     <div class="price"><p> Price. 13.00 <span class="currency">MYR</span><span class="amount">(per kilo)</span> </p>
     </div>
     <a class="button_1" onclick="storeitem('WHOLE CHICKEN')">
    <button type="submit" class="button_2" name="button">Enquiry</button>
  </a>
  </div>
</article> <br><br>

<article class="artc2">
  <!--article containing image and paragraph-->
  <!--image sourced from https://image.freepik.com/free-photo/raw-whole-duck-with-pepper-rosemary_89816-16587.jpg-->
  <img src="images/duck.jpg" alt="Fresh meats" id="img2"/>
  <div class="meat_knowledge2">
  <h2>WHOLE DUCK</h2>
  <p>We Asians love duck and the duck has the more fat layers will taste the best. We butcher our duck after a certain age to ensure the juciest duck meat to our customers.We believe our ducks are one of our best meat products.</p><br>
       <div class="price"><p> Price. 29.00 <span class="currency">MYR</span><span class="amount">(per kilo)</span> </p>
       </div>
       <a class="button_1" onclick="storeitem('WHOLE DUCK')">
      <button type="submit" class="button_2" name="button">Enquiry</button>
    </a>
  </div>
</article><br><br>

<article class="artc3">
  <!--article containing image and paragraph-->
  <!--image sourced from https://img.freepik.com/free-photo/fresh-raw-quail-set-top-view-dark-wooden-table_249006-3381.jpg?size=626&ext=jpg-->
  <img src="images/quail.jpg" alt="Fresh meats" id="img3"/>
  <div class="meat_knowledge3">
  <h2>QUAILS</h2>
  <p>Small yet tasty, quail meat is one the tastiest delicacies out there.Because of their size they are hard to process but we are providing 100% processed and ready to cook quails.</p>
  <div class="price"><p> Price. 33.00 <span class="currency">MYR</span><span class="amount">(per kilo)</span> </p>
  </div>
  <a class="button_1" onclick="storeitem('QUAILS')">
 <button type="submit" class="button_2" name="button">Enquiry</button>
</a>
  </div>
</article> <br><br>

<article class="artc4">
  <!--article containing image and paragraph-->
  <!--image sourced from https://www.thesmithfieldbutcher.com/wp-content/uploads/2020/10/Whole-Turkey.png-->
  <img src="images/turk.png" alt="Fresh meats" id="img4"/>
  <div class="meat_knowledge4">
  <h2>WHOLE TURKEY</h2>
  <p>A good old turkey roast can bring the whole family together and we believe a free ranged turkey will obviously taste better than any farmed turkey. We raise the turkey in free range to get the best quality meat possible for us to provide. </p><br>
     <div class="price"><p> Price. 53.00 <span class="currency">MYR</span><span class="amount">(per kilo)</span> </p>
     </div>
     <a class="button_1" onclick="storeitem('WHOLE TURKEY')">
    <button type="submit" class="button_2" name="button">Enquiry</button>
  </a>
  </div>
</article> <br><br>


<?php include("include/calculator.php"); ?>

<!--footer-->

    <?php include("include/footer.php"); ?>
</body>
</html>
