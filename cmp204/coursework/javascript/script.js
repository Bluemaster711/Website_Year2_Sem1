//used to greet incomming people
window.onload=load_greeting;
function load_greeting(){
const d = new Date()
var hour = d.getHours()

if (hour < 12) {
    greeting = "Good Morning";}
else{
    greeting = "Good Afternoon";}

var para = document.createElement("p");
var node = document.createTextNode(greeting);
para.appendChild(node);
const element = document.getElementById("div_greet");
element.appendChild(para);}



//used for creating intratctive nav
$(document).ready(function(){
    $("#flip").hover(function(){
        $("#panel").slideToggle("show");
    });
});



//random paragraph using math.random and AJAX 
document.getElementById("randbutton").onclick=randpara;

function randpara() {

	var xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
    	
    	document.getElementById("randtext").innerHTML = this.responseText;
    }
  };
  
  var num = (Math.floor(Math.random() * 5) + 1).toString();
  const exstend = ".txt";
  var finalfile = num + exstend;
  xhttp.open("GET", "txtfiles/" + finalfile, true);
  
  xhttp.send();

//   fetch("txtfiles/" + finalfile)
//     .then((response) => {
//         response.text()
//     })
//     .then((text) => {
//         document.getElementById("randtext").innerHTML = text;
//     });

}