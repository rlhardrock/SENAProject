<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/dash.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/favicon.png">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <title>SENA ADSI</title>

</head>

<body class="body-bg" onload="rain()">

    <div class="rainyday">
        <img id="background">

    </div>

        <div class="container-all">

            <h1 class="main-title">
                <b>DASHBOARD</b>
                <!-- <button type="button" class="logout pulse" onclick="location.href='../main.html'" >
                    LOGOUT
                </button> -->
            </h1>
    
            <div class="container-box">
    
                <a href="#">
                    <div class="box box1">
    
                        <i class="fas fa-car icon"></i>
                        <h4 class="title">VEHICLES</h4>
                        <p class="botones">
                            <button type="button" class="pulse" onclick="location.href='../vehicleCrud/vehicleList.php'">LIST</button>
                            <br>
                            <button type="button" class="pulse" onclick="location.href='../views/vehicleForm.php'">
                                INSCRIPTION
                            </button>
                        </p>
                        <div class="background-hover"></div>
    
                    </div>
                </a>
    
                <a href="#">
                    <div class="box box2">
    
                        <i class="fas fa-users icon"></i>
                        <h4 class="title">CLIENTS</h4>
                        <p class="botones">
                            <button type="button" class="pulse" onclick="location.href='../clientCrud/clientList.php'">LIST</button>
                            <br>
                            <br>
                            <button type="button" class="pulse" onclick="location.href='../views/clientForm.php'">
                              INSCRIPTION
                            </button></p>
                        <div class="background-hover"></div>
    
                    </div>
                </a>
    
                <a href="#">
                    <div class="box box3">
    
                        <i class="fas fa-cogs icon"></i>
                        <h4 class="title">PRODUCTS</h4>
                        <p class="botones">
                            <button type="button" class="pulse" onclick="location.href='../productCrud/productList.php'">LIST</button>
                            <br>
                            <br>
                            <button type="button" class="pulse" onclick="location.href='../views/productForm.php'">
                              INSCRIPTION
                            </button></p>
                        <div class="background-hover"></div>
    
                    </div>
                </a>
    
                <a href="#">
                    <div class="box box4">
    
                        <i class="fas fa-tools icon"></i>
                        <h4 class="title">SERVICES</h4>
                        <p class="botones">
                            <button type="button" class="pulse" onclick="location.href='../serviceCrud/serviceList.php'">LIST</button>
                            <br>
                            <br>
                            <button type="button" class="pulse" onclick="location.href='../views/serviceForm.php'">
                              INSCRIPTION
                            </button></p>
                        <div class="background-hover"></div>
    
                    </div>
                </a>
    
                <a href="#">
                    <div class="box box5">
    
                        <i class="fas fa-address-book icon"></i>
                        <h4 class="title">EMPLOYEES</h4>
                        <p class="botones">
                            <button type="button" class="pulse" onclick="location.href='../employeeCrud/employeeList.php'">LIST</button>
                            <br>
                            <br>
                            <button type="button" class="pulse" onclick="location.href='../views/employeeForm.php'">
                              INSCRIPTION
                            </button></p>
                        <div class="background-hover"></div>
    
                    </div>
                </a>
    
                <a href="#">
                    <div class="box box6">
    
                        <i class="fas fa-file-invoice-dollar icon"></i>
                        <h4 class="title">BILLS</h4>
                        <p class="botones">
                            <button type="button" class="btn btn-warning" onclick="location.href='../views/billInvoice.php'">BUILD</button>
                            <br>
                            <button type="button" class="btn btn-warning">LIST</button></p>
                        <div class="background-hover"></div>
    
                    </div>
                </a>
    
            </div>
    
        </div>

    <!-- </div> -->

    <script src="../js/rainyday.js"></script>
    <script src="../js/tscript.js"></script>
</body>
</html>