<?php

require "../models/connectionDatabase.php";

/* $objConnection = Connect(); */
$citizen_number = $_GET["citizen_number"];
$update_client="SELECT * FROM clients WHERE citizen_number='$citizen_number'";

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

    <title>UPDATE CLIENT</title>

</head>

<body class="body">
    <h1>UPDATE CLIENT</h1>
    <br>
    <div class='container-fluid'>
        <h2>...</h2>
        <br>
        <div class='row'>
            <div class="col-md-6">
                <h3>FORM</h3>
                <form method="POST" action="../clientCrud/clientProcess.php">

                    <?php $result = mysqli_query($connection,$update_client);
                    while($row= mysqli_fetch_assoc($result)) { ?>

                    <input type="hidden" value="<?php echo $row["citizen_number"];?>" name="citizen_number">

                    <div class="mb-3">
                        <label>Citizen</label>
                        <input type="text" class="form-control" name="citizen_number" id="citizen_number" value="<?php echo $row["citizen_number"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $row["name"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Surname</label>
                        <input type="text" class="form-control" name="surname" id="surname" value="<?php echo $row["surname"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?php echo $row["email"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>PhoneNumber</label>
                        <input type="text" class="form-control" name="phone_number" id="phone_number" value="<?php echo $row["phone_number"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Profession</label>
                        <input type="text" class="form-control" name="profession" id="profession" value="<?php echo $row["profession"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Business</label>
                        <input type="text" class="form-control" name="business" id="business" value="<?php echo $row["business"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Inscription</label>
                        <input type="text" class="form-control" name="inscription" id="inscription" value="<?php echo $row["inscription"];?>" placeholder="">
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="Submit">Update</button>
                    </div>

                    <?php } mysqli_free_result($result); ?>
                </form>

            </div>

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>