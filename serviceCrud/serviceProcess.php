<?php

require '../models/connectionDatabase.php';

$id_service = $_POST["id_service"];
$type_service = $_POST["type_service"];
$cost_servicio = $_POST["cost_servicio"];
$parking_day = $_POST["parking_day"];

$update_service = "UPDATE services SET type_service='$type_service',cost_servicio='$cost_servicio',parking_day='$parking_day' WHERE id_service='$id_service' ";

$result = mysqli_query($connection,$update_service);

if ($result) {
    echo "<script>alert('Service Updated Successfully');
    window.location='../views/dashboard.php'</script>";
} else {
    echo "<script>alert('Service Not Updated, Try Again');
    window.history.go(-1)</script>";
}
mysqli_free_result($result);

