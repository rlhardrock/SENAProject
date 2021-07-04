<?php

    class vehicle {

        //Enumerations
        //Constants
        //Attributes

        private $mark;
        private $model;
        private $bodywork;
        private $manufacturing;
        private $enrollment;
        private $license;
        private $paint;
        private $cylinder;
        private $transmission;
        private $motor;
        private $suspension;
        private $service;
        private $settlement;

        //Constructor

        public function __construct($mark,$model,$bodywork,$manufacturing,$enrollment,$license,$paint,$cylinder,$transmission,$motor,$suspension,$service,$settlement){
            $this->mark=$mark;
            $this->model=$model;
            $this->bodywork=$bodywork;
            $this->manufacturing=$manufacturing;
            $this->enrollment=$enrollment;
            $this->license=$license;
            $this->paint=$paint;
            $this->cylinder=$cylinder;
            $this->transmission=$transmission;
            $this->motor=$motor;
            $this->suspension=$suspension;
            $this->service=$service;
            $this->settlement=$settlement;
        }

     /*    public function addVehicle($POST) {

            include "../models/databaseConnection.php";

            $this->Conexion=connect();
            $sql= "INSERT INTO vehicles(mark,model,bodywork,manufacturing,enrollment,license,paint,cylinder,transmission,motor,suspension,service,settlement)
                VALUES ('$this->mark','$this->model','$this->bodywork','$this->manufacturing','$this->enrollment','$this->license_plate','$this->paint','$this->cylinder','$this->transmission','$this->motor','$this->suspension','$this->service','$this->settlement')";
            $result= $this->Conexion->query($sql);
            $this->Conexion->close();
            return $result;

            }

            public function consultVehicle() {

            include "../models/databaseConnection.php";

            $this->Conexion=connect();
            $sql= "SELECT * FROM vehicles";
            $result= $this->Conexion->query($sql);
            $this->Conexion->close();
            return $result;
            }
 */


        //Methods

        public function setMark($mark) {
            $this->mark=$mark;
        }

        public function getMark($mark) {
            return ($this->mark);
        }

        public function setModel($model) {
            $this->model=$model;
        }

        public function getModel($model) {
            return ($this->model);
        }

        public function setBodywork($bodywork) {
            $this->bodywork=$bodywork;
        }

        public function getBodywork($bodywork) {
            return ($this->bodywork);
        }

        public function setManufacturing($manufacturing) {
            $this->manufacturing=$manufacturing;
        }

        public function getManufacturing($manufacturing) {
            return ($this->manufacturing);
        }

        public function setEnrollment($enrollment) {
            $this->enrollment=$enrollment;
        }

        public function getEnrollment($enrollment) {
            return ($this->enrollment);
        }

        public function setLicense($license) {
            $this->license=$license;
        }

        public function getLicense($license) {
            return ($this->license);
        }

        public function setPaint($paint) {
            $this->paint=$paint;
        }

        public function getPaint($paint) {
            return ($this->paint);
        }

        public function setCylinder($cylinder) {
            $this->cylinder=$cylinder;
        }

        public function getCylinder($cylinder) {
            return ($this->cylinder);
        }

        public function setTransmission($transmission) {
            $this->transmission=$transmission;
        }

        public function getTransmission($transmission) {
            return ($this->transmission);
        }

        public function setMotor($motor) {
            $this->motor=$motor;
        }

        public function getMotor($motor) {
            return ($this->motor);
        }

        public function setSuspension($suspension) {
            $this->suspension=$suspension;
        }

        public function getSuspension($suspension) {
            return ($this->suspension);
        }

        public function setService($service) {
            $this->service=$service;
        }

        public function getService($service) {
            return ($this->service);
        }

        public function setSettlement($settlement) {
            $this->settlement=$settlement;
        }

        public function getSettlement($settlement) {
            return ($this->settlement);
        }

        //Formulations

        //Invariants


}


