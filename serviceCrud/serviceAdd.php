<?php

require '../models/connectionDatabase.php';

$type_service = $_POST["type_service"];
$cost_service = $_POST["cost_servicio"];
$parking_day = $_POST["parking_day"];

$insert_service = "INSERT INTO services(type_service,cost_servicio,parking_day) VALUES ('$type_service','$cost_service','$parking_day')";

$result = mysqli_query($connection,$insert_service);

if ($result) {
    echo "<script>alert('Service Added Successfully');
    window.location='../views/dashboard.php'</script>";
} else {
    echo "<script>alert('Unregistered Service, Try Again');
    window.history.go(-1)</script>";
}

