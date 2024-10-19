<?php

$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "Products_db";

//Create connection
$conn = new mysqli($db_server, $db_user, $db_password, $db_name);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
