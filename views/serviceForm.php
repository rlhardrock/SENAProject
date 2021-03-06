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
                    <h1>SERVICE REGISTRATION</h1>
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
    <form method="POST" action="../serviceCrud/serviceAdd.php">
        <div class="row">
            <div class="col-md-4">
                <!-- <div class="mb-3">
                    <label for="input_citizen_number" class="form-label">Citizen Number</label>
                    <input type="text" class="form-control" name="citizen_number" id="citizen_number" placeholder="only numbers without characters" />
                </div>

                <div class="mb-3">
                    <label for="input_email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="" />
                </div>

                <div class="mb-3">
                    <label for="input_motor_rol" class="form-label">Technical Rol</label>
                    <input type="text" class="form-control" name="motor_rol" id="motor_rol" placeholder="optional" />
                </div> -->
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label for="input_service" class="form-label">Service</label>
                    <select
                        class="form-select"
                        name="type_service"
                        id="service"
                        aria-label="Default select example">
                        <option selected>...select</option>

                        <option>Suspension</option>
                        <option>Swinging</option>
                        <option>Alignment</option>
                        <option>Rectification</option>
                        <option>Calibration</option>
                        <option>Leveling</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="input_parking_day" class="form-label">Parking Days</label>
                    <input type="number" class="form-control" name="parking_day" id="parking_day" placeholder="" />
                </div>

                <div class="mb-3">
                    <label for="input_cost_service" class="form-label">Cost Service</label>
                    <input type="number" class="form-control" name="cost_servicio" id="cost_servicio" placeholder="" />
                </div>
            </div>

            <div class="col-md-4">
                <!-- <div class="mb-3">
                    <label for="input_last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="" />
                </div>

                <div class="mb-3">
                    <label for="input_status" class="form-label">Status Condition</label>
                    <input type="input" class="form-control" name="status" id="exampleFormControlInput1" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="input_cancellation" class="form-label">Cancellation</label>
                    <input type="date" class="form-control" name="cancellation" id="cancellation" placeholder="" />
                </div> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="d-grid gap-3">
                    <button class="btn btn-success" type="submit"
                        >SUBMIT</button>
                    <button class="btn btn-warning" type="reset" value="Reset">
                        RESET
                    </button>
                </div>
            </div>
            <div class="col-md-4">
            </div>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>