<?php

require '../models/connectionDatabase.php';

$citizen_number = $_POST["citizen_number"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$cellphone = $_POST["cellphone"];
$motor_rol = $_POST["motor_rol"];
$email = $_POST["email"];
$agreement = $_POST["agreement"];
$contract = $_POST["contract"];
$cancellation = $_POST["cancellation"];


$insert_query = "INSERT INTO employees(citizen_number,first_name,last_name,cellphone,motor_rol,email,agreement,contract,cancellation) VALUES ('$citizen_number','$first_name','$last_name','$cellphone','$motor_rol','$email','$agreement','$contract','$cancellation')";

$result = mysqli_query($connection,$insert_query);

if ($result) {
    echo "<script>alert('Employee Added Successfully');
    window.location='../views/dashboard.php'</script>";
} else {
    echo "<script>alert('Unregistered Employee, Try Again');
    window.history.go(-1)</script>";
}
