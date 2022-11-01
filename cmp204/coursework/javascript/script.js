window.onload=load_greeting;


function load_greeting(){

const d = new Date()

var hour = d.getHours()

if (hour < 12) {
    greeting = "Good Morning";}
else{
    greeting = "Good Afternoon";}

//alert(greeting);

var para = document.createElement("p");
var node = document.createTextNode(greeting);
para.appendChild(node);
const element = document.getElementById("div_greet");
element.appendChild(para);

}

$(document).ready(function(){
    $("#flip").hover(function(){
        $("#panel").slideToggle("show");
    });
});

