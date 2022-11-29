<?php include "includes/connectionString.php"?>
<?php include "includes/error.php"?>


<?php


    if (!$enterMatrix){

        die("You were not able to connect: " . mysqli_connect_errno());

    }else{

        if ( !isset($_POST['username'], $_POST['password']) ) {
	    die("Fill in both feilds NOW");}

        if ($stmt = $enterMatrix->prepare('SELECT Username, Password FROM Account_Info WHERE Username = ?')) {
    	$stmt->bind_param('s', $_POST['username']);
	    $stmt->execute();
    
	    $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($Username, $Password);
            $stmt->fetch();
            // Account is real
            if ($_POST['password'] === $Password) {
                session_start();
                //header("location userProfile.php");
                $_SESSION["username"] = $_POST["username"];
                header("Location: userProfile.php", true, 301);
            } else {
                // Incorrect password
                echo 'Incorrect username and/or password!';
            }
        } else {
            // Incorrect username
            echo 'Incorrect username and/or password!';
        }


        mysqli_stmt_close($stmt);
        mysqli_close($enterMatrix);
    }
    }

?>