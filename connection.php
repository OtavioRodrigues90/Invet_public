<?php
$servername = "localhost";
$database = "invet_sistem";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die( mysqli_connect_error());
}

?>