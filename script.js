

//Noor
//idea sourced from: https://tecadmin.net/get-current-date-time-javascript/
function displayDateTime(){
	var date = new Date();
	var day = date.getDate();
	var month = date.getMonth() + 1;
	var year = date.getFullYear();
	if (month < 10) month = "0" + month;
	if (day < 10) day = "0" + day;
	var today = year + "-" + month + "-" + day;

	var currentTime = date.getHours() + ':' + date.getMinutes();

	document.getElementById('date').value = today;
	document.getElementById('time').value = currentTime;
}









/*This function is used for drop downlist ppopulation in nav bar
idea sourced from [https://1bestcsharp.blogspot.com/2017/03/javascript-populate-select-option-from-array.html] */

function productlist2() {
    var select = document.getElementById("sr");

    var options = ["Select","Purchase Products", "Enquiry"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}




/*This function is used for drop downlist ppopulation in nav bar
idea sourced from [https://1bestcsharp.blogspot.com/2017/03/javascript-populate-select-option-from-array.html] */


function productlist3() {
    var select = document.getElementById("eT");

    var options = ["Select","Red Meats", "Bird Meats", "Fish", "Exotic Meats"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}






/*This function is used for form validation
idea sourced from weekly demos and w3schools.com [https://www.w3schools.com/js/js_validation.asp]*/

var gErrorMsg = "";


function validateForm() {

  "use strict"; //directive to ensure variables are declared
   var isAllOK = false;
   gErrorMsg = ""; //reset error message

   //functions to check every data and validate
   var nameOK = checkfName();
   var lastNameOK = checkLname();
   var required_service = checkSerReq();
   var enquiry_about = enquiryAbout();
   var enquiry_topic= enquiryTopic();
   var re_enquiry_confirmation= re_enuiry();
   var emailOK= checkEmail();
   var street_address= checkStreetAdd();
   var check_city= checkCity();
   var check_state= checkState();
   var check_contact = checkPhone();
   var check_postal=checkPostal();
   var check_description = checkDescription();


   var product = document.getElementById("sub_product").value;
   sessionStorage.product = sub_product;

   if (nameOK && lastNameOK && required_service && enquiry_about && enquiry_topic &&  re_enquiry_confirmation && emailOK && street_address && check_city && check_state && check_contact && check_postal && check_description){
   isAllOK = true;
   }
   else{
   alert(gErrorMsg); //display concatenated error messages
   gErrorMsg = ""; //reset error msg
   isAllOK = false;
   }
   return isAllOK;
  }



function checkfName(){
	var name = document.getElementById("fname").value;
	var pattern = /[a-zA-Z]+$/;
	var nameOK = true;
	if((name.length == 0) || (name.length>25)){
		gErrorMsg = gErrorMsg + "Your first name cannot be blank or more than 25 Characters\n";
		nameOK = false;
	}

	else{
		if(!pattern.test(name)){
			gErrorMsg = gErrorMsg + "Your first name must only contain alpha characters\n";
			nameOK = false;
		}
	}
	return nameOK;
}

function checkLname(){
  var name = document.getElementById("lname").value;
	var pattern = /[a-zA-Z]+$/;
	var nameOK = true;
	if((name.length == 0) || (name.length>25)){
		gErrorMsg = gErrorMsg + "Your last name cannot be blank or more than 25 Characters\n";
		nameOK = false;
	}
	else{
		if(!pattern.test(name)){
			gErrorMsg = gErrorMsg + "Your last name must only contain alpha characters\n";
			nameOK = false;
		}
	}
	return nameOK;
}

function checkSerReq(){
	var selected = false;
	var serviceReq = document.getElementById("sr").value;
	if(serviceReq !="Select"){
		selected = true;
	}
	else{
		selected = false;
		gErrorMsg = gErrorMsg + "Please select one of the following services.\n";
	}
	return selected;
}

function enquiryAbout(){
	var selected = false;
	var enquiryT = document.getElementById("eT").value;
	if(enquiryT !="Select"){
		selected = true;
	}
	else{
		selected = false;
		gErrorMsg = gErrorMsg + "Please select one of the following choices.\n";
	}
	return selected;
}


function enquiryTopic(){
	var selected = false;
	var enquiryT = document.getElementById("sub_product").value;
	if(enquiryT !="Select"){
		selected = true;
	}
	else{
		selected = false;
		gErrorMsg = gErrorMsg + "Please select one of the following sub-topic for enquiry.\n";
	}
	return selected;
}

function re_enuiry(){
	var name = document.getElementById("subject").value;
	var nameOK = true;
	if((name == "")){
		gErrorMsg = gErrorMsg + "You need to select a subtopic from the previous section\n";
		nameOK = false;
	}
	return nameOK;
}

function checkEmail(){
	var email = document.getElementById("email");
	var result = false;
	var pattern = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-za-zA-Z0-9.-]{1,4}$/;
	if (pattern.test(email.value)){
		result=true;
	}
	else{
		result = false;
	gErrorMsg = gErrorMsg + "Please enter a valid email address\n";
	}
	return result;
}

function checkPhone(){
	var name = document.getElementById("cntc").value;
	var pattern =  /^[0-9]+$/;
	var nameOK = true;
	if(!name.length == 10){
		gErrorMsg = gErrorMsg + "Please provide a valid contact number must be 10 numeric numbers\n";
		nameOK = false;
	}
	else{
		if(!pattern.test(name)){
			gErrorMsg = gErrorMsg + "Please provide a valid phone number\n"
			nameOK = false;
		}
	}
	return nameOK;
}

function checkPostal(){
	var pCode = document.getElementById("pCde").value;
	var pattern = /^[0-9]+$/;
	var pCodeOK = true;
	if(!pCode.length == 5){
		gErrorMsg = gErrorMsg + "Please provide a valid postal code(not more or less than 5 digits)\n";
		pCodeOK = false;
	}
	else{
		if(!pattern.test(pCode)){
			gErrorMsg = gErrorMsg + "Your postal code  must only contain all the numbers with proper format (5 char max)\n";
		  pCodeOK = false;
		}
	}
	return pCodeOK;
}






function checkStreetAdd(){
	var streetAd = document.getElementById("adrs");
	var streetAdOK = true;
	if((streetAd.value== "")){
		gErrorMsg = gErrorMsg + "Street address needs to be filled\n";
		streetaddOK = false;
	}

	return streetAdOK;
}

function checkCity(){
	var city = document.getElementById("city").value;
	var pattern = /^[a-zA-Z]+$/;
	var cityOK = true;
	if((city.length == 0)){
		gErrorMsg = gErrorMsg + "City cannot be blank\n";
		cityOK = false;
	}
	else{
		if(!pattern.test(city)){
			gErrorMsg = gErrorMsg + "City name must only contain alpha characters\n";
			cityOK = false;
		}
	}
	return cityOK;
}

function checkState(){
	var selected = true;
	var state = document.getElementById("state").value;
	if(state ==""){
		selected = false;
    gErrorMsg = gErrorMsg + "Please select one of the states\n";
	}
	else{
		selected = true;
	}
	return selected;
}


function checkDescription(){
	var des = document.getElementById("desC");
	var desOK = true;
	if(des.value== ""){
		gErrorMsg = gErrorMsg + "Description needs to be filled\n";
		desOK = false;
	}

	return desOK;
}


/*This function is used for drop downlist ppopulation in nav bar
idea sourced from [https://1bestcsharp.blogspot.com/2017/03/javascript-populate-select-option-from-array.html] */


function enhanc_dropdown(){
  var array1 = ["Enhancements 1", "Enhancements 2"];
  var array2 = ["enhancements.html", "enhancements2.html"];
  var service =document.getElementsByClassName("myList").value;
  var value ="";

  for (var x=0; x<array2.length; x++)
     if (service == array1[x]){
       value = array2[x];
       window.location.replace(value);
     }
}


/*This function is used for dat trasfer between pages
idea sourced from weekly demos */

function productlist0() {
    var select = document.getElementById("sub_product");

    var options = ["Select","BEEF TENDERLOIN (Red Meat)", "T-BONE STEAK (Red Meat)", "LAMB CHOPS (Red Meat)", "FRESH GROUND BEEF (Red Meat)", "WHOLE CHICKEN (Bird Meat)", "WHOLE DUCK (Bird Meat)", "QUAILS (Bird Meat)", "WHOLE TURKEY (Bird Meat)", "SEABASS (Fish)", "SALMON FILLET (Fish)", "SQUID (Fish)", "BOSTON LOBSTET (Fish)", "VENISON (Exotic Meat)", "BLACK KAMPUNG CHICKEN (Exotic Meat)", "RABBIT MEAT (Exotic Meat)", "ALASKAN KING CRAB (Exotic Meat)","OTHERS"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}




/*This function is used for data trasfer inside pages
idea sourced from weekly demos */


//Store individual product page into sessionStorage
function storeProduct(productName) {
    var options = ["Pen", "Pencils", "Eraser", "Rulers"];

    options.forEach(array);

    function array(value) {
        if (value == productName) {
            sessionStorage.productIndex = options.indexOf(value);
        }
    }
}

//Fill the subject field with the value of product
function storeSub() {
    document.getElementById("sub_product").selectedIndex = sessionStorage.productIndex;

    var product = document.getElementById("sub_product").value;

    sessionStorage.subject = sub_product;
    document.getElementById("subject").value = sessionStorage.subject;
}

//Storing first optgroup into array

function productlist1() {
    var select = document.getElementById("sub_product");

    var options = ["Select","BEEF TENDERLOIN (Red Meat)", "T-BONE STEAK (Red Meat)", "LAMB CHOPS (Red Meat)", "FRESH GROUND BEEF (Red Meat)", "WHOLE CHICKEN (Bird Meat)", "WHOLE DUCK (Bird Meat)", "QUAILS (Bird Meat)", "WHOLE TURKEY (Bird Meat)", "SEABASS (Fish)", "SALMON FILLET (Fish)", "SQUID (Fish)", "BOSTON LOBSTET (Fish)", "VENISON (Exotic Meat)", "BLACK KAMPUNG CHICKEN (Exotic Meat)", "RABBIT MEAT (Exotic Meat)", "ALASKAN KING CRAB (Exotic Meat)","OTHERS"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}

//change the value of the session storage according to the new product selected by user

function change() {
    var product = document.getElementById("sub_product").value;
    sessionStorage.product = product;
    document.getElementById("subject").value = sessionStorage.product;
}




/*This function is used for dat trasfer between pages
idea sourced from weekly demos */

function storeitem(item_id) {
    sessionStorage.setItem("item_id", item_id);
    window.location.replace("enquiry.html");
}
function displayitem() {
    document.getElementById("sbj").value = "RE: Enquiry on " + sessionStorage.getItem("item_id");
}


function init() {
    var formElement = document.getElementById("ask_us");
    formElement.onsubmit = validateForm;
    displayitem();

}



window.onload =init;
