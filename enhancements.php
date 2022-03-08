<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="description" content="Basic CSS elements"/>
	<meta name="keywords" content="HTML5, tags, CSS"/>
	<meta name="author" content="Minhajul Hossain Moyeen"/>
  <link href="styles/meatstyle.css" rel="stylesheet"/>
  <link href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"  rel="stylesheet">
<title>Enhancement Details</title>
</head>
<body class="backimg">

<!-- header tag containing the logo and the navigation bar-->
<?php include("include/header.php"); ?>
<?php include("include/popUp.php"); ?>


<section class="disclaimer2">
    <h1><strong>Assignment 1 Enhancements</strong></h1>
</section>

<section class="disclaimer2">
    <h2>Slideshow</h2>
    <p>The slideshow enhancement applied to the index page in the first section  cycles through 5 different images. The images are sourced from <a href="https://apmeats.co.uk/">apmeats.co.uk</a>, <a href="https://images.thefishsite.com/fish/articles/asia/chinese-seafood-market.jpeg?profile=article-inline@tablet">The Fish Site</a>,<a href="https://www.itl.cat/pngfile/big/173-1739766_meat-wallpaper.jpg">itel.cat</a>, <a href="https://i2.wp.com/southeastagnet.com/wp-content/uploads/2017/06/half-cow-chunks-fresh-hung-beef-2.jpg?resize=742%2C495">Southeast Ag Net</a> and <a href="https://nordefood.eu/wp-content/uploads/2020/08/Eco-crass-fed-beef.jpg">NordeFood</a>. The images are stored in class named container created using css properties. Input type was used to create the radio buttons and they were labeled with i1-i5. The property "display:none" was used to prevent the radio buttons to be seen from the screen and the radio buttons were linked to two side buttons created by the class (pre and nxt) on the left and right side.These two button controls the slide moving from right to left or left to right on pressing the buttons. For the radio buttons again a class named "dots" were created under the class nav to show the radio buttons on the container display along with the side buttons. Then for our images(slide_img class) we fixed the "z-index = -1"  and for the radio buttons linked to the left and right click buttons were set to be "z-index=9". So when the radio button or the side buttons are clicked the z-index property of the images becomes "z-index=9" and slidess the current image with the new one and when the click  is over or the radio buttons are unchecked the "z-index" by default becomes "-1" and the new images stays as the displayed image without moving. By pressing again the "z-index" becomes 9 for that image also and it slides to right or left and the next/previous image slides in and stay displayed as by default the value of "z-index" becomes -1 one again.<br>
    The property "cursor" was set to pointer for the class pre and nxt to change the mouse pointer into a pointing/clicking finger upon hovering over them.</p>
    <h3>Page Implementation</h3>
    <ul>
      <li><a href="index.html" target="_blank">HOMEPAGE </a></li>
    </ul>

    <h3>Citation</h3>
    <p>Idea and Guide taken from: <a href="https://www.youtube.com/watch?v=z74ExMz-cWU&t=1s">Web Decorator Youtube Channel</a></p>
    <p> Html and Css resources: <a href="https://www.w3schools.com/howto/howto_js_slideshow.asp"> W3Schools </a></p>
</section>


<section class="disclaimer2">
    <h2>Dropdown Menu(Nested Navigation Bar)</h2>
    <p>The unordered list or "ul" tag was used to create the structure of the whole navigation for the website.Another unordered list (ul) was nested with the main unordered list.In the CSS part of the dropdown menu in the main list for navigation bar, the "ul","li" and "a" tags were set to ‘inline-block’ to arrange it horizontally. Also the font, size, colour were adjusted and borderline was removed. For the hyperlink text-decoration was set to the value "none" to remove the underline. The nested unordered list(sub_menu) display was set to none to prevent the drop down list from showing all the time. And then in CSS for the nested list(sub_menu) we again set the display to "block" upon hovering over it so that the sub menu can only be seen upon hovering and made the position set to "absolute" so that the submenu is shown over the background. Then We added some horizontal bars to make the menus look separated. </p>
    <h3>Page Implementation</h3>
    <ul>
      <li><a href="index.html" target="_blank">HOMEPAGE </a></li>
      <li><a href="product1(redmeats).html" target="_blank">Red Meat</a>
      <li><a href="product2(bird).html" target="_blank">Bird Meat</a>
      <li><a href="product3(fish).html" target="_blank">Fish</a>
      <li><a href="product4(exotic).html" target="_blank">Exotic Meat</a>
      <li><a href="enquiry.html" target="_blank">ASK US </a></li>
      <li><a href="enhancements.html" target="_blank">ENHANCEMENTS</a></li>
      <li><a href="aboutme.html" target="_blank">ABOUT US</a></li>
      <li><a href="disclaimer.html" target="_blank">DISCLAIMER</a></li>
    </ul>

    <h3>Citation</h3>
    <p>Idea and Guide taken from: <a href="https://www.youtube.com/watch?v=wHFflWvii3M&t=682s">Easy Tutorials Youtube Channel</a></p>
    <p> Html and Css resources: <a href="https://www.w3schools.com"> W3Schools </a></p>
</section>


<section class="disclaimer2">
    <h2>Media Query</h2>
    <p>Media Query technique is the most used enhancement of this website. This technique uses a block of CSS properties to make a webpage responsive only if certain condition is true.This website uses this enhancement on every page of the website to make the website fluid and responsive when certain condition is true such as when the webpage resizes the contents of the webpage automatically resizes according to the media query property and fits itself according to the webpage.
       For example:
       <br> @media only screen and (max-width: 768px) {<br>
       table {width: 90%;}<br>
       }<br>
       For this media query technique for the index page when the screen shrinks and becomes 768px from the fullscreen then the table automatically resizes and adjusts itself into 90% width so that the layout stays intact.
       Another example: <br>
       @media only screen and (max-width: 610px){<br>
       .meat_knowledge1 p{<br>
           font-size:14px;<br>
         }<br>
        For this media query technique for the product pages article 1 the font-size of the content automatically adjusts itself into 14px according to the height of the article box so that the layout stays as before
      This technique has been used around the whole website to make it more responsive and fluid for the users and also more flexible for the different types of device users </p>

    <h3>Page Implementation</h3>
    <ul>
      <li><a href="index.html" target="_blank">HOMEPAGE </a></li>
      <li><a href="product1(redmeats).html" target="_blank">Red Meat</a>
      <li><a href="product2(bird).html" target="_blank">Bird Meat</a>
      <li><a href="product3(fish).html" target="_blank">Fish</a>
      <li><a href="product4(exotic).html" target="_blank">Exotic Meat</a>
      <li><a href="enquiry.html" target="_blank">ASK US </a></li>
      <li><a href="enhancements.html" target="_blank">ENHANCEMENTS</a></li>
      <li><a href="aboutme.html" target="_blank">ABOUT US</a></li>
      <li><a href="disclaimer.html" target="_blank">DISCLAIMER</a></li>
    </ul>

    <h3>Citation</h3>
    <p>Idea and Guide taken from:<a href="https://www.w3schools.com"> W3Schools </a></p>
    <p> Html and Css resources: <a href="https://www.w3schools.com"> W3Schools </a></p>
</section>


<section class="disclaimer2">
    <h2>Scroll Up Button</h2>
    <p>The Website has a floating button at the bottom right corner of the screen that is linked with the top of the page and scrolls the user back into the top upon being clicked. For this we just added a icon at the right bottom corner and linked it with the page and it's done</p>
    <h3>Page Implementation</h3>
    <ul>
      <li><a href="index.html" target="_blank">HOMEPAGE </a></li>
      <li><a href="product1(redmeats).html" target="_blank">Red Meat</a>
      <li><a href="product2(bird).html" target="_blank">Bird Meat</a>
      <li><a href="product3(fish).html" target="_blank">Fish</a>
      <li><a href="product4(exotic).html" target="_blank">Exotic Meat</a>
      <li><a href="enquiry.html" target="_blank">ASK US </a></li>
      <li><a href="enhancements.html" target="_blank">ENHANCEMENTS</a></li>
      <li><a href="aboutme.html" target="_blank">ABOUT US</a></li>
      <li><a href="disclaimer.html" target="_blank">DISCLAIMER</a></li>
    </ul>

    <h3>Citation</h3>
    <p>Idea and Guide taken from: <a href="https://www.youtube.com/watch?v=Vef9bxTilCU">DarkCode Youtube Channel</a></p>
    <p> Html and Css resources: <a href="https://www.w3schools.com"> W3Schools </a></p>
    <p>Icon resources: <a href="https://fontawesome.com/">Font Awesome</a></p>
</section>

<section class="disclaimer2">
    <h2>Google Maps</h2>
    <p>The Website has Google Maps directly linked to every of it's page so that the customers can easily locate us. For this enhancement the iframe tag was used at the bottom of the footer.Google map is framed inside a box and the exact location is pin pointed at the map by default and also the customers can access all the feature of google maps from the Google Maps frame.</p>
    <h3>Page Implementation</h3>
    <ul>
      <li><a href="index.html" target="_blank">HOMEPAGE </a></li>
      <li><a href="product1(redmeats).html" target="_blank">Red Meat</a>
      <li><a href="product2(bird).html" target="_blank">Bird Meat</a>
      <li><a href="product3(fish).html" target="_blank">Fish</a>
      <li><a href="product4(exotic).html" target="_blank">Exotic Meat</a>
      <li><a href="enquiry.html" target="_blank">ASK US </a></li>
      <li><a href="enhancements.html" target="_blank">ENHANCEMENTS</a></li>
      <li><a href="aboutme.html" target="_blank">ABOUT US</a></li>
      <li><a href="disclaimer.html" target="_blank">DISCLAIMER</a></li>
    </ul>

    <h3>Citation</h3>
    <p>Idea and Guide taken from: <a href="https://www.youtube.com/watch?v=KIC0OK9nKXY">Geek Tutorials Youtube Channel</a></p>
    <p> Html and Css resources: <a href="https://www.w3schools.com/howto/howto_js_slideshow.asp"> W3Schools </a></p>
    <p>Google Maps resources: <a href="https://www.google.com/maps/place/296,+Lorong+Tabuan+Dayak+6,+King+Centre,+93350+Kuching,+Sarawak/@1.5265579,110.356707,17z/data=!3m1!4b1!4m5!3m4!1s0x31fba70d915f6b2f:0x4a6fa38ac11b2e5b!8m2!3d1.5265579!4d110.3588957">Google Maps</a></p>
</section>


<section class="disclaimer2">
    <h2>Transitions</h2>
    <p>The website utilizes CSS transition properties throughout all the pages. In the index page, CSS transition property is used in the navigation bar,image slider, table section, footer specially everywhere the hover selector is used in CSS. Using this transition property, the section anchors can smoothly change  background colors, increase/decrease width or height or box-shadow or font-size, when users hover over them by taking a fixed amount of time. This enhances user’s experience when navigating the product pages increasing website usability. This gives the users an understanding  that the currently hovered over element is changeable.This also helps to build an interactive user friendly website. In the products,enquiry,aboutme,enhancements, disclaimer age when users hover over the contents the background either changes color, resizes, changes background blur, font-size or slides.This helps to give the webpage contents a 3D pop up like feel without only by using CSS and sets the speed curve for the effects. For example:

      <br><br>.disclaimer2 a{ <br>
        text-decoration: none; <br>
        color:#34495E; <br>
      } <br>

      .disclaimer2:hover a{<br>
        transition: 2s;<br>
        color:#EC7063;<br>
      }<br>
     The hyperlinks in the disclaimer2 class initially had color="#34495E" but after hovering the color changes after 2s instead of changing instantly because of the transition property.
      </p>
    <h3>Page Implementation</h3>
    <ul>
      <li><a href="index.html" target="_blank">HOMEPAGE </a></li>
      <li><a href="product1(redmeats).html" target="_blank">Red Meat</a>
      <li><a href="product2(bird).html" target="_blank">Bird Meat</a>
      <li><a href="product3(fish).html" target="_blank">Fish</a>
      <li><a href="product4(exotic).html" target="_blank">Exotic Meat</a>
      <li><a href="enquiry.html" target="_blank">ASK US </a></li>
      <li><a href="enhancements.html" target="_blank">ENHANCEMENTS</a></li>
      <li><a href="aboutme.html" target="_blank">ABOUT US</a></li>
      <li><a href="disclaimer.html" target="_blank">DISCLAIMER</a></li>
    </ul>

    <h3>Citation</h3>
    <p> Html and Css resources: <a href="https://www.w3schools.com"> W3Schools </a></p>

</section>


<?php include("include/footer.php"); ?>


</body>
</html>
