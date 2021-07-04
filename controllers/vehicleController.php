<?php


    $vehicle = new Vehicle();

    $arguments = (!empty($_POST['motion']) ? $_POST['motion'] : $_GET['motion']);

    switch ($arguments) {
        case 'Build Vehicle':
                return ($vehicle->addVehicle($_POST));
            break;

        default:
                return Error;
            break;

    }


?>



<!-- public function addVehicle($POST) {

include "../models/databaseConnection.php";

$this->Conexion=connection();
$sql= "INSERT INTO vehicles(mark,model,bodywork,manufacturing,enrollment,license_plate,paint,cylinder,transmission,motor,suspension,service)
    VALUES ('$this->mark','$this->model','$this->bodywork','$this->manufacturing','$this->enrollment','$this->license_plate','$this->paint','$this->cylinder','$this->transmission','$this->motor','$this->suspension','$this->service')";
$result= $this->Conexion->query($sql);
$this->Conexion->close();
return $result;

}

public function consultVehicle() {

include "../models/databaseConnection.php";

$this->Conexion=connection();
$sql= "SELECT * FROM vehicles";
$result= $this->Conexion->query($sql);
$this->Conexion->close();
return $result;
} -->





