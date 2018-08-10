//  _____                   _       
// |_   _|   ___     ___   | |  ___ 
//   | |    / _ \   / _ \  | | / __|
//   | |   | (_) | | (_) | | | \__ \
//   |_|    \___/   \___/  |_| |___/

// set modal w3 nat
// im = img url
// modWidth : sample "300px"
// modText text to write on top
function setModal(img, modWidth,modText) {
  let dom = document.getElementById("mod-img");
  dom.src = img;
  dom.style.width = modWidth;
  let dom2 = document.getElementById('modText')
  dom2.textContent= modText;

  document.getElementById('mod').style.display = 'block';
  console.log(modText, dom2);
}


// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

/*  ----------.----------.----------.----------.----------
for the footer to go  up
When the user clicks on the button, scroll to the top of the document
*/
function goTop() {
  window.scrollTo({
  top: 0,
  behavior: "smooth"
});
}


/* ----------.----------.----------.----------.----------
include an htlm file 
 * usage : <div w3-include-html="content.html"></div>  
 */
function includeHTML() {
  let z, i, elmnt, file, xhttp;
  /*loop through a collection of all HTML elements:*/
  z = document.getElementsByTagName("*");
  for (let i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /*make an HTTP request using the attribute value as the file name:*/
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
          if (this.status == 200) {
            elmnt.innerHTML = this.responseText;
          }
          if (this.status == 404) {
            elmnt.innerHTML = "Page not found.";
          }
          /*remove the attribute, and call this function once more:*/
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }
      xhttp.open("GET", file, true);
      xhttp.send();
      /*exit the function:*/
      return;
    }
  }
}