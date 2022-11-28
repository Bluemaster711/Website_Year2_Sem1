<?php "includes/connectionString.php"?>

<?php

    if (!$enterMatrix){

        die("You were not able to connect: " . mysqli_connect_errno());

    }else{

        echo "Database connected";
    
        $selectDB = "SELECT Username and Password FROM Account_Info";

        $result = mysqli_query($enterMatrix , $selectDB);

        $uname = $_POST['username'];

        $pws = $_POST['password'];

        if (mysqli_num_rows($result) > 0) {

            if(($result['Username'] == $uname) && ($uname !="") && ($result['Password'] == $pwd) && ($pwd !=""));

                echo "Correct, lets log you in";
                header("location: userProfile.php");
                //redirect to login

            }
        

        else{

            echo "Unknown Credentials";
            header("location: index.php");

        };

        }

    mysqli_close($enterMartix);
    

?>