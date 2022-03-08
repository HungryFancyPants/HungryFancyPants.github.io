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
  <script src="enq_process.js"></script>
  <script src="enhancements.js"></script>
  <script src="cal_enhancements.js"></script>

<title>Visit CUTLET to get fresh meat</title>
</head>
<body >

  <?php include("include/header.php"); ?>
  <?php include("include/popUp.php"); ?>



<!--section for the body article(left float) and aside css table(right float)-->

<section id="slideandtable">

<article>
  <div class="artimg">
  <img src="images/1491764.jpg" alt="Fresh meats" id="img0"/>
<!--image sourced from https://wallpaperaccess.com/seafood-->
</div>
  <div class="meat_knowledge">
  <h2 id="indexh2" >Our Meat Theory</h2>
  <p id="indexp">Based on our experience we present you the meat theory that will give u a better understanding on why should you buy fresh meats.The total meat experiene depends on different factors which controls the taste and the effect of meat on your body.We try to maintain those factors at <strong>BUTCHER</strong>.Factors you should consider before buying meat are:  </P>
     <ol>
       <li>Choose freshly butchered animal meat and avoid stored meat.</li>
       <li>Choose grass fed animal or free ranged bird meat.</li>
       <li>Check the freshness of fish and if it's sashimi grade.</li>
       <li>Avoid buginh processed meat products</li>
       <li>Choose met products only after knowing how they are made</li>
     </ol>
</div>
</article> <br>



<aside id="sidetable">



<div class="table-box">
  <div class="table-head">
    <div class="table-cell first-cell">
          <p>Important Information</p>
    </div>
    <div class="table-cell">
          <p>Details</p>
    </div>
    <div class="table-cell last-cell">
        <p>Available</p>
    </div>
    </div>


<div class="table-row">
    <div class="table-cell first-cell">
       <p>Saturday -Thursday (Business hours)</p>
    </div>
    <div class="table-cell">
       <p>7am -5pm</p>
    </div>
    <div class="table-cell last-cell">
      <p>-</p>
    </div>
</div>

<div class="table-row">
    <div class="table-cell first-cell">
       <p>Friday</p>
    </div>
    <div class="table-cell">
       <p>7am-12pm<br>3pm-5pm</p>
    </div>
    <div class="table-cell last-cell">
        <p>-</p>
    </div>
</div>

<div class="table-row">
    <div class="table-cell first-cell">
       <p>Exotic Meat Available</p>
    </div>
    <div class="table-cell">
       <p>Black Chicken and King Crab</p>
    </div>
    <div class="table-cell last-cell">
      <p>Whole Year</p>
    </div>
</div>

<div class="table-row">
    <div class="table-cell first-cell">
       <p>Exotic Meat Available</p>
    </div>
    <div class="table-cell">
       <p>Rabbits</p>
    </div>
    <div class="table-cell last-cell">
      <p>First two weeks every month</p>
    </div>
</div>

<div class="table-row">
    <div class="table-cell first-cell">
       <p>Exotic Meat Available</p>
    </div>
    <div class="table-cell">
       <p>Venison</p>
    </div>
    <div class="table-cell last-cell">
      <p>October - April</p>
    </div>
</div>
</div>
</aside>
</section>


<!--section to contain the images for the slide show-->
<!--Enhancement reference: Youtube channel: "Web Decorator" link: "https://www.youtube.com/watch?v=z74ExMz-cWU&t=1s"-->
<section>
  <div class="container">

    <input type="radio" id="i1" name="images" checked />
    <input type="radio" id="i2" name="images" />
    <input type="radio" id="i3" name="images" />
    <input type="radio" id="i4" name="images" />
    <input type="radio" id="i5" name="images" />

    <div class="slide_img" id="one">

        <img src="images/half-cow-chunks-fresh-hung-beef-2.jpg " alt="Fresh beef">
<!--image sourced from: https://i2.wp.com/southeastagnet.com/wp-content/uploads/2017/06/half-cow-chunks-fresh-hung-beef-2.jpg?resize=742%2C495-->
          <label class="prev" for="i1"><span>&#x2039;</span></label>
          <label class="next" for="i3"><span>&#x203a;</span></label>

    </div>

    <div class="slide_img" id="two">

        <img src="images/Eco-crass-fed-beef.jpg" alt="Grass fed cows">
<!--image sourced from:https://nordefood.eu/wp-content/uploads/2020/08/Eco-crass-fed-beef.jpg-->
          <label class="prev" for="i5"><span>&#x2039;</span></label>
          <label class="next" for="i2"><span>&#x203a;</span></label>

    </div>

    <div class="slide_img" id="three">
        <img src="images/itl.cat_meat-wallpaper_1739766.png" alt="Fresh meats">
<!--image sourced from:https://www.itl.cat/pngfile/big/173-1739766_meat-wallpaper.jpg-->
          <label class="prev" for="i2"><span>&#x2039;</span></label>
          <label class="next" for="i4"><span>&#x203a;</span></label>
    </div>

    <div class="slide_img" id="four">
        <img src="images/chinese-seafood-market.jpg" alt="Fresh fish">
<!--image sourced from: https://images.thefishsite.com/fish/articles/asia/chinese-seafood-market.jpeg?profile=article-inline@tablet-->
          <label class="prev" for="i3"><span>&#x2039;</span></label>
          <label class="next" for="i5"><span>&#x203a;</span></label>
    </div>

    <div class="slide_img" id="five">
        <img src="images/whole_chicken_2.jpg" alt="Fresh chicken">
<!--image sourced from: https://apmeats.co.uk/pub/media/catalog/product/cache/8fbab15fb93528096337e3b010f3f1e6/w/h/whole_chicken_2.jpg-->
          <label class="prev" for="i4"><span>&#x2039;</span></label>
          <label class="next" for="i1"><span>&#x203a;</span></label>

    </div>

    <div id="nav_slide">
      <label for="i1" class="dots" id="dot1"></label>
      <label for="i2" class="dots" id="dot2"></label>
      <label for="i3" class="dots" id="dot3"></label>
      <label for="i4" class="dots" id="dot4"></label>
      <label for="i5" class="dots" id="dot5"></label>
    </div>

  </div>

</section>





<!--section for the FAQ and answer drop down table-->

<section class="faqsection">
  <div class="box">
<p class="heading">FAQs</p>
<div class="faqs">
  <details>
     <summary>What is <strong>CUTLET</strong>?</summary>
     <p class="anstext"><strong>CUTLET</strong> is a modern butcher shop with a dream to provide our customers the best meat experiences.Our footsteps started from <em>2019</em> and ever since we are spreading the love with good quality meats.The owner started this dream after he realised most of the people are getting frozen and processed meat. The owner grew up in country where meat freshly cut and sold 90% of the time, for the frozen and processed meat experience was not good enough.So, he started with a goal to let people know how the freshness of the meat affects the taste.</p>
  </details>
  <details>
     <summary>Why are you called <strong>CUTLET</strong>?</summary>
     <p class="anstext">As it is a butcher shop we thought of a name that will emphasis on what we sell and the same time it will attract people.Thus we came up with the name <strong>CUTLET</strong> which refers to meat chop.</p>
  </details>
  <details>
     <summary>Are the meat products halal?</summary>
     <p class="anstext">Yes, all of our products are butchered in <strong>Halal(permissible)</strong> way to ensure the halal meat and we are halal certified by the <em>Malaysian Halal Certification Authority</em>.</p>
  </details>
  <details>
     <summary>Where is your shop?</summary>
     <p class="anstext">Click on this icon to find us on google maps <a href="#maps"><img src="images/map.png" alt="Map link"/></a></p>
  </details>
  <details>
     <summary>How much is the shipping charge?</summary>
     <p class="anstext"> The details re given below:</p>
    <ol>
       <li>The shipping charge is free for the areas between the 1km of our shop radius. </li>
       <li>The shipping charge is free for any amount of purchase above Rm. 1000 inside kuching.</li>
       <li>The shipping charge is RM. 25 for any amount of purchase below Rm. 1000 inside kuching.</li>
       <li>The shipping charge is RM. 120 for upto the purchase of Rm. 2000 outside kuching (after that for per kilo extra charge of RM.10 will be added).</li>
     </ol>
  </details>
  <details>
     <summary>How to order online?</summary>
     <p class="anstext">Contact us <a href="#contact_order">Here</a> or submit a form with your order description from <a href="enquiry.html">Here</a></p>
  </details>
  <details>
     <summary>Is the exotic meat available all the time?</summary>
     <p class="anstext">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </details>
  <details>
     <summary>Do we need to pay for grounding our meat?</summary>
     <p class="anstext">No extra charge is added for grounding or mincing the meat.</p>
  </details>
</div>
</div>
</section>



<section class="sidetable2">



  <table class="table-box">

    <caption class="tablecap">Event Updating Table</caption>

    <tr class="table-head">
      <th class="table-cell first-cell">
            <p id="table_offer">Our Upcoming Events</p>
      </th>
    </tr>

    <tr class="table-row">
        <td class="table-cell ">
           <p>Saturday - Monday (Business hours)</p>
        </td>
        <td class="table-cell">
           <p> 15&#37; Discount On All Bird Meat</p>
        </td>
    </tr>

  <tr class="table-row">
    <td class="table-cell">
       <p>Tuesday - Wednesday (Depends on Stock)</p>
    </td>
    <td class="table-cell">
       <p>20&#37; Discount on Rabbit Meat </p>
    </td>
  </tr>

  <tr class="table-row">
    <td class="table-cell ">
      <p>Thursday - Saturday (With every purchase)</p>
    </td>
    <td class="table-cell">
       <p>Free 150g of Fresh Suasage</p>
    </td>
  </tr>

  </table>


</section>

    <?php include("include/footer.php"); ?>

</body>
</html>
