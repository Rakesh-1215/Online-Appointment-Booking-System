<?php
include 'cofig.php';

if (isset($_POST['submit'])) {
    $name       = $_POST['name'];
    $phone      = $_POST['phone'];
    $email      = $_POST['email'];
    $date       = $_POST['date'];
    $shift      = $_POST['shift'];
    $department = $_POST['department'];
    $doctor     = $_POST['doctor'];
    $message    = $_POST['message'];

   
    // $mycon = mysqli_connect("localhost", "root", "", "health_care");

    $ps = $conn->prepare("INSERT INTO appointments (fullName, phone, email, appointment_date, shift, department, doctor, _message) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $ps->bind_param("ssssssss", $name, $phone, $email, $date, $shift, $department, $doctor, $message);

    if ($ps->execute()) {
        header("Location: http://localhost/Project/appointment.php?success=1");
        exit();
    } else {
        header("Location: http://localhost/Project/appointment.php?error=" . urlencode($ps->error));
        exit();
    }

    $ps->close();
    $conn->close();
}
?>
