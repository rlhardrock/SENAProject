<?php

class employee {

    //Enumerations
    //Constants
    //Attributes

    private $citizen_number;
    private $first_name;
    private $last_name;
    private $cellphone;
    private $motor_rol;
    private $email;
    private $agreement;
    private $contract;
    private $cancellation;

    //Constructor

    public function __construct($citizen_number,$first_name,$last_name,$cellphone,$motor_rol,$email,$agreement,$contract,$cancellation){
        $this->citizen_number=$citizen_number;
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->cellphone=$cellphone;
        $this->motor_rol=$motor_rol;
        $this->email=$email;
        $this->agreement=$agreement;
        $this->contract=$contract;
        $this->cancellation=$cancellation;

    }

    //CRUD

    /* public function addEmployee() {
        $this->Conexion=connection();
        $sql= "INSERT INTO employees(citizen_number,first_name,last_name,cellphone,motor_rol,email,agreement,contract,cancellation) VALUES ('$this->citizen_number','$this->first_name','$this->last_name','$this->cellphone','$this->motor_rol','$this->email','$this->agreement','$this->contract','$this->cancellation')";
        $result= $this->Conexion->query($sql);
        $this->Conexion->close();
        return $result;

    }

    public function consultEmployee() {
        $this->Conexion=connection();
        $sql= "SELECT * FROM employees";
        $result= $this->Conexion->query($sql);
        $this->Conexion->close();
        return $result;
    } */

    //Methods

    public function setCitizen_number($citizen_number) {
        $this->citizen_number=$citizen_number;
    }

    public function getCitizen_number($citizen_number) {
        return ($this->$citizen_number);
    }

    public function setFirst_name($first_name) {
        $this->first_name=$first_name;
    }

    public function getFirst_name($first_name) {
        return ($this->first_name);
    }

    public function setLast_name($last_name) {
        $this->Last_name=$last_name;
    }

    public function getLast_name($last_name) {
        return ($this->last_name);
    }

    public function setCellphone($cellphone) {
        $this->cellphone=$cellphone;
    }

    public function getCellphone($cellphone) {
        return ($this->cellphone);
    }

    public function setMotor_rol($motor_rol) {
        $this->motor_rol=$motor_rol;
    }

    public function getMotor_rol($motor_rol) {
        return ($this->motor_rol);
    }

    public function setEmail($email) {
        $this->email=$email;
    }

    public function getEmail($email) {
        return ($this->email);
    }

    public function setAgreement($agreement){
        $this->agreement=$agreement;
    }

    public function getAgreement($agreement) {
        return ($this->agreement);
    }

    public function setContract($contract) {
        $this->contract=$contract;
    }

    public function getContract($contract) {
        return ($this->$contract);
    }

    public function setCancellation($cancellation) {
        $this->cancellation=$cancellation;
    }

    public function getCancellation($cancellation) {
        return ($this->$cancellation);
    }

    //Formulations

    //Invariants

}
