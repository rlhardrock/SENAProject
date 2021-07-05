<?php

require '../models/connectionDatabase.php';

//$objConnection = new objConnection("localhost", "my_user", "my_password", "world");

$objConnection = Connect();
$sql = "SELECT * FROM vehicles";
$result = $objConnection->query($sql);
$AllVehicles = $result->num_rows;
$result->close();
// $objConnection->close();

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

    <title>REGISTERED VEHICLES</title>

</head>

<body>
    <div class='container-fluid'>
        <br>
        <h2>
            <?php

                echo "All Registered Vehicles are: " . $AllVehicles;

            ?>
        </h2>
        <br>

        <div class="col-md-10">
            <h3>RESULTS</h3>

            <table class="table table-dark table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mark</th>
                        <th scope="col">Model</th>
                        <th scope="col">Bodywork</th>
                        <th scope="col">Manufacturing</th>
                        <th scope="col">Enrollment</th>
                        <th scope="col">License</th>
                        <th scope="col">Paint</th>
                        <th scope="col">Cylinder</th>
                        <th scope="col">Transmission</th>
                        <th scope="col">Motor</th>
                        <th scope="col">Suspension</th>
                        <th scope="col">Service</th>
                        <th scope="col">Settlement</th>
                        <th scope="col">Update!</th>
                        <th scope="col">Scrap!</th>

                    </tr>

            <?php
            while ($vehicle = $result->fetch_object()) {
            ?>

                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $vehicle->mark ?></td>
                        <td><?php echo $vehicle->model ?></td>
                        <td><?php echo $vehicle->bodywork ?></td>
                        <td><?php echo $vehicle->manufacturing ?></td>
                        <td><?php echo $vehicle->enrollment ?></td>
                        <td><?php echo $vehicle->license ?></td>
                        <td><?php echo $vehicle->paint ?></td>
                        <td><?php echo $vehicle->cylinder ?></td>
                        <td><?php echo $vehicle->transmission ?></td>
                        <td><?php echo $vehicle->motor ?></td>
                        <td><?php echo $vehicle->suspension ?></td>
                        <td><?php echo $vehicle->service ?></td>
                        <td><?php echo $vehicle->settlement ?></td>
                        <td><a href="vehicleUpdate.php?id_vehicle=  <?php echo $vehicle->id_vehicle ?>   "></td>
                        <td><a href="vehicleScrap"></td>
                    </tr>
                </tbody>
            <?php
                }
            ?>

            </thead>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>