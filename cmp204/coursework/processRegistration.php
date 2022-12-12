<?php include "includes/connectionString.php"?>
<?php include "includes/error.php"?>


<?php

    if (!$enterMatrix){

        die("You were not able to connect: " . mysqli_connect_errno());

    }else{

        if ( !isset($_POST['username'], $_POST['password'], $_POST['TandC']) ) {
        die("All Feilds need to be filled in and the term and conditions need to be accepted to create an account with us");}


        $secure_user = stripslashes(htmlspecialchars(trim($_POST['username'])));
        $secure_password = trim(htmlspecialchars($_POST['password']));

        $stmt = $enterMatrix->prepare('SELECT Username FROM Account_Info WHERE Username = ?');
        $stmt->bind_param("s", $secure_user);
        $stmt->execute();

        $stmt_result = $stmt->get_result();

        if($stmt_result->num_rows>0){
            die("Username unavalible");
        }else{

            $stmt_insert = $enterMatrix->prepare("INSERT INTO Account_Info(Username, Password) VALUES (?, ?)");

            $hashToStoreInDb = password_hash($secure_password, PASSWORD_DEFAULT);
            $stmt_insert->bind_param("ss", $secure_user, $hashToStoreInDb);
            $stmt_insert->execute();

            session_start();
            //header("location userProfile.php");
            $_SESSION["username"] = $secure_user;
            setcookie("PHPSESSID", $_SESSION, time(+3200));  /* expire in 1 hour */
            header("Location: userProfile.php", true, 301);
        

            mysqli_stmt_close($stmt_insert);
            mysqli_close($enterMatrix);
        }

    }

?>