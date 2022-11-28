
<?php "includes/connectionString.php"?>



<?php

 if (!$enterMatrix){

     die("You were not able to connect: " . mysqli_connect_errno());

 }else{

     echo "Database connected";

    $selectDB = "SELECT Username FROM Account_Info";

    $resultDB = mysqli_query($enterMartix, $selectDB);

    if(mysqli_num_rows($resultDB)>0){

        echo "Try Again";

    }else{

        $insertDB = "INSERT INTO Account_Info (Username, Password); VALUES ('$_POST[username]', '$_POST[password]')";

         if (mysqli_query($enterMatrix, $insetDB)) {

            echo "New account Created Successfully";
            header("location: userProfile.php");
            

         }else{

             echo "Error: failed registration";
             header("location: index.php");
         };

    }




 }


mysqli_close($enterMartix);

?>