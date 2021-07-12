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
          <h1>VEHICLE REGISTRATION</h1>
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

  <form method="POST" action="../vehicleCrud/vehicleAdd.php">
    <div class="row">
      <div class="col-md-3">
        <div class="mb-3">
          <label for="input_mark" class="form-label">Mark</label>
          <input type="text" class="form-control" name="mark" id="mark" placeholder="" />
        </div>

        <div class="mb-3">
          <label for="input_model" class="form-label">Model</label>
          <input type="text" class="form-control" name="model" id="model" placeholder="" />
        </div>

        <div class="mb-3">
          <label for="input_bodywork" class="form-label">Bodywork</label>
          <select class="form-select" name="bodywork" id="bodywork" aria-label="Default select example">
            <option selected>...select</option>

            <option value="1">Autobus</option>
            <option value="2">Camper</option>
            <option value="3">Cabriolet</option>
            <option value="4">Coupe</option>
            <option value="5">Crossover</option>
            <option value="6">Hatchback</option>
            <option value="7">Liftback</option>
            <option value="8">Muscle</option>
            <option value="9">Pickup</option>
            <option value="10">Roadster</option>
            <option value="11">Sedan</option>
            <option value="12">Sportback</option>
            <option value="13">Truck</option>
            <option value="14">Wagon Station</option>
          </select>
        </div>


      </div>
      <div class="col-md-3">
        <div class="mb-3">
          <label for="input_enrollment" class="form-label">Enrollment</label>
          <input type="text" class="form-control" name="enrollment" id="enrollment" placeholder="" />
        </div>

        <div class="mb-3">
          <label for="input_license" class="form-label">License</label>
          <input type="text" class="form-control" name="license" id="license" placeholder="" />
        </div>

        <div class="mb-3">
          <label for="input_paint" class="form-label">Paint</label>
          <input type="text" class="form-control" name="paint" id="paint" placeholder="" />
        </div>

      </div>
      <div class="col-md-3">
        <div class="mb-3">
          <label for="input_transmission" class="form-label">Transmission</label>
          <select class="form-select" name="transmission" id="transmission" aria-label="Default select example">
            <option selected>...select</option>

            <option value="1">Manual Classic Standar</option>
            <option value="2">Double Cluth</option>
            <option value="3">Continuous Variable</option>
            <option value="4">Robotick</option>
            <option value="5">Torque Converter</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="input_motor" class="form-label">Motor</label>
          <select class="form-select" name="motor" id="motor" aria-label="Default select example">
            <option selected>...select</option>

            <option value="1">Electric</option>
            <option value="2">Gasoline</option>
            <option value="3">Gas</option>
            <option value="4">Diesel</option>
            <option value="5">Hybrid</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="input_suspension" class="form-label">Suspension</label>
          <select class="form-select" name="suspension" id="suspension" aria-label="Default select example">
            <option selected>...select</option>

            <option value="1">Dial</option>
            <option value="2">Helicoidal</option>
            <option value="3">Multilink</option>
            <option value="4">Torsion</option>
            <option value="5">Laminate</option>
            <option value="6">MacPherson</option>
          </select>
        </div>

      </div>
      <div class="col-md-3">
        <div class="mb-3">
          <label for="input_manufacturing" class="form-label">Manufacturing</label>
          <input type="text" class="form-control" name="manufacturing" id="manufacturing" placeholder="" />
        </div>

        <div class="mb-3">
          <label for="input_cylinder" class="form-label">Cylinder</label>
          <input type="text" class="form-control" name="cylinder" id="cylinder" placeholder="" />
        </div>

        <div class="mb-3">
          <label for="input_service" class="form-label">Service</label>
          <input type="text" class="form-control" name="service" id="service" placeholder="" />
        </div>

        <div class="mb-3">
          <label for="input_settlement" class="form-label">Settlement</label>
          <input type="date" class="form-control" name="settlement" id="settlement">" />
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


<!--Robotizada
Alfa Romeo, Fiat (Dualogic)
Citroën-Peugeot (ETG y CMP)
Dacia (Easy-R)
Lancia (DFN)
Opel (Easytronic)
Renault (Quickshift)
SEAT, Skoda, VW (ASG)
Suzuki (AGS)
Toyota (x-shift) -->

<!--Doble Embrague (DSG)
Alfa Romeo (TCT)
Audi (S-Tronic)
BMW (DKG)
Fiat (DDCT)
Ford (Powershift)
Hyundai-Kia (DCT)
Mercedes (7G-DCT)
Renault (EDC)
Porsche (PDK)
SEAT, Skoda, VW (DSG)
Smart (Twinamic)
Volvo (Powershift) -->


<!--Automáticas CVT
Audi, VW (Multitronic)
Honda (CVT)
Nissan (CVT, Xtronic)
Subaru (Lineatronic)
Toyota (Multidrive) -->

<!--Convertidor de Par
Audi, VW (Tiptronic)
BMW (Steptronic)
Citroën, DS, Peugeot (EAT)
Mazda (Skyactiv-Drive)
Mercedes (xG-Tronic)
Volvo (Geartronic) -->