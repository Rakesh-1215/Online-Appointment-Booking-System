<?php
$mycon = mysqli_connect("localhost", "root", "", "health_care");


if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $status = $_POST['status'];


    $status = strtolower(trim($status));
    $position = ['pending', 'completed', 'cancelled'];
    if (in_array($status, $position)) {
        $sql = "UPDATE appointments SET _status = ? WHERE id = ?";
        $ps = $mycon->prepare($sql);
        if ($ps) {
            $ps->bind_param("si", $status, $id);

            if ($ps->execute()) {
                header("Location: " . $_SERVER['HTTP_REFERER']);
                exit();
            } else {
                echo "Something went wrong while updating.";
            }
            $ps->close();
        } else {
            echo "Failed to prepare SQL.";
        }
    } else {
        echo "Invalid status value.";
    }
}
$mycon->close();
