<?php

require '../models/connectionDatabase.php';

/* $objConnection = Connect(); */ //optional
$products = "SELECT * FROM products";
$result = mysqli_query($connection,$products);
$AllProducts = mysqli_num_rows($result); //optional
mysqli_free_result($result);
/* mysqli_close($connection); */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/styles.css">

    <title>REGISTERED PRODUCTS</title>

</head>

<body>
    <div class='container-fluid'>
        <br>
        <h2>
            <?php   echo "All Registered products are: " . $AllProducts;    ?>
        </h2>
        <br>

        <div class="col-md-10">
            <h3>RESULTS</h3>

            <table class="table table-dark table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product</th>
                        <th scope="col">Factory Serial</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Technology</th>
                        <th scope="col">Weather</th>
                        <th scope="col">Bodywork</th>
                        <th scope="col">Category</th>
                        <th scope="col">Highway</th>
                        <th scope="col">Warranty</th>
                        <th scope="col">Price</th>
                        <th scope="col">Register</th>

                        <th scope="col">Update!</th>
                        <th scope="col">Scrap!</th>

                    </tr>

            <?php
                $autopart = mysqli_query($connection,$products);
                while ($row = mysqli_fetch_assoc($autopart))
            {?>

                <tbody>
                    <tr>
                        <td><?php echo $row["id_product"]; ?></td>
                        <td><?php echo $row["product_name"]; ?></td>
                        <td><?php echo $row["factory_serial"]; ?></td>
                        <td><?php echo $row["brand"]; ?></td>
                        <td><?php echo $row["technology"]; ?></td>
                        <td><?php echo $row["weather"]; ?></td>
                        <td><?php echo $row["bodywork"]; ?></td>
                        <td><?php echo $row["category"]; ?></td>
                        <td><?php echo $row["highway"]; ?></td>
                        <td><?php echo $row["warranty"]; ?></td>
                        <td><?php echo $row["price"]; ?></td>
                        <td><?php echo $row["register"]; ?></td>

                        <td><a href="../productCrud/productUpdate.php?id_product= <?php echo $row["id_product"];?> "class="safety"><i class="fas fa-cogs"></i></a></td>
                        <td><a href="../productCrud/productScrap.php?id_product= <?php echo $row["id_product"];?>" class="safety"><i class="fas fa-snowplow"></i></a></td>
                    </tr>
                </tbody>
            <?php
            }   mysqli_free_result($autopart); ?>

            </thead>
            </table>
        </div>
    </div>
    <script scr="../js/confirm.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>