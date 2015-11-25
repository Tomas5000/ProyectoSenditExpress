-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema inventario_db
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `inventario_db` ;

-- -----------------------------------------------------
-- Schema inventario_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `inventario_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `inventario_db` ;

-- -----------------------------------------------------
-- Table `inventario_db`.`inventario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inventario_db`.`inventario` ;

CREATE TABLE IF NOT EXISTS `inventario_db`.`inventario` (
  `dia` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `demanda` DECIMAL(9,2) NOT NULL DEFAULT 0.0 COMMENT '',
  `produccion` DECIMAL(9,2) NOT NULL DEFAULT 0.0 COMMENT '',
  `inventario_inicial` DECIMAL(9,2) NOT NULL COMMENT '',
  `inventario_final` DECIMAL(9,2) NOT NULL COMMENT '',
  `ventas` DECIMAL(9,2) NOT NULL COMMENT '',
  `costo_produccion` DECIMAL(9,2) NOT NULL COMMENT '',
  `costo_faltante` DECIMAL(9,2) NOT NULL COMMENT '',
  `costo_inventario` DECIMAL(9,2) NOT NULL COMMENT '',
  `costo_total` DECIMAL(9,2) NOT NULL COMMENT '',
  PRIMARY KEY (`dia`)  COMMENT '')
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
