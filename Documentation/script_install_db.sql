-- MySQL Script generated by MySQL Workbench
-- Thu Jun  4 09:47:20 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema verdanatech
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema verdanatech
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `verdanatech` DEFAULT CHARACTER SET utf8 ;
USE `verdanatech` ;

-- -----------------------------------------------------
-- Table `verdanatech`.`tb_type_products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `verdanatech`.`tb_type_products` (
  `id_type_products` INT NOT NULL AUTO_INCREMENT,
  `type_name` VARCHAR(128) NOT NULL,
  PRIMARY KEY (`id_type_products`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `verdanatech`.`tb_citys`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `verdanatech`.`tb_citys` (
  `id_citys` INT NOT NULL AUTO_INCREMENT,
  `name_city` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_citys`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `verdanatech`.`tb_states`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `verdanatech`.`tb_states` (
  `id_states` INT NOT NULL,
  `name_states` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_states`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `verdanatech`.`tb_uf`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `verdanatech`.`tb_uf` (
  `id_uf` INT NOT NULL AUTO_INCREMENT,
  `name_uf` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_uf`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `verdanatech`.`tb_clients`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `verdanatech`.`tb_clients` (
  `id_entify` VARCHAR(30) NOT NULL,
  `fantasy_name` VARCHAR(255) NOT NULL,
  `company_name` VARCHAR(255) NULL,
  `address_street` VARCHAR(50) NOT NULL,
  `address_number` VARCHAR(45) NOT NULL,
  `postal_code` VARCHAR(45) NOT NULL,
  `country` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(45) NULL,
  `phone_2` VARCHAR(45) NULL,
  `tb_citys_id_citys` INT NOT NULL,
  `tb_states_id_states` INT NOT NULL,
  `tb_uf_id_uf` INT NOT NULL,
  PRIMARY KEY (`id_entify`, `tb_citys_id_citys`, `tb_states_id_states`, `tb_uf_id_uf`),
  INDEX `fk_tb_clients_tb_citys1_idx` (`tb_citys_id_citys` ASC),
  INDEX `fk_tb_clients_tb_states1_idx` (`tb_states_id_states` ASC),
  INDEX `fk_tb_clients_tb_uf1_idx` (`tb_uf_id_uf` ASC))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `verdanatech`.`tb_products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `verdanatech`.`tb_products` (
  `id_products` INT NOT NULL AUTO_INCREMENT,
  `nameprod` VARCHAR(128) NOT NULL,
  `purchase_price` DECIMAL(10,2) NOT NULL,
  `cost_price` DECIMAL(10,2) NOT NULL,
  `purchase_date` DATE NOT NULL,
  `tb_type_products_id_type_products` INT NOT NULL,
  `tb_clients_id_entify` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`id_products`, `tb_type_products_id_type_products`, `tb_clients_id_entify`),
  INDEX `fk_tb_products_tb_type_products_idx` (`tb_type_products_id_type_products` ASC),
  INDEX `fk_tb_products_tb_clients1_idx` (`tb_clients_id_entify` ASC))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
