<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../taller/views/style/styles.css">

    <title>SENA PHP</title>

</head>

<body class="body">
    <h1>VEHICLES</h1>
    <br>

    <?php

    include "../models/vehicle.php";

    $mark = $_POST['mark'];
    $model = $_POST['model'];
    $bodywork = $_POST['bodywork'];
    $manufacturing = $_POST['manufacturing'];
    $enrollment = $_POST['enrollment'];
    $license = $_POST['license'];
    $paint = $_POST['paint'];
    $cylinder = $_POST['cylinder'];
    $transmission = $_POST['transmission'];
    $motor = $_POST['motor'];
    $suspension = $_POST['suspension'];
    $service = $_POST['service'];
    $settlement = $_POST['settlement'];

    $superVehicle = new Vehicle($mark,$model,$bodywork,$manufacturing,$enrollment,$license,$paint,$cylinder, $transmission,$motor,$suspension,$service,$settlement);

    ?>


    <div class='container-fluid'>
        <h2>...</h2>
        <br>
        <div class="col-md-10">
            <h3>RESULT</h3>
            <br>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mark</th>
                        <th scope="col">Model</th>
                        <th scope="col">Bodywork</th>
                        <th scope="col">Manufacturing</th>
                        <th scope="col">Enrollment</th>
                        <th scope="col">License Plate</th>
                        <th scope="col">Paint</th>
                        <th scope="col">Cylinder</th>
                        <th scope="col">Transmission</th>
                        <th scope="col">Motor</th>
                        <th scope="col">Suspension</th>
                        <th scope="col">Service</th>
                        <th scope="col">Settlement</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $superVehicle->getMark(); ?></td>
                        <td><?php echo $superVehicle->getModel(); ?></td>
                        <td><?php echo $superVehicle->getBodywork(); ?></td>
                        <td><?php echo $superVehicle->getManufacturing(); ?></td>
                        <td><?php echo $superVehicle->getEnrollment(); ?></td>
                        <td><?php echo $superVehicle->getLicense(); ?></td>
                        <td><?php echo $superVehicle->getPaint(); ?></td>
                        <td><?php echo $superVehicle->getCylinder(); ?></td>
                        <td><?php echo $superVehicle->getTransmission(); ?></td>
                        <td><?php echo $superVehicle->getMotor(); ?></td>
                        <td><?php echo $superVehicle->getSuspension(); ?></td>
                        <td><?php echo $superVehicle->getService(); ?></td>
                        <td><?php echo $superVehicle->getSettlement(); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>