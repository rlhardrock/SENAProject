<?php

require '../models/connectionDatabase.php';

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


$insert_query = "INSERT INTO vehicles(mark,model,bodywork,manufacturing,enrollment,license,paint,cylinder,transmission,motor,suspension,service,settlement) VALUES ('$mark','$model','$bodywork','$manufacturing','$enrollment','UPPER('$license')','$paint','$cylinder','$transmission','$motor','$suspension','$service','$settlement')";

$result = mysqli_query($connection,$insert_query);

if ($result) {
    echo "<script>alert('Vehicle Added Successfully');
    window.location='../views/dashboard.html'</script>";
} else {
    echo "<script>alert('Unregistered Vehicle, Try Again');
    window.history.go(-1)</script>";
}

mysqli_close($connection);
?>
