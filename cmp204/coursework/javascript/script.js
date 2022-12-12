//used to greet incomming people
window.onload=load_greeting;
function load_greeting(){
const d = new Date()
var hour = d.getHours()

if (hour < 12) {
    greeting = "Good Morning\n";}
else if(hour > 12 && hour < 18){
    greeting = "Good Afternoon\n";}
else if(hour == 0){
  greetin = "It is past your bedtime"
}else{
  greeting = "Good Evening"
}

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

//nav glows when hovered over 
$(document).ready(function(){
    $("#flip, a").hover(function(){
      $(this).css("color", "red");
      }, function(){
      $(this).css("color", "blue");
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