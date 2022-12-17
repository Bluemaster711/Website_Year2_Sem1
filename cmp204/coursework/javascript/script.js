

//used to greet incomming people
window.onload=load_greeting;
function load_greeting(){
const d = new Date()
var hour = d.getHours()
var greeting;

if (hour < 12) {
    greeting = "Good Morning\n";}
else if(hour > 12 && hour < 18){
    greeting = "Good Afternoon\n";}
else if(hour == 0){
  greeting = "It is past your bedtime"
}else{
  greeting = "Good Evening"
}

var para = document.createElement("p");
var node = document.createTextNode(greeting);
para.appendChild(node);
const element = document.getElementById("div_greet");
element.appendChild(para);}



//load random image gallary
window.onload=display_image;
function display_image(){
//<img src="images/logo.jpg" alt=”Logo” class="logo">

var photo1 = "images/randomgallary/" + make_img_name() + ".png" ;
var photo2 = "images/randomgallary/" + make_img_name() + ".jpg" ;

var img = document.createElement("img");
img.src = photo1
document.getElementById('div_img').appendChild(img)

var img = document.createElement("img");
img.src = photo2
document.getElementById('div_img2').appendChild(img)

}
//create letter a or b
function letter (){
  // var letter = (Math.floor(Math.random() * 2) + 1);

  const d = new Date()
  var letter = d.getSeconds()

  if (Math.random() > 0.5){
    return "a"
  }else{
    return "b"}
}
//make img name like aa, ab bb etc..
function make_img_name(){
  var ph = letter();
  var oto = letter();


  var photo = ph + oto;
  return photo;
}






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
      $(this).css("color", "skyblue");
    });
  });




//when button with id playlyrics is clicked run function
$("#playlyrics").click(function(){
  //load and take lyrics
  $("#lyrics").load("txtfiles/lyrics.txt", function(responseTxt, statusTxt, xhr){
    //check if it worked
    if(statusTxt == "success")
      //alert("External content loaded successfully!");
    if(statusTxt == "error")
    //error report
      alert("Error: " + xhr.status + ": " + xhr.statusText);
  });
});



//random paragraph using math.random and AJAX 
//document.getElementById("randbutton").onclick=randpara;

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

};