<?php

require '../models/connectionDatabase.php';

/* $objConnection = Connect(); */ //optional
$employees = "SELECT * FROM employees";
$result = mysqli_query($connection,$employees);
$AllEmployees = mysqli_num_rows($result); //optional
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

    <title>REGISTERED EMPLOYEES</title>

</head>

<body>
    <div class='container-fluid'>
        <br>
        <h2>
            <?php   echo "All Registered Employees are: " . $AllEmployees;    ?>
        </h2>
        <br>

        <div class="col-md-10">
            <h3>RESULTS</h3>

            <table class="table table-dark table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Citizen Number</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Cellphone</th>
                        <th scope="col">Motor Rol</th>
                        <th scope="col">Email</th>
                        <th scope="col">Agreement</th>
                        <th scope="col">Contract</th>
                        <th scope="col">Cancellation</th>
                        
                        <th scope="col">Update!</th>
                        <th scope="col">Scrap!</th>

                    </tr>

            <?php
                $employ = mysqli_query($connection,$employees);
                while ($row = mysqli_fetch_assoc($employ))
            {?>

                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $row["citizen_number"]; ?></td>
                        <td><?php echo $row["first_name"]; ?></td>
                        <td><?php echo $row["last_name"]; ?></td>
                        <td><?php echo $row["cellphone"]; ?></td>
                        <td><?php echo $row["motor_rol"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["agreement"]; ?></td>
                        <td><?php echo $row["contract"]; ?></td>
                        <td><?php echo $row["cancellation"]; ?></td>
                        
                        <td><a href="../employeeCrud/employeeUpdate.php?id_employee= <?php echo $row["id_employee"];?> "class="safety">U<i class="fas fa-cogs"></i></a></td>
                        <td><a href="../employeeCrud/employeeScrap.php?id_employee= <?php echo $row["id_employee"];?>" class="safety">S<i class="fas fa-snowplow"></i></a>"></td>
                    </tr>
                </tbody>
            <?php
            }   mysqli_free_result($employ)?>

            </thead>
            </table>
        </div>
    </div>
    <script scr="../js/confirm.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>

