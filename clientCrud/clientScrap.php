<?php

include '../models/connectionDatabase.php';

$id = $_GET['id_client'];

$client_junk ="DELETE FROM clients WHERE id_client='$id_client'";

$result = mysqli_query($connection,$client_junk);

if ($result) {
    echo "<script>alert('Client Removed Successfully');
    window.location='../views/dashboard.php'</script>";
} else {
    echo "<script>alert('No-Removed Client, Try Again');
    window.history.go(-1)</script>";
}

mysqli_free_result($result);
mysqli_close($connection);

?>