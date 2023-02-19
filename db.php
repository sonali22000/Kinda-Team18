<?php

$servername = "db";
$username = "cappteam18";
$password = "kindergarten";
$dbname = "cappteam18";

//creating connection

$conn = new mysqli($servername , $username , $password , $dbname);

//check the connection

if ($conn->connect_error){
    die ("connection failed:" . $conn->connect_error);
    }

?>