<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/favicon.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
        <link rel="stylesheet" href="../style/general.css" />

    <title>SENA ADSI</title>
</head>

<body>
    <header>
        <div class="centre">
            <div class="row">
                <div class="col-8" style="background-color: #aaa">
                    <br>
                    <h1>PRODUCT REGISTRATION</h1>
                </div>
                <div class="col-2" style="background-color: #bbb">
                    <br>
                    <button type="button" class="btn btn-primary"
                        onclick="location.href='../views/dashboard.php'">DASHBOARD</button>
                    <br>
                </div>
                <div class="col-2" style="background-color: #ccc">
                    <br>
                    <button type="button" class="btn btn-danger" onclick="location.href='../main.php'">LOGOUT</button>
                    <br>
                </div>
            </div>
    </header>
    <br>
    <form method="POST" action="../productCrud/productAdd.php">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="input_product_name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="product_name" id="product_name" placeholder="" />
                </div>

                <div class="mb-3">
                    <label for="input_weather" class="form-label">Weather</label>
                    <select
                        class="form-select"
                        name="weather"
                        id="weather"
                        aria-label="Default select example">
                        <option selected>...select</option>

                        <option>Permaroad</option>
                        <option>Autumn</option>
                        <option>Summer</option>
                        <option>Spring</option>
                        <option>Winter</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="input_warranty" class="form-label">Warranty</label>
                    <input type="text" class="form-control" name="warranty" id="warranty" placeholder="" />
                </div>

                <div class="mb-3">
                    <label for="input_category" class="form-label">Category</label>
                    <select
                        class="form-select"
                        name="category"
                        id="category"
                        aria-label="Default select example">
                        <option selected>...select</option>

                        <option>Polyvalent</option>
                        <option>Performance</option>
                        <option>SemiSlick</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label for="input_factory_serial" class="form-label">Factory Serial</label>
                    <input type="text" class="form-control" name="factory_serial" id="factory_serial" placeholder="" />
                </div>

                <div class="mb-3">
                    <label for="input_bodywork" class="form-label">Bodywork</label>
                    <select
                        class="form-select"
                        name="bodywork"
                        id="bodywork"
                        aria-label="Default select example">
                        <option selected>...select</option>

                        <option>Autobus</option>
                        <option>Automovil</option>
                        <option>Pickup</option>
                        <option>Truck</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="input_price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="" />
                </div>

                <div class="mb-3">
                    <label for="input_register" class="form-label">Register</label>
                    <input type="date" class="form-control" name="register" id="register" placeholder="" />
                </div>

            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label for="input_brand" class="form-label">Brand</label>
                    <input type="text" class="form-control" name="brand" id="brand" placeholder="" />
                </div>

            <div class="mb-3">
                <label for="input_technology" class="form-label">Technology</label>
                <select
                    class="form-select"
                    name="technology"
                    id="technology"
                    aria-label="Default select example">
                    <option selected>...select</option>

                    <option>Radial</option>
                    <option>Sellomatic</option>
                    <option>RunFlat</option>
                    <option>Ecologic</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="input_highway" class="form-label">Highway</label>
                <select
                    class="form-select"
                    name="highway"
                    id="highway"
                    aria-label="Default select example">
                    <option selected>...select</option>

                    <option>AllTerrain</option>
                    <option>OffRoad</option>
                    <option>Rally</option>
                    <option>Cross</option>
                    <option>City</option>
                </select>
            </div>
            </div>
        </div>

        <div class="d-grid gap-3">
            <button class="btn btn-success" type="submit">SUBMIT</button>
            <button class="btn btn-warning" type="reset" value="Reset">RESET
            </button>
        </div>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>