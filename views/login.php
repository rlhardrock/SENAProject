<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/favicon.png">
    <link rel="stylesheet" href="../style/general.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <title>SENA ADSI</title>
  </head>
  <body>
    <div>
     
      <section>
        <br />
        <div class="padre">
          <form class="hijo">
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label"
                >Email</label
              >
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" />
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label"
                >Password</label
              >
              <div class="col-sm-10">
                <input
                  type="password"
                  class="form-control"
                  id="inputPassword3"
                  
                />
              </div>
            </div>
            <div class="row mb-3">
              <button type="submit" class="btn btn-primary" >Sign In</button>
            </div>
          </form>
          
        </div>
        
        <div class="col-1  point">
          <button type="submit" class="btn btn-warning" onclick="location.href='../main.php'">HOME</button>
        </div>
        <div class="col-1  point">
          <button type="submit" class="btn btn-light" onclick="location.href='../views/dashboard.php'">DASHBOARD</button>
        </div>
      </section>
    </div>

    <!--  bundle bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


