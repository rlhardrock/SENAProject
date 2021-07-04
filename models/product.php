<?php

class product {

    //Enumerations
    //Constants
    //Attributes

    private $product_name;
    private $factory_serial;
    private $brand;
    private $technology;
    private $weather;
    private $bodywork;
    private $category;
    private $highway;
    private $warranty;
    private $price;
    private $register;

    //Constructor

    public function __construct($product_name,$factory_serial,$brand,$technology,$weather,$bodywork,$category,$highway,$warranty,$price,$register){
        $this->product_name=$product_name;
        $this->factory_serial=$factory_serial;
        $this->brand=$brand;
        $this->technology=$technology;
        $this->weather=$weather;
        $this->bodywork=$bodywork;
        $this->category=$category;
        $this->highway=$highway;
        $this->warranty=$warranty;
        $this->price=$price;
        $this->register=$register;
    }

    //CRUD

    /* public function addProduct() {
        $this->Conexion=connection();
        $sql= "INSERT INTO products(product_name,factory_serial,brand,technology,weather,bodywork,category,highway,warranty,price,register)
               VALUES ('$this->product_name','$this->factory_serial','$this->brand','$this->technology','$this->weather','$this->bodywork','$this->category','$this->highway','$this->warranty','$this->price','$this->register')";
        $result= $this->Conexion->query($sql);
        $this->Conexion->close();
        return $result;

    }

    public function consultProduct() {
        $this->Conexion=connection();
        $sql= "SELECT * FROM products";
        $result= $this->Conexion->query($sql);
        $this->Conexion->close();
        return $result;
    } */

    //Methods

    public function setProduct_name($product_name) {
        $this->product_name=$product_name;
    }

    public function getProduct_name($product_name) {
        return ($this->product_name);
    }

    public function setFactory_serial($factory_serial) {
        $this->factory_serial=$factory_serial;
    }

    public function getFactory_serial($factory_serial) {
        return ($this->factory_serial);
    }

    public function setBrand($brand) {
        $this->brand=$brand;
    }

    public function getBrand($brand) {
        return ($this->brand);
    }

    public function setTechnology($technology) {
        $this->technology=$technology;
    }

    public function getTechnology($technology) {
        return ($this->technology);
    }

    public function setWeather($weather) {
        $this->weather=$weather;
    }

    public function getWeather($weather) {
        return ($this->weather);
    }

    public function setBodywork($bodywork) {
        $this->bodywork=$bodywork;
    }

    public function getBodywork($bodywork) {
        return ($this->bodywork);
    }

    public function setCategory($category) {
        $this->category=$category;
    }

    public function getCategory($category) {
        return ($this->category);
    }

    public function setHighway($highway) {
        $this->highway=$highway;
    }

    public function getHighway($highway) {
        return ($this->highway);
    }

    public function setWarranty($warranty) {
        $this->warranty=$warranty;
    }

    public function getWarranty($warranty) {
        return ($this->warranty);
    }

    public function setPrice($price) {
        $this->price=$price;
    }

    public function getPrice($price) {
        return ($this->price);
    }

    public function setRegister($register) {
        $this->register=$register;
    }

    public function getRegister($register) {
        return ($this->register);
    }

    //Formulations

    //Invariants

}
