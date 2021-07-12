<?php

include '../models/connectionDatabase.php';

$id = $_GET['id_vehicle'];

$scrap_junk ="DELETE FROM vehicles WHERE id_vehicle='$id_vehicle'";

$result = mysqli_query($connection,$scrap_junk);

if ($result) {
    echo "<script>alert('Vehicle Scrapped Successfully');
    window.location='../views/dashboard.php'</script>";
} else {
    echo "<script>alert('Non-Scrapped Vehicle, Try Again');
    window.history.go(-1)</script>";
}

mysqli_free_result($result);
mysqli_close($connection);

?>