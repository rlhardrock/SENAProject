<?php

class client {
    //Enumerations
    //Constants
    //Attributes

    private $citizen_number;
    private $name;
    private $surname;
    private $email;
    private $phone_number;
    private $profession;
    private $business;
    private $inscription;

    //Constructor

    public function __construct($citizen_number,$name,$surname,$email,$phone_number,$profession,$business,$inscription){
        $this->citizen_number=$citizen_number;
        $this->name=$name;
        $this->surname=$surname;
        $this->email=$email;
        $this->phone_number=$phone_number;
        $this->profession=$profession;
        $this->business=$business;
        $this->inscription=$inscription;

    }

    //CRUD

    /* public function addClient() {
        $this->Conexion=connection();
        $sql= "INSERT INTO clients(citizen_number,name,surname,email,phone_number;profession,business,inscription)
               VALUES ('$this->citizen_number','$this->name','$this->surname','$this->email','$this->phone_number','$this->profession','$this->business','$this->inscription')";
        $result= $this->Conexion->query($sql);
        $this->Conexion->close();
        return $result;

    }

    public function consultClient() {
        $this->Conexion=connection();
        $sql= "SELECT * FROM clients";
        $result= $this->Conexion->query($sql);
        $this->Conexion->close();
        return $result;
    } */

    //Methods

    public function setCitizen_number($citizen_number) {
        $this->citizen_number=$citizen_number;
    }

    public function getCitizen_number($citizen_number) {
        return ($this->citizen_number);
    }

    public function setName($name) {
        $this->name=$name;
    }

    public function getName($name) {
        return ($this->name);
    }

    public function setSurname($surname) {
        $this->mark=$surname;
    }

    public function getSurname($surname) {
        return ($this->surname);
    }

    public function setEmail($email) {
        $this->mark=$email;
    }

    public function getEmail($email) {
        return ($this->email);
    }

    public function setPhone_number($phone_number) {
        $this->mark=$phone_number;
    }

    public function getPhone_number($phone_number) {
        return ($this->phone_number);
    }

    public function setProfession($profession) {
        $this->mark=$profession;
    }

    public function getProfession($profession) {
        return ($this->profession);
    }

    public function setBusiness($business) {
        $this->mark=$business;
    }

    public function getBusiness($business) {
        return ($this->business);
    }

    public function setInscription($inscription) {
        $this->mark=$inscription;
    }

    public function getInscription($inscription) {
        return ($this->inscription);
    }
    //Formulations

    //Invariants

}
