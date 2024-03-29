<?php include "includes/connectionString.php"?>
<?php include "includes/error.php"?>


<?php


    if (!$enterMatrix){

        die("You were not able to connect: " . mysqli_connect_errno());

    }else{

        if ( !isset($_POST['username'], $_POST['password']) ) {
	    die("Fill in both feilds NOW");}

        $secure_user = stripslashes(htmlspecialchars(trim($_POST['username'])));
        $secure_password = trim(htmlspecialchars($_POST['password']));

        if ($stmt = $enterMatrix->prepare('SELECT Username, Password FROM Account_Info WHERE Username = ?')) {
    	$stmt->bind_param('s', $secure_user);
	    $stmt->execute();
    
	    $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($Username, $Password);
            $stmt->fetch();
            // Account is real
          

            $password = $secure_password;
            if(password_verify($password, $Password)) 

            {
               
                session_start();
                //header("location userProfile.php");
                $_SESSION["username"] = $secure_user;
                setcookie("PHPSESSID", $_SESSION, time()+3200);  /* expire in 1 hour */
                header("Location: userProfile.php", true, 301);
                //echo $_SESSION['username'];
    
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