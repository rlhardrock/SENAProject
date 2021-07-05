<?php

require '../models/connectionDatabase.php';

$id = $_POST["id"];
$type_service = $_POST["type_service"];
$cost_service = $_POST["cost_service"];
$parking_day = $_POST["parking_day"];

$update_service = "UPDATE services SET type_service=$type_service',cost_service='$cost_service',parking_day='$parking_day' WHERE id_service='$id' ";

$result = mysqli_query($connection,$update_service);

if ($result) {
    echo "<script>alert('Service Updated Successfully');
    window.location='../views/dashboard.html'</script>";
} else {
    echo "<script>alert('Service Not Updated, Try Again');
    window.history.go(-1)</script>";
}
mysqli_free_result($result);
mysqli_close($connection);
?>

