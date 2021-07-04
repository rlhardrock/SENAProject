<?php

class service {

    //Enumerations
    //Constants
    //Attributes

    private $type_service;
    private $cost_service;
    private $parking_day;

    //Constructor

    public function __construct($type_service,$cost_service,$parking_day){
        $this->type_service=$type_service;
        $this->cost_service=$cost_service;
        $this->parking_day=$parking_day;
    }

    //CRUD

   /*  public function addService() {
        $this->Conexion=connection();
        $sql= "INSERT INTO services(type_service,cost_service,parking_day)
               VALUES ('$this->type_service','$this->cost_service','$this->parking_day')";
        $result= $this->Conexion->query($sql);
        $this->Conexion->close();
        return $result;

    }

    public function consultService() {
        $this->Conexion=connection();
        $sql= "SELECT * FROM services";
        $result= $this->Conexion->query($sql);
        $this->Conexion->close();
        return $result;
    } */

    //Methods

    public function setType_service($type_service) {
        $this->type_service=$type_service;
    }

    public function getType_service($type_service) {
        return ($this->type_service);
    }

    public function setCost_service($cost_service) {
        $this->cost_service=$cost_service;
    }

    public function getCost_service($cost_service) {
        return ($this->cost_service);
    }

    public function setParking_day($parking_day) {
        $this->parking_day=$parking_day;
    }

    public function getParking_day($parking_day) {
        return ($this->parking_day);
    }

    //Formulations

    //Invariants

}
