<?php

include '../models/connectionDatabase.php';

$id_employee = $_GET['id_employee'];

$employ_junk ="DELETE FROM employees WHERE id_employee='$id_employee'";

$result = mysqli_query($connection,$employ_junk);

if ($result) {
    echo "<script>alert('Employee Dismissed Successfully');
    window.location='../views/dashboard.php'</script>";
} else {
    echo "<script>alert('Non-Dismissed Employee, Try Again');
    window.history.go(-1)</script>";
}

mysqli_free_result($result);