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

<!--code for html form tag-->


<form id="ask_us" method="post" novalidate="novalidate" action="enq_process.php" onsubmit="return validateForm();">
<div class="enquiry">

    <h1 class="title">
      Registration Form
    </h1>

    <div class="form">
      <!--code for text box using text input type-->




       <div class="inputfield">
          <label for="fname">First Name</label>
          <input type="text" name= "fname" id="fname"  class="input" title="Character A-Z and a-z only"  placeholder="Your First Name" > <!--maxlength="25" pattern="[A-Za-z]+" required="required" -->
       </div>
       <!--code for text box using text input type-->
        <div class="inputfield">
          <label  for="lname">Last Name</label>
          <input type="text" name= "lname" id="lname"  class="input"  title="Character A-Z and a-z only" placeholder="Your Last Name" >
       </div>
       <!--code for dropdown list using select tag-->
       <div class="inputfield">
             <label for="sr">Service Required</label>

         <select name="sub_product" class="input" id="sr" onchange="change()">
               <optgroup label="Stationary">
                 <script>productlist2()</script>
               </optgroup>

         </select>
         <!--<div class="topic">
           <select name= "sr" id="sr">
             <option value="">Select</option>
             <option value="male">Purchase products</option>
             <option value="female" >Enquiry</option>
           </select>
         </div>-->
      </div>
      <!--code for dropdown list using select tag-->
        <div class="inputfield">
          <label>Enquiry About</label>

          <select name="eT" class="input" id="eT" onchange="change()">
                <optgroup label="Stationary">
                  <script>productlist3()</script>
                </optgroup>

          </select>

        <!--  <div class="topic">
            <select name= "eT" id="eT">
              <option value="">Select</option>
              <option value="male">Red Meats</option>
              <option value="female">Bird Meats</option>
              <option value="female">Fish</option>
              <option value="female">Exotic Meats</option>
              <option value="female">Other</option>
            </select>
          </div>-->
       </div>

        <div class="inputfield">
          <label>Selected enquiry</label>
          <input type="text" class="input" id="sbj" name="subject" value=""/>
         </div>

       <div class="inputfield">
             <label for="sub_product">Enquiry Topic </label>

         <select name="sub_product" class="input" id="sub_product" onchange="change()">
               <optgroup label="Stationary">
                 <script>productlist1()</script>
               </optgroup>

         </select>

       </div>


          <div class="inputfield">
              <label for="subject" id="subjectLabel">RE: Enquiry on</label>
              <input type="text" class="input" name="subject" id="subject">
          </div>



          <!--code for text box using text input type-->
        <div class="inputfield">
          <label for="email">Email Address</label>
          <input type="text" class="input" id="email" name="email"  placeholder="e.g. something@domain.com" >   <!--pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="required"-->
       </div>
          <!--code for text box using text input type-->
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" name= "cntc" id="cntc"class="input" placeholder="123-45-67890" >
       </div>
       <!--fieldset to divide a particular field of the form-->
  <fieldset>

      <!--code for text box using textarea tag-->
    <legend>Address</legend><br>
      <div class="inputfield">
          <label>Street Address</label>
          <textarea class="textarea" name= "adrs" id="adrs" maxlength="40" placeholder="Enter your address here"></textarea>
       </div>

         <!--code for text box using textarea tag-->
       <div class="inputfield">
           <label>City/Town</label>
           <textarea class="textarea" name= "city" id="city" maxlength="20" placeholder="Enter your address here"></textarea>
        </div>

       <!--code for dropdown list using select tag-->
        <div class="inputfield">
          <label>State</label>
          <div class="topic">
            <select name= "state" id="state">
              <option value="1" >Select</option>
              <option value="male">Kuala Lumpur</option>
              <option value="female">Labuan</option>
              <option value="female">Putrjaya</option>
              <option value="female">Johor</option>
              <option value="female">Kedah</option>
              <option value="male">Kelantan</option>
              <option value="female">Malacca</option>
              <option value="female">Negeri Sembilan</option>
              <option value="female">Pahang</option>
              <option value="female">Perak</option>
              <option value="male">Pelris</option>
              <option value="female">Penang</option>
              <option value="female">Sabah</option>
              <option value="female">Sarawak</option>
              <option value="female">Selangor</option>
              <option value="female">Terengganu</option>
            </select>
          </div>
       </div>


       <!--code for text box using text input type-->
       <div class="inputfield">
           <label>Postal Code</label>
           <input type="text" name="pCde" id="pCde" class="input" placeholder="Postal code 5 digit" title="Five digit zip code"  >
        </div>
  </fieldset><br>


  <fieldset>
      <legend><strong>Preffered time</strong></legend>

<div class="inputfield">
  <label> Date: <input type="date" name="date" id="date"/></label>

</div>

<div class="inputfield">
  <label> Time: <input type="time" name="starttime" id="time"/></label>
  </div>

    </fieldset><br>


         <!--code for text box using textarea tag-->
      <div class="inputfield">
          <label>Description of Issue</label>
          <textarea class="textarea" name="desC" id="desC" placeholder="Enter comments here" ></textarea>
      </div>

      <!--conditional statement using checkbox input type-->
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" name="TandC" id="TandC" >
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div>





       <!--button type to store or reset data-->
      <div class="inputfield">
        <button type ="submit" value ="Submit" id="submit" class="btn" onclick="FormPreview()" >Register</button><br> &nbsp;
        <button type ="reset" value ="Reset" id="reset" class="btn">Reset</button>
      </div>
    </div>
</div>



</form>

<!--footer-->


	<?php include("include/footer.php"); ?>


</body>
</html>
