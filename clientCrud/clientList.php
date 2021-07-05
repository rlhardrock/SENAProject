<?php

require '../models/connectionDatabase.php';

/* $objConnection = Connect(); */ //optional
$clients = "SELECT * FROM clients";
$result = mysqli_query($connection,$clients);
$AllClients = mysqli_num_rows($result); //optional
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

    <title>REGISTERED CLIENTS</title>

</head>

<body>
    <div class='container-fluid'>
        <br>
        <h2>
            <?php   echo "All Registered clients are: " . $AllClients;    ?>
        </h2>
        <br>

        <div class="col-md-10">
            <h3>RESULTS</h3>

            <table class="table table-dark table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Citizen Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Profession</th>
                        <th scope="col">Business</th>
                        <th scope="col">Inscription</th>

                        <th scope="col">Update!</th>
                        <th scope="col">Remove!</th>

                    </tr>

            <?php
                $custom = mysqli_query($connection,$clients);
                while ($row = mysqli_fetch_assoc($custom))
            {?>

                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $row["citizen_number"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["surname"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["phone_number"]; ?></td>
                        <td><?php echo $row["profession"]; ?></td>
                        <td><?php echo $row["business"]; ?></td>
                        <td><?php echo $row["inscription"]; ?></td>

                        <td><a href="../clientCrud/clientUpdate.php?id_client= <?php echo $row["id_client"];?> "class="safety">U<i class="fas fa-cogs"></i></a></td>
                        <td><a href="../clientCrud/clientScrap.php?id_client= <?php echo $row["id_client"];?>" class="safety">S<i class="fas fa-snowplow"></i></a>"></td>
                    </tr>
                </tbody>
            <?php
            }   mysqli_free_result($custom)?>

            </thead>
            </table>
        </div>
    </div>
    <script scr="../js/confirm.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>