<?php

$servername = "lochnagar.abertay.ac.uk";
$dbusername = "sql2203162";
$dbpassword = "FHA4qFXCpnU4";
$dbname = "sql2203162";


$enterMatrix = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// //failed
// if (!$enterMatrix){
//     die("You were not able to connect: " . mysqli_connect_errno());
// }else{
//     echo "Database connected";
// }


//mysqli_close($enterMartix);

?>