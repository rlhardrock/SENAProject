<?php

require "../models/connectionDatabase.php";

/* $objConnection = Connect(); */
$id = $_GET["id_service"];
$update_service="SELECT * FROM services WHERE id_service='$id'";
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

    <title>UPDATE SERVICE</title>

</head>

<body class="body">
    <h1>UPDATE SERVICE</h1>
    <br>
    <div class='container-fluid'>
        <h2>...</h2>
        <br>
        <div class='row'>
            <div class="col-md-6">
                <h3>FORM</h3>
                <form method="POST" action="../serviceCrud/serviceProcess.php">

                    <?php $result = mysqli_query($connection,$update_service);
                    while($row= mysqli_fetch_assoc($result)) { ?>

                    <input type="hidden"
                    value="<?php echo $row["id_service"];?>"
                    name="id">

                    <div class="mb-3">
                        <label for="input_type_service" class="form-label">Type Service</label>
                        <input type="text" class="form-control" name="type_service" id="type_service" value="<?php echo $row["type_service"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_cost_service" class="form-label">Cost Service</label>
                        <input type="text" class="form-control" name="cost_service" id="cost_service" value="<?php echo $row["cost_service"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="input_parking_day" class="form-label">Parking Day</label>
                        <input type="text" class="form-control" name="parking_day" id="parking_day" value="<?php echo $row["parking_day"];?>" placeholder="">
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