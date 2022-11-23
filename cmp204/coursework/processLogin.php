<?php "includes/connectionString.php"?>

<?php

    if (!$enterMatrix){

        die("You were not able to connect: " . mysqli_connect_errno());

    }else{

        echo "Database connected";
    
        $selectunameDB = "SELECT Username FROM Account_Info";
        $selectpwsDB = "SELECT Password FROM Account_Info";

        $result = mysqli_query($enterMatrix , $selectDB);

        $uname = $_POST['username'];

        $pws = $_POST['password'];

        if (mysqli_num_rows($result) > 0) {

            if($uname == mysqli_query($enterMartix, $selectunameDB) && $pws == mysqli_query($enterMartix, $selectpwsDB)){

                echo "Correct, lets log you in";
                //redirect to login

            }

        }else{

            echo "Unknown Credentials";

        };

        }

    mysqli_close($enterMartix);
    

?>