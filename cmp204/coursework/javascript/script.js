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



$(document).ready(function(){
    $("#flip").hover(function(){
        $("#panel").slideToggle("show");
    });
});



document.getElementById("randbutton").onclick=randpara;



//loadDoc function
function randpara() {
	
	//set-up the XMLHttpRequest object- gets data from the server behind the scenes
	var xhttp = new XMLHttpRequest();
	
	//whenever the state changes, this function is called
	xhttp.onreadystatechange = function() {
	
	//if the state happens to equal to 4 (request is finished/ready) and the HTTP status code is 200 (ok), do something to the page
    if (this.readyState == 4 && this.status == 200) {
    	
    	
    	//do something to the moreText div on the page
    	//notice the responseText is stuff returned by the XMLHttpRequest
    	document.getElementById("randtext").innerHTML = this.responseText;
    }//end if
  };//end function
  

  var num = str(Math.floor(Math.random() * 5 +1));
  const exstend = ".txt";
  var finalfile = num + exstend;

  //get request to server, find file.txt, true= asynchronous
  xhttp.open("GET", "txtfiles/" + finalfile, true);
  
  
  //send request to server
  xhttp.send();
}