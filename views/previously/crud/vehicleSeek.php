<?php

    require "../models/connectionDatabase.php";


    // Desarrollar  una pg para busqueda individual

    $objConnection = Connect();
    $sql="SELECT * FROM vehicles WHERE license='' OR model='' OR bodywork='' OR paint='' ";
    $result = $objConnection->query($sql);

    //print data
    if  ($vehicle = $result->fetch_object()){
        echo "<br> Mark :  ".$vehicle->getMark();
        echo "<br> Model :  ".$vehicle->getModel();
        echo "<br> License:  ".$vehicle->getLicense();
        echo "<br> Manufacturing :  ".$vehicle->getManufacturing();
        echo "<br> Bodywork :  ".$vehicle->getBodywork();
        echo "<br> Paint :  ".$vehicle->getPaint();
    }else{
        echo "No registered Vehicle";
    }

    /* mysqli_close($objConnection); */
