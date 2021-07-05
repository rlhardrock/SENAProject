<?php

require '../models/connectionDatabase.php';

/* $objConnection = Connect(); */ //optional
$services = "SELECT * FROM services";
$result = mysqli_query($connection,$services);
$AllServices = mysqli_num_rows($result); //optional
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

    <title>REGISTERED SERVICES</title>

</head>

<body>
    <div class='container-fluid'>
        <br>
        <h2>
            <?php   echo "All Registered Services are: " . $AllServices;    ?>
        </h2>
        <br>

        <div class="col-md-10">
            <h3>RESULTS</h3>

            <table class="table table-dark table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Type Service</th>
                        <th scope="col">Cost Service</th>
                        <th scope="col">Parking Day</th>

                        <th scope="col">Update!</th>
                        <th scope="col">Scrap!</th>

                    </tr>

            <?php
                $servs = mysqli_query($connection,$services);
                while ($row = mysqli_fetch_assoc($servs))
            {?>

                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $row["type_service"]; ?></td>
                        <td><?php echo $row["cost_service"]; ?></td>
                        <td><?php echo $row["parking_day"]; ?></td>

                        <td><a href="../serviceCrud/serviceUpdate.php?id_service= <?php echo $row["id_service"];?> "class="safety">U<i class="fas fa-cogs"></i></a></td>
                        <td><a href="../serviceCrud/serviceScrap.php?id_service= <?php echo $row["id_service"];?>" class="safety">S<i class="fas fa-snowplow"></i></a>"></td>
                    </tr>
                </tbody>
            <?php
            }   mysqli_free_result($servs)?>

            </thead>
            </table>
        </div>
    </div>
    <script scr="../js/confirm.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>

private $;
    private $;
    private $;
