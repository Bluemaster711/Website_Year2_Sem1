<?php
   if(isset($_COOKIE["PHPSESSID"])) {
        session_start();
        session_destroy();  
        header("Location: login.php");
   }
?>