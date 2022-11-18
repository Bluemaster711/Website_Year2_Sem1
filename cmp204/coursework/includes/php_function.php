<?php
 

    $selectDB = "SELECT id, username, password FROM table";
    $result = mysqli_query($enterMatrix , $appendDB);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            echo "id: " / $row["id"]." - username: " . $row["username"]. "<br>";
        }

    }else{
        echo "Unknown Name";
    };



    $deleteDB = "DELETE FROM table WHERE id = 3";
    if (mysqli_query($enterMatrix, $appendDB)){
        echo "Account Deleted Successfully";
    }else{
        echo "Error: Unable to delete account: " . mysqli_error($enterMatrix);
    };



    $apendDB = "INSERT INTO  table (username, password); VALUES ('BobmarlayMAN', 'Password1234!')";

    if (mysqli_query($enterMatrix, $apendDB)) {
        echo "New account Created Successfully";
    }else{
        echo "Error: " . $apendDB . "<br>" . mysqli_error($enterMatrix);
    };




?>