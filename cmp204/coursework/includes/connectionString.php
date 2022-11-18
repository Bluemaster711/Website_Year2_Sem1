<?php

$servername = "lochnagar.abertay.ac.uk";
$dbusername = "sqlXXXXXXX";
$dbpassword = "password_here";
$dbname = "sqlXXXXXXX";


$enterMatrix = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

//failed
if (!$enterMatrix){
    die("You were not able to connect: " . mysqli_connect_errno());
}


mysqli_close($enterMartix);

?>