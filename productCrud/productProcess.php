<?php

require '../models/connectionDatabase.php';

$id_product = $_POST["id_product"];
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

$update_autoparts = "UPDATE products SET product_name=$product_name',factory_serial='$factory_serial',brand='$brand',technology='$technology',weather='$weather',bodywork='$bodywork',category='$category',highway='$highway',warranty='$warranty',price='$price',register='$register' WHERE id_product='$id_product' ";

$result = mysqli_query($connection,$update_autoparts);

if ($result) {
    echo "<script>alert('Product Updated Successfully');
    window.location='../views/dashboard.php'</script>";
} else {
    echo "<script>alert('Product Not Updated, Try Again');
    window.history.go(-1)</script>";
}
mysqli_free_result($result);

