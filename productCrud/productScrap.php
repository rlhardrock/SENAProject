<?php

include '../models/connectionDatabase.php';

$id_product = $_GET['id_product'];

$product_junk ="DELETE FROM products WHERE id_product='$id_product'";

$result = mysqli_query($connection,$product_junk);

if ($result) {
    echo "<script>alert('Product Destroyed Successfully');
    window.location='../views/dashboard.php'</script>";
} else {
    echo "<script>alert('Non-Destroyed Product, Try Again');
    window.history.go(-1)</script>";
}

mysqli_free_result($result);
