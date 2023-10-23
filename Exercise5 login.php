<?php
//contains code showing how our login system will work
session_start();
include "dbconnect.php" ;
$uname = $_REQUEST['uname'];
$pwd = $_REQUEST['pwd'];
//confirming our variale are not empty
if(empty($uname)){
        header(" Location: index.php?error = User Name is required");
        exit();
    }
    else if(empty($pwd)){
        header("Location : index.php?error = Fil in your password.");
        exit();
    }
        $sql = "insert into user value('$uname','$pwd')";

        if($conn -> query($sql) === true )
        {
            echo " new records inserted";
        }else {
            echo "Error.";
        }
        $conn->close();
?>  