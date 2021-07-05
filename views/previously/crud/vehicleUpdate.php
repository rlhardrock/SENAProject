<?php

require "../models/connectionDatabase.php";

$objConnection = Connect();
$sql = "SELECT * FROM vehicles";
$resultSeek = $objConnection->query($sql);
$sql="SELECT * FROM vehicles WHERE id_vehicle='$_REQUEST[id_vehicle]'";
$resultVehicle = $objConnection->query($sql);
$vehicle = $resultVehicle->fetch_object();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../taller/views/style/styles.css">

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
                <form method="POST" action="../taller/vehicleShow.php">

                    <div class="mb-3">
                        <label for="input_mark" class="form-label">Mark</label>
                        <input type="text" class="form-control" name="mark" id="mark" value="<?php echo $vehicle->mark?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_model" class="form-label">Model</label>
                        <input type="text" class="form-control" name="model" id="model" value="<?php echo $vehicle->model?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_bodywork" class="form-label">Bodywork</label>
                        <select class="form-select" name="bodywork" id="bodywork" value="<?php echo $vehicle->bodywork?>" aria-label="Default select example">
                            <option selected>...select</option>

                            <option value="1">Autobus</option>
                            <option value="2">Camper</option>
                            <option value="3">Cabriolet</option>
                            <option value="4">Coupe</option>
                            <option value="5">Crossover</option>
                            <option value="6">Hatchback</option>
                            <option value="7">Liftback</option>
                            <option value="8">Muscle</option>
                            <option value="9">Pickup</option>
                            <option value="10">Roadster</option>
                            <option value="11">Sedan</option>
                            <option value="12">Sportback</option>
                            <option value="13">Truck</option>
                            <option value="14">Wagon Station</option>

                        </select>
                    </div>

                    <div class="mb-3">
                        <vabel for="input_manufacturing" class="form-label">Manufacturing</vabel>
                        <input type="text" class="form-control" name="manufacturing" id="manufacturing" value="<?php echo $vehicle->manufacturing?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_enrollment" class="form-label">Enrollment</label>
                        <input type="text" class="form-control" name="enrollment" id="enrollment" value="<?php echo $vehicle->enrollment?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_license" class="form-label">License</label>
                        <input type="text" class="form-control" name="license" id="license" value="<?php echo $vehicle->license?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_paint" class="form-label">Paint</label>
                        <input type="text" class="form-control" name="paint" id="paint" value="<?php echo $vehicle->paint?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_cylinder" class="form-label">Cylinder</label>
                        <input type="text" class="form-control" name="cylinder" id="cylinder" value="<?php echo $vehicle->cylinder?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_transmission" class="form-label">Transmission</label>
                        <select class="form-select" name="transmission" id="transmission" value="<?php echo $vehicle->transmission?>" aria-label="Default select example">
                            <option selected>...select</option>

                            <option value="1">Manual Classic Standar</option>
                            <option value="2">Double Cluth</option>
                            <option value="3">Continuous Variable</option>
                            <option value="4">Robotick</option>
                            <option value="5">Torque Converter</option>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="input_motor" class="form-label">Motor</label>
                        <select class="form-select" name="motor" id="motor" value="<?php echo $vehicle->motor?>" aria-label="Default select example">
                            <option selected>...select</option>

                            <option value="1">Electric</option>
                            <option value="2">Gasoline</option>
                            <option value="3">Gas</option>
                            <option value="4">Diesel</option>
                            <option value="5">Hybrid</option>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="input_suspension" class="form-label">Suspension</label>
                        <select class="form-select" name="suspension" id="suspension" value="<?php echo $vehicle->suspension?>" aria-label="Default select example">
                            <option selected>...select</option>

                            <option value="1">Dial</option>
                            <option value="2">Helicoidal</option>
                            <option value="3">Multilink</option>
                            <option value="4">Torsion</option>
                            <option value="5">Laminate</option>
                            <option value="6">MacPherson</option>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="input_service" class="form-label">Service</label>
                        <input type="text" class="form-control" name="service" id="service" value="<?php echo $vehicle->service?>" placeholder="">
                    </div>

                    
                    <div class="d-grid gap-2">
                        <button class="btn btn-success" type="Submit">Submit</button>
                    </div>
                </form>

            </div>

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>