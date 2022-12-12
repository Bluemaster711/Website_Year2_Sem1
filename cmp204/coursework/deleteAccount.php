<?php include "includes/connectionString.php"?>
<?php include "includes/error.php"?>


<?php


    if (!$enterMatrix){

        die("You were not able to connect: " . mysqli_connect_errno());

    }else{

        if ( !isset($_POST['password'], $_POST['confirm']) ) {
	    die("Fill in all feilds please");}
        

        if(isset($_COOKIE["PHPSESSID"])) {
	        session_start();
        }

        $secure_user = $_SESSION['username'];
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
                $stmt = $enterMatrix->prepare("DELETE FROM Account_Info WHERE Username=?");
                $stmt->bind_param("s", $_SESSION["username"]);
                $stmt->execute();
            
                //$_SESSION = array();
                session_destroy();
                setcookie("PHPSESSID", time()+60);  /* expire in 1 minute */
                header('Location: index.php');
    
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