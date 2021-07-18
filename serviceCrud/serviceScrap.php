<?php

include '../models/connectionDatabase.php';

$id_service = $_GET['id_service'];

$service_junk ="DELETE FROM services WHERE id_service='$id_service'";

$result = mysqli_query($connection,$service_junk);

if ($result) {
    echo "<script>alert('Service Deactivated Successfully');
    window.location='../views/dashboard.php'</script>";
} else {
    echo "<script>alert('Service Not Deactivated, Try Again');
    window.history.go(-1)</script>";
}

mysqli_free_result($result);
