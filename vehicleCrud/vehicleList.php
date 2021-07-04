<?php

require '../models/connectionDatabase.php';

/* $objConnection = Connect(); */ //optional
$vehicles = "SELECT * FROM vehicles";
$result = mysqli_query($connection,$vehicles);
$AllVehicles = mysqli_num_rows($result); //optional
mysqli_free_result($result);
mysqli_close($connection);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/styles.css">

    <title>REGISTERED VEHICLES</title>

</head>

<body>
    <div class='container-fluid'>
        <br>
        <h2>
            <?php   echo "All Registered Vehicles are: " . $AllVehicles;    ?>
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
                $autos = mysqli_query($connection,$vehicles);
                while ($row = mysqli_fetch_assoc($autos))
            {?>

                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $row["mark"]; ?></td>
                        <td><?php echo $row["model"]; ?></td>
                        <td><?php echo $row["bodywork"]; ?></td>
                        <td><?php echo $row["manufacturing"]; ?></td>
                        <td><?php echo $row["enrollment"]; ?></td>
                        <td><?php echo $row["license"]; ?></td>
                        <td><?php echo $row["paint"]; ?></td>
                        <td><?php echo $row["cylinder"]; ?></td>
                        <td><?php echo $row["transmission"]; ?></td>
                        <td><?php echo $row["motor"]; ?></td>
                        <td><?php echo $row["suspension"]; ?></td>
                        <td><?php echo $row["service"]; ?></td>
                        <td><?php echo $row["settlement"]; ?></td>
                        <td><a href="../vehicleCrud/vehicleUpdate.php?id_vehicle= <?php echo $row["id_vehicle"];?> "class="safety">U<i class="fas fa-cogs"></i></a></td>
                        <td><a href="../vehicleCrud/vehicleScrap.php?id_vehicle= <?php echo $row["id_vehicle"];?>" class="safety">S<i class="fas fa-snowplow"></i></a>"></td>
                    </tr>
                </tbody>
            <?php
            }   mysqli_free_result($autos)?>

            </thead>
            </table>
        </div>
    </div>
    <script scr="../js/confirm.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>