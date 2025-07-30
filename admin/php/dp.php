<?php
$mycon = mysqli_connect("localhost", "root", "", "health_care");

if (!$mycon) {
    die("Connection failed: " . mysqli_connect_error());
}
?>