<?php

$servername = "db";
$username = "team18";
$password = "team18";
$dbname = "kindadb";

//creating connection

$conn = new mysqli($servername , $username , $password , $dbname);

//check the connection

if ($conn->connect_error){
    die ("connection failed:" . $conn->connect_error);
    }

?>