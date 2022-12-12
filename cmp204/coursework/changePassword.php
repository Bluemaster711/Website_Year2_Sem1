<?php include "includes/connectionString.php"?>
<?php include "includes/error.php"?>


<?php

    if (!$enterMatrix){

        die("You were not able to connect: " . mysqli_connect_errno());

    }else{

        if ( !isset($_POST['password'], $_POST['newpassword']) ) 
        {
        die("Fill in both feilds to change your password");
        }

        if(isset($_COOKIE["PHPSESSID"])) {
            session_start();
        }

        $secure_password = trim(htmlspecialchars($_POST['password']));
        $secure_newpassword = trim(htmlspecialchars($_POST['newpassword']));

        if ($stmt = $enterMatrix->prepare('SELECT Username, Password FROM Account_Info WHERE Username = ?')) {
            $stmt->bind_param('s', $_SESSION['username']);
            $stmt->execute();
        
            $stmt->store_result();
            
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($Username, $Password);
                $stmt->fetch();
              
                $password = $secure_password;
                if(password_verify($password, $Password)) 
                {
                   
                    if($newpassword = $enterMatrix->prepare('UPDATE Account_Info SET Password  =? WHERE Username =?')){
                        $hashToStoreInDb = password_hash($secure_newpassword, PASSWORD_DEFAULT);
                        $newpassword->bind_param('ss', $hashToStoreInDb, $_SESSION['username']);
                        $newpassword->execute();
                        $newpassword->store_result();
                        header("Location: userProfile.php", true, 301);
                    
                    }else { die("password did not reset");}


                } else {
                    // Incorrect password
                    die('Incorrect username and/or password!');
                }

            } else {
                // Incorrect username
                die('Incorrect username and/or password!');
            }
    
    
            mysqli_stmt_close($stmt);
            mysqli_close($enterMatrix);
        }
        }
?>