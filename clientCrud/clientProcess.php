<?php

require '../models/connectionDatabase.php';

$citizen_number = $_POST["citizen_number"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$phone_number = $_POST["phone_number"];
$profession = $_POST["profession"];
$business = $_POST["business"];
$inscription = $_POST["inscription"];


$update_client = "UPDATE clients SET name='$name',surname='$surname',email='$email',phone_number='$phone_number',profession='$profession',business='$business',inscription='$inscription' WHERE citizen_number='$citizen_number' ";

$result = mysqli_query($connection,$update_client);

if ($result) {
    echo "<script>alert('Client Updated Successfully');
    window.location='../views/dashboard.php'</script>";
} else {
    echo "<script>alert('Client Not Updated, Try Again');
    window.history.go(-1)</script>";
}
mysqli_free_result($result);
