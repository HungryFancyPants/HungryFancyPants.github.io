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
<title>Our Exotic Meat Section</title>
</head>
<body>


    <?php include("include/header.php"); ?>



<article class="artc1">
  <!--article containing image and paragraph-->
  <!--image sourced from https://www.abelandcole.co.uk/media/1420_13533_z.jpg-->
  <img src="images/venison.jpg" alt="Boneless Vension Meat(Diced)" id="img1"/>
  <div class="meat_knowledge1" id="venison">
  <h2>VENISON</h2>
  <p>Wonderfully lean, it’s great for casseroles, stews and especially for burger patties.Serve with your favourite red and a smug smile.</p>
  <div class="price"><p> Price. 800.00 <span class="currency">MYR</span><span class="amount">(per kilo)</span> </p>
  </div>
  <a class="button_1" onclick="storeitem('VENISON')">
 <button type="submit" class="button_2" name="button">Enquiry</button>
</a>
  </div>
</article> <br><br>

<article class="artc2">
  <!--article containing image and paragraph-->
  <!--image sourced from https://www.dachan.com/files/%E6%96%B0%E8%B3%87%E6%96%99%E5%A4%BE/DSC00389.jpg-->
  <img src="images/blackchicken.jpg" alt="Fresh meats" id="img2"/>
  <div class="meat_knowledge2">
  <h2>BLACK KAMPUNG CHICKEN</h2>
  <p>Fresh Organic Black Chicken :Black chicken is chock full of antioxidants which helps it gain its superfood status. Antioxidants fight free radicals in the body and keep you healthy from illnesses such as the common cold.</p>
     <div class="price"><p> Price. 50.00 <span class="currency">MYR</span><span class="amount">(per kilo)</span> </p>
     </div>
     <a class="button_1" onclick="storeitem('BLACK KAMPUNG CHICKEN')">
    <button type="submit" class="button_2" name="button">Enquiry</button>
  </a>
  </div>
</article><br><br>

<article class="artc3">
  <!--article containing image and paragraph-->
  <!--image sourced from https://www.bjsrawpetfood.com/wp-content/uploads/products/whole-rabbit.jpg-->
  <img src="images/rabbit.jpg" alt="Fresh meats" id="img3"/>
  <div class="meat_knowledge3">
  <h2>RABBIT MEAT</h2>
  <p>Rabbit's leaner meat is the result of a truly wild lifestyle and a natural diet.It is delicious and nutritious all the hard prep work is done for you they are oven-ready, skinned and paunched. </p>
      <div class="price"><p> Price. 80.00 <span class="currency">MYR</span><span class="amount">(per 250g)</span> </p>
     </div>
     <a class="button_1" onclick="storeitem('RABBIT MEAT')">
    <button type="submit" class="button_2" name="button">Enquiry</button>
  </a>
  </div>
</article> <br><br>

<article class="artc4">
  <!--article containing image and paragraph-->
  <!--image sourced from https://piratagroup.hk/wp-content/uploads/2019/10/Crab_4_web.jpg-->
  <img src="images/alaskcrab.jpg" alt="Fresh meats" id="img4" />
  <div class="meat_knowledge4">
  <h2>ALASKAN KING CRAB</h2>
  <p>At swinburne Sarawak, not only will you <strong>grow academically</strong>, you'll also develop as an individual. Make new friends, experience the culture and cuisines of the people or even participate in the <em>lifestyle</em> of the locals.There is something for everyone. We look forward to welcoming you!</p>
      <div class="price"><p> Price. 1080.00 <span class="currency">MYR</span><span class="amount">(per 250g)</span> </p>
      </div>
      <a class="button_1" onclick="storeitem('ALASKAN KING CRAB')">
     <button type="submit" class="button_2" name="button">Enquiry</button>
   </a>
  </div>
</article> <br><br>

<?php include("include/calculator.php"); ?>

<!--footer-->

    <?php include("include/footer.php"); ?>
</body>
</html>
