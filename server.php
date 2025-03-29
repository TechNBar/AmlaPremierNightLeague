<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $city = $_POST["city"];
    $skill = $_POST["skill"];

    $uploadDir = "uploads/";
    $photoPath = $uploadDir . basename($_FILES["photo"]["name"]);
    $paymentPath = $uploadDir . basename($_FILES["payment"]["name"]);

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $photoPath) &&
        move_uploaded_file($_FILES["payment"]["tmp_name"], $paymentPath)) {
        echo "Registration successful!";
    } else {
        echo "Error uploading files.";
    }
}
?>
