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
<title>Our Red Meat Section</title>
</head>
<body>

<!-- header tag containing the logo and the navigation bar-->
<header>

    <?php include("include/header.php"); ?>
    <?php include("include/popUp.php"); ?>

<article class="artc1">

  <!--article containing image and paragraph-->
  <!--image sourced from https://www.godfreys.co/ekmps/shops/fgodfrey/images/free-range-whole-beef-fillet-335-p.jpg-->
  <img src="images/beeftend2.jpg" alt="Fresh meats" id="img1"/>
  <div class="meat_knowledge1">
  <h2>BEEF TENDERLOIN</h2>
  <p>The Tenderloin is the source of Tenderloin Steak or Filet Mignon.We provide grass fed beef meat to ensure you get lean, tender and juicy chunks of beef in a healthy way</p>
      <div class="price"><p> Price. 130.00 <span class="currency">MYR</span><span class="amount">(per kilo)</span> </p>
      </div>
      <a class="button_1" herf="enquiry.php" onclick="storeitem('BEEF TENDERLOIN')">
      <button type="submit" class="button_2" name="button">Enquiry</button>
    </a>
  </div>
</article> <br><br>

<article class="artc2">
     <!--article containing image and paragraph-->
     <!--image sourced from https://i.pinimg.com/originals/82/71/7a/82717a02d2608f1684462b93f4991788.jpg-->
  <img src="images/tbone.jpg" alt="Fresh meats" id="img2"/>
  <div class="meat_knowledge2">
  <h2>T-BONE STEAK</h2>
  <p>Everyone loves a good t-bone steak. But a good quality steak can only provide the best steak experience.That's why we maintain our quality to ensure the best possible steak by providing grass fed bull meat and storing the meat in proper temperature.</p><br>
         <div class="price"><p> Price. 100.00 <span class="currency">MYR</span><span class="amount">(per kilo)</span> </p>
         </div>
         <a class="button_1" onclick="storeitem('T-BONE STEAK')">
         <button type="submit" class="button_2" name="button">Enquiry</button>
       </a>
  </div>
</article><br><br>

<article class="artc3">
  <!--article containing image and paragraph-->
  <!--image sourced from https://foodandwine.ie/uploads/article/2019/4/2214/getty_lamb_chops_raw_main.jpg-->
  <img src="images/lambc.jpg" alt="Fresh meats" id="img3"/>
  <div class="meat_knowledge3">
  <h2>LAMB CHOPS</h2>
  <p>Lamb chops are one of the most tender and juiciest meat out there that comes from the ribs of the lamb. We always provide grass fed young lambs to make sure the meat is really tender and fresh. </p>
     <div class="price"><p> Price. 100.00 <span class="currency">MYR</span><span class="amount">(per kilo)</span> </p>
     </div>
      <a class="button_1" onclick="storeitem('LAMB CHOPS')">
      <button type="submit" class="button_2" name="button">Enquiry</button>
    </a>
  </div>
</article> <br><br>

<article class="artc4">
  <!--article containing image and paragraph-->
  <!--image sourced from https://meat-shop.shophere.lk/wp-content/uploads/2020/05/MINCED-BEEF.jpg-->
  <img src="images/grndmeat.jpg" alt="Fresh meats" id="img4"/>
  <div class="meat_knowledge4">
  <h2>FRESH GROUND BEEF</h2>
  <p>A burger/suasage/sandwich/ bacon always makes us happy but the meat products we get from the meat industry are processed. We freshly grind the beef everyday to serve our customer fresh and pure meat products.You can also buy your preffered cut/animal meat and then minch it instantly.</p>
      <div class="price"><p> Price. 100.00 <span class="currency">MYR</span><span class="amount">(per kilo)</span> </p>
      </div>
      <a class="button_1" onclick="storeitem('FRESH GROUND BEEF')">
     <button type="submit" class="button_2" name="button">Enquiry</button>
   </a>
  </div>
</article> <br><br>


<?php include("include/calculator.php"); ?>

<!--footer-->

    <?php include("include/footer.php"); ?>
</body>
</html>
