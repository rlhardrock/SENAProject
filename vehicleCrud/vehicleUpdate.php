<?php

require "../models/connectionDatabase.php";

$objConnection = Connect();
$id = $_GET["id_vehicle"];
$update_vehicle="SELECT * FROM vehicles WHERE id_vehicle='$id'";
mysqli_close($connection);

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

    <title>UPDATE VEHICLE</title>

</head>

<body class="body">
    <h1>UPDATE VEHICLE</h1>
    <br>
    <div class='container-fluid'>
        <h2>...</h2>
        <br>
        <div class='row'>
            <div class="col-md-6">
                <h3>FORM</h3>
                <form method="POST" action="../vehicleCrud/vehicleProcess.php">

                    <?php $result = mysqli_query($connection,$update_vehicle);
                    while($row= mysqli_fetch_assoc($result)) { ?>

                    <input type="hidden"
                    value="<?php echo $row["id_vehicle"];?>"
                    name="id">

                    <div class="mb-3">
                        <label for="input_mark" class="form-label">Mark</label>
                        <input type="text" class="form-control" name="mark" id="mark" value="<?php echo $row["mark"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_model" class="form-label">Model</label>
                        <input type="text" class="form-control" name="model" id="model" value="<?php echo $row["model"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_bodywork" class="form-label">Bodywork</label>
                        <input type="text" class="form-control" name="bodywork" id="bodywork" value="<?php echo $row["bodywork"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_manufacturing" class="form-label">Manufacturing</label>
                        <input type="text" class="form-control" name="manufacturing" id="manufacturing" value="<?php echo $row["manufacturing"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_enrollment" class="form-label">Enrollment</label>
                        <input type="text" class="form-control" name="enrollment" id="enrollment" value="<?php echo $row["enrollment"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_license" class="form-label">License</label>
                        <input type="text" class="form-control" name="license" id="license" value="<?php echo $row["license"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_paint" class="form-label">Paint</label>
                        <input type="text" class="form-control" name="paint" id="paint" value="<?php echo $row["paint"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_cylinder" class="form-label">Cylinder</label>
                        <input type="text" class="form-control" name="cylinder" id="cylinder" value="<?php echo $row["cylinder"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_transmission" class="form-label">Transmission</label>
                        <input type="text" class="form-control" name="transmission" id="transmission" value="<?php echo $row["transmission"];?>"
                        placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_motor" class="form-label">Motor</label>
                        <input type="text" class="form-control" name="motor" id="motor" value="<?php echo $row["motor"];?>"
                        placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_suspension" class="form-label">Suspension</label>
                        <input type="text" class="form-control" name="suspension" id="suspension" value="<?php echo $row["suspension"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_service" class="form-label">Service</label>
                        <input type="text" class="form-control" name="service" id="service" value="<?php echo $row["service"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_settlement" class="form-label">Settlement</label>
                        <input type="text" class="form-control" name="settlement" id="settlement" value="<?php echo $row["settlement"];?>" placeholder="" disabled>
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="Submit">Update</button>
                    </div>

                    <?php } mysqli_free_result($result) ?>
                </form>

            </div>

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>