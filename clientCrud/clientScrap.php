<?php

include '../models/connectionDatabase.php';

$id = $_GET['id'];

$client_junk ="DELETE FROM clients WHERE id_client='$id'";

$result = mysqli_query($connection,$client_junk);

if ($result) {
    echo "<script>alert('Client Removed Successfully');
    window.location='../views/dashboard.html'</script>";
} else {
    echo "<script>alert('No-Removed Client, Try Again');
    window.history.go(-1)</script>";
}

mysqli_free_result($result);
mysqli_close($connection);

?>