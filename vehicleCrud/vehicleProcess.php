<?php

require '../models/connectionDatabase.php';

$id_vehicle = $_POST["id_vehicle"];
$mark = $_POST["mark"];
$model = $_POST["model"];
$bodywork = $_POST["bodywork"];
$manufacturing = $_POST["manufacturing"];
$enrollment = $_POST["enrollment"];
$license = $_POST["license"];
$paint = $_POST["paint"];
$cylinder = $_POST["cylinder"];
$transmission = $_POST["transmission"];
$motor = $_POST["motor"];
$suspension = $_POST["suspension"];
$service = $_POST["service"];
$settlement = $_POST["settlement"];

$update_auto = "UPDATE vehicles SET mark='$mark',model='$model',bodywork='$bodywork',manufacturing='$manufacturing',enrollment='$enrollment',license='$license',paint='$paint',cylinder='$cylinder',transmission='$transmission',motor='$motor',suspension='$suspension',service='$service',settlement='$settlement' WHERE id_vehicle='$id_vehicle' ";

$result = mysqli_query($connection,$update_auto);

if ($result) {
    echo "<script>alert('Vehicle Updated Successfully');
    window.location='../views/dashboard.php'</script>";
} else {
    echo "<script>alert('Vehicle Not Updated, Try Again');
    window.history.go(-1)</script>";
}

mysqli_free_result($result);
/* mysqli_close($connection); */