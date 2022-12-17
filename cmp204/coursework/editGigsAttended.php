<?php include "includes/connectionString.php"?>
<?php include "includes/error.php"?>


<?php

    if (!$enterMatrix){

        die("You were not able to connect: " . mysqli_connect_errno());

    }else{

        if(isset($_COOKIE["PHPSESSID"])) {
            session_start();
        }
        if ( !isset($_POST['oldtitlegig'], $_SESSION['username']) ) 
        {
        die("Error possible logging and/or title");
        }
     
        if(isset($_POST['titlegig'])){
            $secure_title = stripslashes(htmlspecialchars($_POST['titlegig']));
            $secure_oldtitle = stripslashes(htmlspecialchars($_POST['oldtitlegig']));


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
                    die("title used");}


                else if($newelement = $enterMatrix->prepare('UPDATE gig_info SET title  = ? WHERE id =? AND title =?')){

                    $newelement->bind_param('sss', $secure_title, $ID, $secure_oldtitle);
                    $newelement->execute();
                    $newelement->store_result();
                    header("Location: tourInfo.php", true, 301);
                
                }else { die("failed to change");}

            }
        }

        if(isset($_POST['locationgig'])){
            $secure_location = stripslashes(htmlspecialchars($_POST['locationgig']));
            $secure_oldtitle = stripslashes(htmlspecialchars($_POST['oldtitlegig']));



            if ($stmt = $enterMatrix->prepare('SELECT ID FROM Account_Info WHERE Username = ?')) {
                $stmt->bind_param('s', $_SESSION['username']);
                $stmt->execute();
            
                $stmt->store_result();
    
                $stmt->bind_result($ID);
                $stmt->fetch();


                if($newelement = $enterMatrix->prepare('UPDATE gig_info SET location = ? WHERE id =? AND title =?')){

                    $newelement->bind_param('sss', $secure_location, $ID, $secure_oldtitle);
                    $newelement->execute();
                    $newelement->store_result();
                    header("Location: tourInfo.php", true, 301);
                
                }else { die("failed to change");}

            }


        }


        if(isset($_POST['dategig'])){
            $secure_date = $_POST['dategig'];
            $secure_oldtitle = stripslashes(htmlspecialchars($_POST['oldtitlegig']));

            if ($stmt = $enterMatrix->prepare('SELECT ID FROM Account_Info WHERE Username = ?')) {
                $stmt->bind_param('s', $_SESSION['username']);
                $stmt->execute();
            
                $stmt->store_result();
    
                $stmt->bind_result($ID);
                $stmt->fetch();


                if($newelement = $enterMatrix->prepare('UPDATE gig_info SET date = ? WHERE id =? AND title =?')){

                    $newelement->bind_param('sss', $secure_date, $ID, $secure_oldtitle);
                    $newelement->execute();
                    $newelement->store_result();
                    header("Location: tourInfo.php", true, 301);
                
                }else { die("failed to change");}

            }

        }


        mysqli_close($enterMatrix);
    }




     
?>