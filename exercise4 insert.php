<!doctype html>
<html>
    <head>
        <h1>insert data into our table
        </head>
        <body>
            <center>
                <?php

    //call your database file into the current file
    require "dbconnection.php";
    
    //pick data from user
    $firstname = $_REQUEST['first_name'];
    $lastname = $_REQUEST['last_name'];
    $gender = $_REQUEST['gender'];
    $address = $_Request['address'];

    //insert data picked into the table
    $sql = "insert into staff value('$firstname','$lastname','$gender','$address')";
       
    if($conn -> quesry($sql) === true) {
        echo "records inserted";
    }else {
        echo "error";
    }
    ?>
    </center>
</body>
</html>
