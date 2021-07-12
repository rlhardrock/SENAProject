<?php

require '../models/connectionDatabase.php';

$product_name = $_POST["product_name"];
$factory_serial = $_POST["factory_serial"];
$brand = $_POST["brand"];
$technology = $_POST["technology"];
$weather = $_POST["weather"];
$bodywork = $_POST["bodywork"];
$category = $_POST["category"];
$highway = $_POST["highway"];
$warranty = $_POST["warranty"];
$price = $_POST["price"];
$register = $_POST["register"];

$insert_query = "INSERT INTO products(product_name,factory_serial,brand,technology,weather,bodywork,category,highway,warranty,price,register) VALUES ('$product_name','$factory_serial','$brand','$technology','$weather','$bodywork','$category','$highway','$warranty','$price','$register')";

$result = mysqli_query($connection,$insert_query);

if ($result) {
    echo "<script>alert('Product Added Successfully');
    window.location='../views/dashboard.php'</script>";
} else {
    echo "<script>alert('Unregistered Product, Try Again');
    window.history.go(-1)</script>";
}

mysqli_close($connection);
?>