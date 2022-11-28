<?php //"includes/connectionString.php"?>

<?php

$servername = "lochnagar.abertay.ac.uk";
$dbusername = "sql2203162";
$dbpassword = "D8EP4e95ukDq";
$dbname = "sql2203162";


$enterMatrix = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);


    if (!$enterMatrix){

        die("You were not able to connect: " . mysqli_connect_errno());

    }else{

        echo "Database connected";

        // $selectDB = "SELECT Username and Password FROM Account_Info";
        // $result = mysqli_query($enterMatrix , $selectDB);
        // $uname = $_POST['username'];
        // $pws = $_POST['password'];
        // if (mysqli_num_rows($result) > 0) {
        //     if(($result['Username'] == $uname) && ($uname !="") && ($result['Password'] == $pwd) && ($pwd !=""));
        //         echo "Correct, lets log you in";
        //         header("location: userProfile.php");
        //         //redirect to login
        //     }
        // else{
        //     echo "Unknown Credentials";
        //     header("location: index.php")
        // };

        $stmt = mysqli_prepare($enterMartix, "SELECT Username, Password FROM Account_Info WHERE Username = ?");


        mysqli_stmt_bind_param($stmt, "s", $param_password);

        $param_password = trim($_POST["password"]);

        mysqli_stmt_execute($stmt);

        $results = mysqli_stmt_get_result($stmt);
        $Password = mysqli_fetch_assoc($results);
       
        if($Password == $param_password){
            echo "well done";
            header("location userProfile.php");
        }else{
            echo "Wrong";
            header("location index.php");
        }

        mysqli_stmt_close($stmt);
        mysqli_close($enterMartix);
    }

    

?>