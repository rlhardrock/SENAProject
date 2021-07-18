<?php

require "../models/connectionDatabase.php";

/* $objConnection = Connect(); */
$id_product = $_GET["id_product"];
$update_product="SELECT * FROM products WHERE id_product='$id_product'";


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

    <title>UPDATE PRODUCT</title>

</head>

<body class="body">
    <h1>UPDATE PRODUCT</h1>
    <br>
    <div class='container-fluid'>
        
        <br>
        <div class='row'>
            <div class="col-md-6">
                <h3>FORM</h3>
                <form method="POST" action="../productCrud/productProcess.php">

                    <?php $result = mysqli_query($connection,$update_product);
                    while($row= mysqli_fetch_assoc($result)) { ?>

                    <input type="hidden"
                    value="<?php echo $row["id_product"];?>"
                    name="id_product">

                    <div class="mb-3">
                        <label>Product</label>
                        <input type="text" class="form-control" name="product_name" id="product_name" value="<?php echo $row["product_name"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Factory Serial</label>
                        <input type="text" class="form-control" name="factory_serial" id="factory_serial" value="<?php echo $row["factory_serial"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Brand</label>
                        <input type="text" class="form-control" name="brand" id="brand" value="<?php echo $row["brand"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Technology</label>
                        <input type="text" class="form-control" name="technology" id="technology" value="<?php echo $row["technology"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Weather</label>
                        <input type="text" class="form-control" name="weather" id="weather" value="<?php echo $row["weather"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Bodywork</label>
                        <input type="text" class="form-control" name="bodywork" id="bodywork" value="<?php echo $row["bodywork"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Category</label>
                        <input type="text" class="form-control" name="category" id="category" value="<?php echo $row["category"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Highway</label>
                        <input type="text" class="form-control" name="highway" id="highway" value="<?php echo $row["highway"];?>" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Warranty</label>
                        <input type="text" class="form-control" name="warranty" id="warranty" value="<?php echo $row["warranty"];?>"
                        placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" id="price" value="<?php echo $row["price"];?>"
                        placeholder="">
                    </div>

                    <div class="mb-3">
                        <label>Register</label>
                        <input type="text" class="form-control" name="register" id="register" value="<?php echo $row["register"];?>" placeholder="">
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