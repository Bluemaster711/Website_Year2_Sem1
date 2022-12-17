
<?php include "includes/connectionString.php"?>
<?php include "includes/error.php"?>


<?php

    if (!$enterMatrix){

        die("You were not able to connect: " . mysqli_connect_errno());

    }else{
        session_start();
        if ( !isset($_POST['titlegig'], $_POST['locationgig'], $_POST['dategig'], $_SESSION['username']) ) {
        die("All Feilds need to be filled and you must also be logged in, to add a gig");}


        $secure_title = stripslashes(htmlspecialchars($_POST['titlegig']));
        $secure_location = stripslashes(htmlspecialchars($_POST['locationgig']));
        $secure_date = $_POST['dategig'];
     


        if ($stmt = $enterMatrix->prepare('SELECT ID FROM Account_Info WHERE Username = ?')) {
            $stmt->bind_param('s', $_SESSION['username']);
            $stmt->execute();
        
            $stmt->store_result();

            $stmt->bind_result($ID);
            $stmt->fetch();



            $stmt_check = $enterMatrix->prepare('SELECT title FROM gig_info WHERE title=?');
            $stmt_check->bind_param('s', $secure_title);
            $stmt_check->execute();

            $stmt_result = $stmt_check->get_result();

            if($stmt_result->num_rows>0){
                die("title used");
            }else{
            
                $stmt_insert = $enterMatrix->prepare("INSERT INTO gig_info (id, title, location, date) VALUES (?, ?, ?, ?)");

                $stmt_insert->bind_param('ssss', $ID, $secure_title, $secure_location, $secure_date);
                $stmt_insert->execute();


                header("Location: tourInfo.php", true, 301);
            

                mysqli_stmt_close($stmt_insert);
                mysqli_close($enterMatrix);
            }
        }else{
            die("error");
        }
    }

?>
