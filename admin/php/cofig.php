<?php
$host = "sql200.infinityfree.com";
$user = "if0_39597420";
$password = "rakesh7340"; 
$database = "if0_39597420_appointment_dataBase"; 

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>