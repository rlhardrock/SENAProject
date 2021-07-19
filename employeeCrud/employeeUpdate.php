<?php

require "../models/connectionDatabase.php";

/* $objConnection = Connect(); */
$id_employee = $_GET["id_employee"];
$update_employee="SELECT * FROM employees WHERE id_employee='$id_employee'";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/styles.css">

    <title>UPDATE EMPLOYEE</title>

</head>

<body class="body">
    <h1>UPDATE EMPLOYEE</h1>
    <br>
    <div class='container-fluid'>
        <h2>...</h2>
        <br>
        <div class='row'>
            <div class="col-md-6">
                <h3>FORM</h3>
                <form method="POST" action="../employeeCrud/employeeProcess.php">

                    <?php $result = mysqli_query($connection,$update_employee);
                    while($row= mysqli_fetch_assoc($result)) { ?>

                    <input type="hidden" value="<?php echo $row["id_employee"];?>" name="id_employee">

                    <div class="mb-3">
                        <label>Citizen</label>
                        <input type="text" class="form-control" name="citizen_number" id="citizen_number" value="<?php echo $row["citizen_number"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $row["first_name"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $row["last_name"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Cellphone</label>
                        <input type="text" class="form-control" name="cellphone" id="cellphone" value="<?php echo $row["cellphone"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Motor-Rol</label>
                        <input type="text" class="form-control" name="motor_rol" id="motor_rol" value="<?php echo $row["motor_rol"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?php echo $row["email"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Agreement</label>
                        <input type="text" class="form-control" name="agreement" id="agreement" value="<?php echo $row["agreement"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Contract</label>
                        <input type="date" class="form-control" name="contract" id="contract" value="<?php echo $row["contract"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Cancellation</label>
                        <input type="date" class="form-control" name="cancellation" id="cancellation" value="<?php echo $row["cancellation"];?>"
                        placeholder="">
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>

                    <?php } mysqli_free_result($result) ?>
                </form>

            </div>

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>