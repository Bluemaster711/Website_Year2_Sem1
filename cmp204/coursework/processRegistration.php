<?php include "includes/connectionString.php"?>
<?php include "includes/error.php"?>


<?php

    if (!$enterMatrix){

        die("You were not able to connect: " . mysqli_connect_errno());

    }else{

        if ( !isset($_POST['username'], $_POST['password']) ) {
        die("Fill in both feilds NOW");}

        $stmt = $enterMatrix->prepare('SELECT Username FROM Account_Info WHERE Username = ?');
        $stmt->bind_param("s", $_POST["username"]);
        $stmt->execute();

        $stmt_result = $stmt->get_result();

        if($stmt_result->num_rows>0){
            die("Username unavalible");
        }else{

            $stmt_insert = $enterMatrix->prepare("INSERT INTO Account_Info(Username, Password) VALUES (?, ?)");
            $stmt_insert->bind_param("ss", $_POST["username"], $_POST["password"]);
            $stmt_insert->execute();

            session_start();
            //header("location userProfile.php");
            $_SESSION["username"] = $_POST["username"];
            header("Location: userProfile.php", true, 301);
        

            mysqli_stmt_close($stmt_insert);
            mysqli_close($enterMatrix);
        }

    }

?>