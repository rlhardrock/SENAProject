<?php

include '../models/connectionDatabase.php';

$citizen_number = $_GET['citizen_number'];

$client_junk ="DELETE FROM clients WHERE citizen_number='$citizen_number'";

$result = mysqli_query($connection,$client_junk);

if ($result) {
    echo "<script>alert('Client Removed Successfully');
    window.location='../views/dashboard.php'</script>";
} else {
    echo "<script>alert('No-Removed Client, Try Again');
    window.history.go(-1)</script>";
}

mysqli_free_result($result);