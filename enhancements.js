





function droplists3(){

var list = document.getElementById("myList3");


data.forEach((item) => {
  var li = document.createElement("li");
  li.innerText = item;
  list.appendChild(li);
});

}




function droplists2(){


var list = document.getElementById("myList2");

data.forEach((item) => {
  var li = document.createElement("li");
  li.innerText = item;
  list.appendChild(li);
});


}


function droplists(){

var list = document.getElementById("myList");


data.forEach((item) => {
  var li = document.createElement("li");
  li.innerText = item;
  list.appendChild(li);
});

}



/* code used to add google translator to the webpage */
//idea sourced from: WWeb Dot [https://www.youtube.com/watch?v=aa2zFr_JCVc]



function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}


(function()
{var gtConstEvalStartTime = new Date();

/*

Copyright The Closure Library Authors.
SPDX-License-Identifier: Apache-2.0
*/
var h=this||self;
function l(a,b){function c(){}c.prototype=b.prototype;a.i=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.h=function(g,f,k){for(var e=Array(arguments.length-2),d=2;d<arguments.length;d++)e[d-2]=arguments[d];return b.prototype[f].apply(g,e)}}

function m(a){return a};

function n(a){if(Error.captureStackTrace)Error.captureStackTrace(this,n);else{var b=Error().stack;b&&(this.stack=b)}a&&(this.message=String(a))}l(n,Error);n.prototype.name="CustomError";

function p(a,b){a=a.split("%s");for(var c="",g=a.length-1,f=0;f<g;f++)c+=a[f]+(f<b.length?b[f]:"%s");
n.call(this,c+a[g])}l(p,n);p.prototype.name="AssertionError";
function q(a,b){throw new p("Failure"+(a?": "+a:""),Array.prototype.slice.call(arguments,1));};
var r;
function u(a,b){this.g=b===v?a:""}u.prototype.toString=function(){return this.g+""};
var v={};var w=null,x=/^[\w+/_-]+[=]{0,2}$/;
function y(a){return a.querySelector?(a=a.querySelector("script[nonce]"))&&(a=a.nonce||a.getAttribute("nonce"))&&x.test(a)?a:"":""};
function z(a){var b=document.getElementsByTagName("head")[0];b||(b=document.body.parentNode.appendChild(document.createElement("head")));b.appendChild(a)}
function _loadJs(a){var b=document;var c="SCRIPT";
"application/xhtml+xml"===b.contentType&&(c=c.toLowerCase());c=b.createElement(c);
c.type="text/javascript";
c.charset="UTF-8";if(void 0===r){b=null;var g=h.trustedTypes;

  if(g&&g.createPolicy)

  {try{b=g.createPolicy("goog#html",{createHTML:m,createScript:m,createScriptURL:m})}catch(t){h.console&&h.console.error(t.message)}r=b}

  else r=b}a=(b=r)?b.createScriptURL(a):a;a=new u(a,v);a:
  {try{var f=c&&c.ownerDocument,k=f&&(f.defaultView||f.parentWindow);k=k||h;
if(k.Element&&k.Location){var e=k;break a}}catch(t){}e=null}if(e&&"undefined"!=typeof e.HTMLScriptElement&&(!c||!(c instanceof e.HTMLScriptElement)&&(c instanceof e.Location||c instanceof e.Element))){e=typeof c;if("object"==e&&null!=c||"function"==e)try{var d=c.constructor.displayName||c.constructor.name||Object.prototype.toString.call(c)}catch(t){d="<object could not be stringified>"}else d=void 0===c?"undefined":null===c?"null":typeof c;q("Argument is not a %s (or a non-Element, non-Location mock); got: %s",
"HTMLScriptElement",d)}a instanceof u&&a.constructor===u?d=a.g:(d=typeof a,q("expected object of type TrustedResourceUrl, got '"+a+"' of type "+("object"!=d?d:a?Array.isArray(a)?"array":d:"null")),d="type_error:TrustedResourceUrl");c.src=d;(d=c.ownerDocument&&c.ownerDocument.defaultView)&&d!=h?d=y(d.document):(null===w&&(w=y(h.document)),d=w);d&&c.setAttribute("nonce",d);z(c)}
function _loadCss(a){var b=document.createElement("link");b.type="text/css";b.rel="stylesheet";b.charset="UTF-8";b.href=a;z(b)}function _isNS(a){a=a.split(".");for(var b=window,c=0;c<a.length;++c)if(!(b=b[a[c]]))return!1;return!0}function _setupNS(a){a=a.split(".");for(var b=window,c=0;c<a.length;++c)b.hasOwnProperty?b.hasOwnProperty(a[c])?b=b[a[c]]:b=b[a[c]]={}:b=b[a[c]]||(b[a[c]]={});return b}
window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk='450197.3765508957';var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();










/* code used to create automatic video slide show  */
//idea sourced from: Coding with nick [https://www.youtube.com/watch?v=DpHi9Ruu8R4]

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}



var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
  var slides = document.getElementsByClassName("mySlides");
   for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
   }
   slideIndex++;
   if (slideIndex > slides.length) { slideIndex = 1 }
    slides[slideIndex - 1].style.display = "block";
   setTimeout(showSlides, 9000); // Change image every 9 seconds

}






/* code used to show current date and time  */
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
