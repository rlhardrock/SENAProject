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
                    <h1>CLIENT REGISTRATION</h1>
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
    <form method="POST" action="../clientCrud/clientAdd.php">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label>Citizen Number</label>
                    <input type="text" class="form-control" name="citizen_number" id="citizen_number" placeholder="only numbers without characters" />
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="" />
                </div>

                <div class="mb-3">
                    <label>Business</label>
                    <input type="text" class="form-control" name="business" id="business" placeholder="optional" />
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="" />
                </div>

                <div class="mb-3">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="" />
                </div>

                <div class="mb-3">
                    <label>Inscription</label>
                    <input type="date" class="form-control" name="inscription" id="inscription" placeholder="" />
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label>Surname</label>
                    <input type="text" class="form-control" name="surname" id="surname" placeholder="" />
                </div>

                <div class="mb-3">
                    <label>Profession</label>
                    <input type="text" class="form-control" name="profession" id="profession" placeholder="optional" />
                </div>
            </div>
        </div>

        <div class="d-grid gap-3">
            <button class="btn btn-success" type="submit">SUBMIT</button>
            <button class="btn btn-warning" type="reset" value="Reset">
                RESET
            </button>
        </div>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>