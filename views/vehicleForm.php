<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="../img/favicon.png">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
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
          <button type="button" class="btn btn-primary" onclick="location.href='../views/dashboard.php'">DASHBOARD</button>
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

  <form method="post" action="../vehicleCrud/vehicleAdd.php">
    <div class="row">
      <div class="col-md-3">
        <div class="mb-3">
          <label>Mark</label>
          <input type="text" class="form-control" name="mark" id="mark" placeholder="" />
        </div>

        <div class="mb-3">
          <label>Model</label>
          <input type="text" class="form-control" name="model" id="model" placeholder="" />
        </div>

        <div class="mb-3">
          <label>Bodywork</label>
          <select class="form-select" name="bodywork" id="bodywork" aria-label="Default select example">
            <option selected>...select</option>

            <option>Autobus</option>
            <option>Camper</option>
            <option>Cabriolet</option>
            <option>Coupe</option>
            <option>Crossover</option>
            <option>Hatchback</option>
            <option>Liftback</option>
            <option>Muscle</option>
            <option>Pickup</option>
            <option>Roadster</option>
            <option>Sedan</option>
            <option>Sportback</option>
            <option>Truck</option>
            <option>Wagon Station</option>
          </select>
        </div>


      </div>
      <div class="col-md-3">
        <div class="mb-3">
          <label>Enrollment</label>
          <input type="text" class="form-control" name="enrollment" id="enrollment" placeholder="" />
        </div>

        <div class="mb-3">
          <label>License</label>
          <input type="text" class="form-control" name="license" id="license" placeholder="" />
        </div>

        <div class="mb-3">
          <label>Paint</label>
          <input type="text" class="form-control" name="paint" id="paint" placeholder="" />
        </div>

      </div>
      <div class="col-md-3">
        <div class="mb-3">
          <label>Transmission</label>
          <select class="form-select" name="transmission" id="transmission" aria-label="Default select example">
            <option selected>...select</option>

            <option>Manual Classic Standar</option>
            <option>Double Cluth</option>
            <option>Continuous Variable</option>
            <option>Robotick</option>
            <option>Torque Converter</option>
          </select>
        </div>

        <div class="mb-3">
          <label>Motor</label>
          <select class="form-select" name="motor" id="motor" aria-label="Default select example">
            <option selected>...select</option>

            <option>Electric</option>
            <option>Gasoline</option>
            <option>Gas</option>
            <option>Diesel</option>
            <option>Hybrid</option>
          </select>
        </div>

        <div class="mb-3">
          <label>Suspension</label>
          <select class="form-select" name="suspension" id="suspension" aria-label="Default select example">
            <option selected>...select</option>

            <option>Dial</option>
            <option>Helicoidal</option>
            <option>Multilink</option>
            <option>Torsion</option>
            <option>Laminate</option>
            <option>MacPherson</option>
          </select>
        </div>

        <div class="mb-3">
          <label>Client - Citizen Number</label>
          <input type="number" class="form-control" name="citizen_number" id="manufacturing" placeholder="the client must first be registered" Required/>
        </div>

      </div>


      <div class="col-md-3">
        <div class="mb-3">
          <label>Manufacturing</label>
          <input type="number" class="form-control" name="manufacturing" id="manufacturing" placeholder="" />
        </div>

        <div class="mb-3">
          <label>Cylinder</label>
          <input type="number" class="form-control" name="cylinder" id="cylinder" placeholder="" />
        </div>

        <div class="mb-3">
          <label>Service</label>
          <input type="text" class="form-control" name="service" id="service" placeholder="" />
        </div>

        <div class="mb-3">
          <label>Settlement</label>
          <input type="date" class="form-control" name="settlement" id="settlement" placeholder=""/>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>


<!--Robotizada
Alfa Romeo, Fiat (Dualogic)
Citro??n-Peugeot (ETG y CMP)
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


<!--Autom??ticas CVT
Audi, VW (Multitronic)
Honda (CVT)
Nissan (CVT, Xtronic)
Subaru (Lineatronic)
Toyota (Multidrive) -->

<!--Convertidor de Par
Audi, VW (Tiptronic)
BMW (Steptronic)
Citro??n, DS, Peugeot (EAT)
Mazda (Skyactiv-Drive)
Mercedes (xG-Tronic)
Volvo (Geartronic) -->