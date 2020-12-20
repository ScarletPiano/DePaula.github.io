//Copyright
/*global document: false */
function copyRight() {
    "use strict";
    var today = new Date.getFullYear();
    document.getElementById("cr").innerHTML =  "Andrea C. DePaula &copy 2020 - " + today;
}
function submitForm() {
   //get info from the form
    "use strict";
    var x = document.forms["comForm"]["userName"];
    var y = document.forms["comForm"]["comment"];
    if (x == "" || y == ""){
        alert("Either username or comment was left blank");
    }else{
        var frm = document.getElementsById('comForm');
        frm.submit(); // Submit
        frm.reset();  // Reset
    }
    return false; // Prevent page refresh
}
function submitForm2() {
   //get info from the form
    "use strict";
    var x = document.forms["emForm"]["email"];
    var y = document.forms["emForm"]["content"];
    if (x == "" || y == ""){
        alert("Either username or comment was left blank");
    }else{
        var frm = document.getElementsById('comForm');
        frm.submit(); // Submit
        frm.reset();  // Reset
    }
    return false; // Prevent page refresh
}
function hamburger() {
    "use strict";
    var check = document.getElementByClass("pages");
    var mobile = document.getElementByClass("mobile");
    if (mobile.style.display === "block") {
        if (check.style.display === "block") {
          check.style.display = "none";
        } 
        else {
          check.style.display = "block";
        }
    } else {
        check.style.display = "block";
    }
}
function a(){
    alert("test");
}