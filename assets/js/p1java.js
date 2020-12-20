//date and time
function copyRight(){
var today = new Date();
document.getElementById("userTime").innerHTML = today;
//Copyright
var year = today.getFullYear();
document.getElementById("cr").innerHTML =  "Andrea C. DePaula &copy 2020 - " + year;
}
//window.onbeforeunload = function() {
//    return("Clicking 'OK' will take you to an external site, are you sure you would like to continue?");
//}   