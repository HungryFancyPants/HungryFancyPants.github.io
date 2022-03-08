"use strict";
/*get variables from form and check rules*/
function validate(){
 var errMsg = ""; /* stores the error message */
 var result = true; /* assumes no errors */
 if(result){
 alert("Booking Successfully");
 }else{
 alert("Booking Failed");
 }
 return result; //if false the information will not be sent to the server
}
function getBooking(){
 //if sessionStorage for username is not empty
 if(sessionStorage.firstname != undefined){
 //confirmation text
 document.getElementById("confirm_name").textContent = sessionStorage.firstname;
 document.getElementById("confirm_lname").textContent =sessionStorage.lastname;
 document.getElementById("confirm_email").textContent =sessionStorage.email;
 document.getElementById("confirm_contact").textContent =sessionStorage.contact;
 document.getElementById("confirm_sub").textContent =sessionStorage.subject;
 document.getElementById("confirm_product").textContent =sessionStorage.product;
 document.getElementById("confirm_adrs").textContent =sessionStorage.street;
 document.getElementById("confirm_state").textContent =sessionStorage.state;
 document.getElementById("confirm_cty").textContent =sessionStorage.city;
 document.getElementById("confirm_pCde").textContent =sessionStorage.postal;
 document.getElementById("confirm_des").textContent =sessionStorage.description;
 document.getElementById("confirm_date").textContent =sessionStorage.date;
 document.getElementById("confirm_time").textContent =sessionStorage.time;


 }
}
function cancelBooking(){
 window.location = "enquiry.php";
}
function init () {

 //call the getBooking() function.
 getBooking();

 // link the variable to the HTML element
 var bookForm = document.getElementById("bookform");
 var cancelBooking = document.getElementById("cancelButton");

 //check which button is being click.
 if(bookForm){
 bookForm.onsubmit = validate;
 }else{
 cancelBooking.onclick = cancelBooking();
 }
}
window.onload = init;
