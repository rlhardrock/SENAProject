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


$insert_query = "INSERT INTO clients(citizen_number,name,surname,email,phone_number,profession,business,inscription) VALUES ('$citizen_number','$name','$surname','$email','$phone_number','$profession','$business','$inscription')";

$result = mysqli_query($connection,$insert_query);

if ($result) {
    echo "<script>alert('Client Added Successfully');
    window.location='../views/dashboard.php'</script>";
} else {
    echo "<script>alert('Unregistered Client, Try Again');
    window.history.go(-1)</script>";
}

