<?php

include '../models/connectionDatabase.php';

$id = $_GET['id'];

$product_junk ="DELETE FROM products WHERE id_product='$id'";

$result = mysqli_query($connection,$product_junk);

if ($result) {
    echo "<script>alert('Product Destroyed Successfully');
    window.location='../views/dashboard.html'</script>";
} else {
    echo "<script>alert('Non-Destroyed Product, Try Again');
    window.history.go(-1)</script>";
}

mysqli_free_result($result);
mysqli_close($connection);

?>