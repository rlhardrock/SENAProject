<?php


    $employee = new Employee();

    $arguments = (!empty($_POST['motion']) ? $_POST['motion'] : $_GET['motion']);

    switch ($arguments) {
        case 'Build Employee':
                return ($employee->addEmployee($_POST));
            break;

        default:
                return Error;
            break;

    }

?>



<!-- public function addEmployee($POST) {

include "../models/databaseConnection.php";

$this->Conexion=connection();
$sql= "INSERT INTO Employees(mark,model,bodywork,manufacturing,enrollment,license_plate,paint,cylinder,transmission,motor,suspension,service)
    VALUES ('$this->mark','$this->model','$this->bodywork','$this->manufacturing','$this->enrollment','$this->license_plate','$this->paint','$this->cylinder','$this->transmission','$this->motor','$this->suspension','$this->service')";
$result= $this->Conexion->query($sql);
$this->Conexion->close();
return $result;

}

public function consultEmployee() {

include "../models/databaseConnection.php";

$this->Conexion=connection();
$sql= "SELECT * FROM Employees";
$result= $this->Conexion->query($sql);
$this->Conexion->close();
return $result;
} -->





