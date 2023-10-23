<?php
$servername = "localhost"; //name of your server
$user = "root" ; // the user created on your server while installing <xampp>
$password = ""; //the password set while installing xampp/wampp. leave it empty like mine if you set no password at installation
$DATABASE_NAME = "campus" ;//name of the database you created

//create connection
$conn = new mysqli( $servername, $user, $password,$DATABASE_NAME);
?>