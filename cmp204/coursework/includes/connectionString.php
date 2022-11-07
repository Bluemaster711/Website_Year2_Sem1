<?php

$servername = "lochnagar.abertay.ac.uk";
$dbusername = "sqlXXXXXXX";
$dbpassword = "password_here";
$dbname = "sqlXXXXXXX";


$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

mysqli_close($conn);

?>