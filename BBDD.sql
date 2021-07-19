/* ================================================== */
/* ================================================== */
/* ================================================== */
/* ================================================== */
/* ================================================== */


/* NO USAR ESTE */



/* ================================================== */
/* ================================================== */
/* ================================================== */
/* ================================================== */
/* ================================================== */

-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema SENAProject
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema SENAProject
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `SENAProject` ;
-- -----------------------------------------------------
-- Schema SENAProject
-- -----------------------------------------------------
USE `SENAProject` ;

-- -----------------------------------------------------
-- Table `SENAProject`.`clients`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENAProject`.`clients` (
  `citizen_number` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `surname` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `phone_number` VARCHAR(45) NOT NULL,
  `profession` VARCHAR(45) NULL,
  `business` VARCHAR(45) NULL,
  `inscription` DATE NOT NULL,
  PRIMARY KEY (`citizen_number`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `citizen_number_UNIQUE` ON `SENAProject`.`clients` (`citizen_number` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `SENAProject`.`employees`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENAProject`.`employees` (
  `id_employee` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `cellphone` VARCHAR(45) NULL,
  `motor_rol` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `agreement` VARCHAR(45) NULL,
  `contract` DATE NULL,
  `cancellation` DATE NULL,
  `citizen_number` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_employee`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `id_employe_UNIQUE` ON `SENAProject`.`employees` (`id_employee` ASC) VISIBLE;

CREATE UNIQUE INDEX `citizen_number_UNIQUE` ON `SENAProject`.`employees` (`citizen_number` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `SENAProject`.`services`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENAProject`.`services` (
  `id_service` INT NOT NULL AUTO_INCREMENT,
  `type_service` VARCHAR(45) NOT NULL,
  `parking_day` VARCHAR(45) NULL,
  `cost_servicio` DECIMAL NULL,
  PRIMARY KEY (`id_service`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SENAProject`.`vehicles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENAProject`.`vehicles` (
  `id_vehicle` INT NOT NULL AUTO_INCREMENT,
  `mark` VARCHAR(45) NOT NULL,
  `model` VARCHAR(45) NOT NULL,
  `bodywork` VARCHAR(45) NOT NULL,
  `manufacturing` VARCHAR(45) NULL,
  `enrollment` VARCHAR(45) NOT NULL,
  `license` VARCHAR(45) NOT NULL,
  `paint` VARCHAR(45) NOT NULL,
  `cylinder` VARCHAR(45) NULL,
  `transmission` VARCHAR(45) NULL,
  `motor` VARCHAR(45) NULL,
  `suspension` VARCHAR(45) NULL,
  `service` VARCHAR(45) NULL,
  `settlement` VARCHAR(45) NOT NULL,
  `citizen_number` INT NOT NULL,
  PRIMARY KEY (`id_vehicle`),
  CONSTRAINT `fk_cars_clients`
    FOREIGN KEY (`citizen_number`)
    REFERENCES `SENAProject`.`clients` (`citizen_number`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE UNIQUE INDEX `id_car_UNIQUE` ON `SENAProject`.`vehicles` (`id_vehicle` ASC) VISIBLE;

CREATE UNIQUE INDEX `license_plate_UNIQUE` ON `SENAProject`.`vehicles` (`license` ASC) VISIBLE;

CREATE INDEX `fk_cars_clients_idx` ON `SENAProject`.`vehicles` (`citizen_number` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `SENAProject`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENAProject`.`products` (
  `id_product` INT NOT NULL AUTO_INCREMENT,
  `product_name` VARCHAR(45) NOT NULL,
  `factory_serial` VARCHAR(45) NOT NULL,
  `brand` VARCHAR(45) NOT NULL,
  `technology` VARCHAR(45) NULL,
  `weather` VARCHAR(45) NULL,
  `bodywork` VARCHAR(45) NOT NULL,
  `category` VARCHAR(45) NULL,
  `highway` VARCHAR(45) NULL,
  `warranty` VARCHAR(45) NOT NULL,
  `price` VARCHAR(45) NULL,
  `register` DATE NOT NULL,
  PRIMARY KEY (`id_product`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `factory_serial_UNIQUE` ON `SENAProject`.`products` (`factory_serial` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `SENAProject`.`bills`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENAProject`.`bills` (
  `id_bill` INT NOT NULL,
  `amount_purchased` INT NULL,
  `tax_full` DECIMAL NULL,
  `price_brute` DECIMAL NULL,
  `promo` DECIMAL NULL,
  `price_net` DECIMAL NULL,
  `date_bill` VARCHAR(45) NULL,
  `id_client` INT NOT NULL,
  PRIMARY KEY (`id_bill`, `id_client`),
  CONSTRAINT `fk_bills_clients1`
    FOREIGN KEY (`id_client`)
    REFERENCES `SENAProject`.`clients` (`citizen_number`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_bills_clients1_idx` ON `SENAProject`.`bills` (`id_client` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `SENAProject`.`bills_products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENAProject`.`bills_products` (
  `id_bills_clients` INT NOT NULL,
  `id_bill` INT NOT NULL,
  `id_product` INT NOT NULL,
  PRIMARY KEY (`id_bills_clients`, `id_bill`, `id_product`),
  CONSTRAINT `fk_products_has_bills_products1`
    FOREIGN KEY (`id_product`)
    REFERENCES `SENAProject`.`products` (`id_product`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_has_bills_bills1`
    FOREIGN KEY (`id_bill` , `id_bills_clients`)
    REFERENCES `SENAProject`.`bills` (`id_bill` , `id_client`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_products_has_bills_bills1_idx` ON `SENAProject`.`bills_products` (`id_bill` ASC, `id_bills_clients` ASC) VISIBLE;

CREATE INDEX `fk_products_has_bills_products1_idx` ON `SENAProject`.`bills_products` (`id_product` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `SENAProject`.`invoices`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENAProject`.`invoices` (
  `id_invoice` INT NOT NULL,
  `id_vehicle` INT NOT NULL,
  `id_employee` INT NOT NULL,
  `date_service` VARCHAR(45) NULL,
  `income_status` VARCHAR(45) NULL,
  PRIMARY KEY (`id_vehicle`, `id_employee`, `id_invoice`),
  CONSTRAINT `fk_invoices_vehicles1`
    FOREIGN KEY (`id_vehicle`)
    REFERENCES `SENAProject`.`vehicles` (`id_vehicle`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_invoices_employees1`
    FOREIGN KEY (`id_employee`)
    REFERENCES `SENAProject`.`employees` (`id_employee`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_invoices_employees1_idx` ON `SENAProject`.`invoices` (`id_employee` ASC) VISIBLE;

CREATE UNIQUE INDEX `id_invoice_UNIQUE` ON `SENAProject`.`invoices` (`id_invoice` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `SENAProject`.`invoices_services`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENAProject`.`invoices_services` (
  `invoices_id_vehicle` INT NOT NULL,
  `invoices_id_employee` INT NOT NULL,
  `id_invoice` INT NOT NULL,
  `id_service` INT NOT NULL,
  PRIMARY KEY (`invoices_id_vehicle`, `invoices_id_employee`, `id_invoice`, `id_service`),
  CONSTRAINT `fk_invoices_has_services_invoices1`
    FOREIGN KEY (`invoices_id_vehicle` , `invoices_id_employee` , `id_invoice`)
    REFERENCES `SENAProject`.`invoices` (`id_vehicle` , `id_employee` , `id_invoice`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_invoices_has_services_services1`
    FOREIGN KEY (`id_service`)
    REFERENCES `SENAProject`.`services` (`id_service`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_invoices_has_services_services1_idx` ON `SENAProject`.`invoices_services` (`id_service` ASC) VISIBLE;

CREATE INDEX `fk_invoices_has_services_invoices1_idx` ON `SENAProject`.`invoices_services` (`invoices_id_vehicle` ASC, `invoices_id_employee` ASC, `id_invoice` ASC) VISIBLE;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


INSERT INTO `SENAProject`.`clients`(`citizen_number`,`name`,`surname`,`email`,`phone_number`,`profession`,`business`,`inscription`)
VALUES ('11111111','Robert','Halford','thegodheavymetal@metal.com','547278478','Astronaut','Painkiller Records','2020-08-29');
INSERT INTO `SENAProject`.`clients`(`citizen_number`,`name`,`surname`,`email`,`phone_number`,`profession`,`business`,`inscription`)
VALUES ('22222222','Glenn','Tipton','jugulator@metal.com','5676278478','Sargeant','Sentinel Order','2020-05-12');
INSERT INTO `SENAProject`.`clients`(`citizen_number`,`name`,`surname`,`email`,`phone_number`,`profession`,`business`,`inscription`)
VALUES ('33333333','Kenneth','Downing','thesentinel@hardmetal.com','45678478','Teacher','Sentinel Order','2020-04-01');
INSERT INTO `SENAProject`.`clients`(`citizen_number`,`name`,`surname`,`email`,`phone_number`,`profession`,`business`,`inscription`)
VALUES ('44444444','Rudolf','Schenker','redscorpion@hard.com','478','Engineer','Animal Instints','2020-05-29');
INSERT INTO `SENAProject`.`clients`(`citizen_number`,`name`,`surname`,`email`,`phone_number`,`profession`,`business`,`inscription`)
VALUES ('55555555','Wolf','Hofmann','metalheart@metal.com','465756578478','Engineer','Teutonic Blade','2019-08-29');
INSERT INTO `SENAProject`.`clients`(`citizen_number`,`name`,`surname`,`email`,`phone_number`,`profession`,`business`,`inscription`)
VALUES ('66666666','Marc','Storace','jummyjummy@metal.com','747478478','Kosmonaut','Painkiller Records','2020-09-29');
INSERT INTO `SENAProject`.`clients`(`citizen_number`,`name`,`surname`,`email`,`phone_number`,`profession`,`business`,`inscription`)
VALUES ('77777777','James','Hetfield','metalmilitia@metal.com','76767678','Musician','Metallica Records','2018-09-29');





INSERT INTO `SENAProject`.`employees`(`first_name`,`last_name`,`cellphone`,`motor_rol`,`email`,`agreement`,`contract`,`cancellation`,`citizen_number`)
VALUES('Michael','Meyers','1111222333','Motores Diesel','hhh@hhh.com','Undefined','2018-02-22','2020-06-06','1212112');
INSERT INTO `SENAProject`.`employees`(`first_name`,`last_name`,`cellphone`,`motor_rol`,`email`,`agreement`,`contract`,`cancellation`,`citizen_number`)
VALUES('Freddie','Krueger','1331222333','Gas','hhjjjkkk@hhh.com','Undefined','2020-08-21','2020-06-06','3341212');
INSERT INTO `SENAProject`.`employees`(`first_name`,`last_name`,`cellphone`,`motor_rol`,`email`,`agreement`,`contract`,`cancellation`,`citizen_number`)
VALUES('Jason','Vorhees','1888822333','Electronic','tttthhh@hhh.com','Defined 3m','2020-01-21','2020-06-06','7575752');
INSERT INTO `SENAProject`.`employees`(`first_name`,`last_name`,`cellphone`,`motor_rol`,`email`,`agreement`,`contract`,`cancellation`,`citizen_number`)
VALUES('Charles','Ray','3333222333','Tires','rrrssshhh@hhh.com','Undefined','2019-12-12','2020-06-06','1275821212');



INSERT INTO `SENAProject`.`products`(`product_name`,`factory_serial`,`brand`,`technology`,`weather`,`bodywork`,`category`,`highway`,`warranty`,`price`,`register`)
VALUES('Tire','ADF5675RT-98A','Michellin','Gear COG','Autumn','HachtBack','MartinMaterns','OffRoad','64','230000','2020-01-01');
INSERT INTO `SENAProject`.`products`(`product_name`,`factory_serial`,`brand`,`technology`,`weather`,`bodywork`,`category`,`highway`,`warranty`,`price`,`register`)
VALUES('Battery','7895675RT-98A','MacPowerPac','Gear COG','Spring','HachtBack','MartinMaterns','OffRoad','64','250000','2020-01-01');
INSERT INTO `SENAProject`.`products`(`product_name`,`factory_serial`,`brand`,`technology`,`weather`,`bodywork`,`category`,`highway`,`warranty`,`price`,`register`)
VALUES('Rin','ADF56SPUTT-98A','Continental','Gear COG','Autumn','Sedan','MartinMaterns','Cross','64','330000','2020-01-01');
INSERT INTO `SENAProject`.`products`(`product_name`,`factory_serial`,`brand`,`technology`,`weather`,`bodywork`,`category`,`highway`,`warranty`,`price`,`register`)
VALUES('ShockAbsorber','ADF5675RT-SDA','RallyDakar','Gear COG','Winter','HachtBack','MartinMaterns','OffRoad','64','34500','2020-01-01');
INSERT INTO `SENAProject`.`products`(`product_name`,`factory_serial`,`brand`,`technology`,`weather`,`bodywork`,`category`,`highway`,`warranty`,`price`,`register`)
VALUES('Tire','ZZZUY5RT-98A','Continental','Gear COG','Autumn','HachtBack','MartinMaterns','OffRoad','64','990000','2020-01-01');


INSERT INTO `SENAProject`.`services`(`type_service`,`parking_day`,`cost_servicio`)
VALUES('Change Oil','4','55000');
INSERT INTO `SENAProject`.`services`(`type_service`,`parking_day`,`cost_servicio`)
VALUES('Loader','2','40000');
INSERT INTO `SENAProject`.`services`(`type_service`,`parking_day`,`cost_servicio`)
VALUES('Balance','2','79000');
INSERT INTO `SENAProject`.`services`(`type_service`,`parking_day`,`cost_servicio`)
VALUES('Rectification','1','124000');
INSERT INTO `SENAProject`.`services`(`type_service`,`parking_day`,`cost_servicio`)
VALUES('Change Tire','2','67000');



INSERT INTO `SENAProject`.`vehicles`(`mark`,`model`,`bodywork`,`manufacturing`,`enrollment`,`license`,`paint`,`cylinder`,`transmission`,`motor`,`suspension`,`service`,`settlement`,`citizen_number`)
VALUES('Volkswagen','Virtus','HatchBack','2020','Deutchland','ERFG-9876','Silver','1600','Mecatronix','Gasoline','MacPherson','Taxi','2018-07-12','11111111');
INSERT INTO `SENAProject`.`vehicles`(`mark`,`model`,`bodywork`,`manufacturing`,`enrollment`,`license`,`paint`,`cylinder`,`transmission`,`motor`,`suspension`,`service`,`settlement`,`citizen_number`)
VALUES('Lada','Vesta','HatchBack','2019','Rassiya','VVPP-9876','Navy','1600','Mecatronix','Hybrid','MacPherson','Militar','2018-07-12','22222222');
INSERT INTO `SENAProject`.`vehicles`(`mark`,`model`,`bodywork`,`manufacturing`,`enrollment`,`license`,`paint`,`cylinder`,`transmission`,`motor`,`suspension`,`service`,`settlement`,`citizen_number`)
VALUES('Renault','Sandero','Coupe','2020','Colombia','RFG-876','Yellow','1000','False Start','Gas','Helicoidal','Taxi','2018-07-12','11111111');
INSERT INTO `SENAProject`.`vehicles`(`mark`,`model`,`bodywork`,`manufacturing`,`enrollment`,`license`,`paint`,`cylinder`,`transmission`,`motor`,`suspension`,`service`,`settlement`,`citizen_number`)
VALUES('Honda','Civic','HatchBack','2020','Rassiya','THUNDER-6','Scarlet','2400','Tiptronic','Gasoline','Multilink','Ambulance','2018-07-12','33333333');
INSERT INTO `SENAProject`.`vehicles`(`mark`,`model`,`bodywork`,`manufacturing`,`enrollment`,`license`,`paint`,`cylinder`,`transmission`,`motor`,`suspension`,`service`,`settlement`,`citizen_number`)
VALUES('Nissan','Skyline','HatchBack','2020','Nippon','3459876','Black','3200','Multitag','Gasoline','MacPherson','Sport','2018-07-12','11111111');
INSERT INTO `SENAProject`.`vehicles`(`mark`,`model`,`bodywork`,`manufacturing`,`enrollment`,`license`,`paint`,`cylinder`,`transmission`,`motor`,`suspension`,`service`,`settlement`,`citizen_number`)
VALUES('Volkswagen','Jetta','Sedan','2019','Rassiya','ER676-TY6','Neon Ghost','2400','Mecatronix','Diesel','MacPherson','Goberment','2018-07-12','44444444');