<?php

require '../models/connectionDatabase.php';

$id = $_POST["id"];
$citizen_number = $_POST["citizen_number"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$cellphone = $_POST["cellphone"];
$motor_rol = $_POST["motor_rol"];
$email = $_POST["email"];
$agreement = $_POST["agreement"];
$contract = $_POST["contract"];
$cancellation = $_POST["cancellation"];

$update_employ = "UPDATE employees SET citizen_number=$citizen_number',first_name='$first_name',last_name='$last_name',cellphone='$cellphone',motor_rol='$motor_rol',email='$email',agreement='$agreement',contract='$contract',cancellation='$cancellation' WHERE id_employee='$id' ";

$result = mysqli_query($connection,$update_employ);

if ($result) {
    echo "<script>alert('Employee Updated Successfully');
    window.location='../views/dashboard.html'</script>";
} else {
    echo "<script>alert('Employee Not Updated, Try Again');
    window.history.go(-1)</script>";
}
mysqli_free_result($result);
mysqli_close($connection);
?>

