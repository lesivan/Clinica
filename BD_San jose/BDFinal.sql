-- MySQL Script generated by MySQL Workbench
-- 10/21/16 10:43:07
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema clinicasj
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema clinicasj
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `clinicasj` DEFAULT CHARACTER SET latin1 ;
USE `clinicasj` ;

-- -----------------------------------------------------
-- Table `clinicasj`.`doctor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicasj`.`doctor` (
  `IdDoctor` INT(6) NOT NULL AUTO_INCREMENT,
  `PrimerNombre` VARCHAR(45) NOT NULL,
  `PrimerApellido` VARCHAR(45) NOT NULL,
  `Especialidad` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdDoctor`))
ENGINE = MyISAM
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinicasj`.`paciente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicasj`.`paciente` (
  `IdPaciente` INT(11) NOT NULL AUTO_INCREMENT,
  `PrimerNombre` VARCHAR(45) NOT NULL,
  `PrimerApellido` VARCHAR(45) NOT NULL,
  `Direccion` VARCHAR(45) NOT NULL,
  `Edad` INT(11) NOT NULL,
  `Celular` INT(10) NOT NULL,
  `Cedula` VARCHAR(30) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdPaciente`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinicasj`.`consulta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicasj`.`consulta` (
  `IdConsulta` INT(6) NOT NULL AUTO_INCREMENT,
  `Fecha` DATE NOT NULL,
  `Hora` TIME NOT NULL,
  `Observaviones` VARCHAR(1000) NULL DEFAULT NULL,
  `doctor_IdDoctor` INT(6) NOT NULL,
  `paciente_IdPaciente` INT(11) NOT NULL,
  PRIMARY KEY (`IdConsulta`),
  INDEX `fk_consulta_doctor1_idx` (`doctor_IdDoctor` ASC),
  INDEX `fk_consulta_paciente1_idx` (`paciente_IdPaciente` ASC),
  CONSTRAINT `fk_consulta_doctor1`
    FOREIGN KEY (`doctor_IdDoctor`)
    REFERENCES `clinicasj`.`doctor` (`IdDoctor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_consulta_paciente1`
    FOREIGN KEY (`paciente_IdPaciente`)
    REFERENCES `clinicasj`.`paciente` (`IdPaciente`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinicasj`.`problemas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicasj`.`problemas` (
  `idProblemas` INT(11) NOT NULL AUTO_INCREMENT,
  `Problema` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idProblemas`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinicasj`.`sintomas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicasj`.`sintomas` (
  `idSintomas` INT(11) NOT NULL AUTO_INCREMENT,
   `Sintoma` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idSintomas`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinicasj`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicasj`.`usuario` (
  `idUsuario` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
  `contrasena` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;

INSERT INTO `usuario` VALUES (1,'admin','95192c98732387165bf8e396c0f2dad2');


-- -----------------------------------------------------
-- Table `clinicasj`.`paciente_has_sintomas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicasj`.`paciente_has_sintomas` (
  `idsinpac` INT NOT NULL AUTO_INCREMENT,
  `paciente_IdPaciente` INT(11) NOT NULL,
  `sintomas_idSintomas` INT(11) NOT NULL,
  INDEX `fk_paciente_has_sintomas_sintomas1_idx` (`sintomas_idSintomas` ASC),
  INDEX `fk_paciente_has_sintomas_paciente1_idx` (`paciente_IdPaciente` ASC),
  PRIMARY KEY (`idsinpac`),
  CONSTRAINT `fk_paciente_has_sintomas_paciente1`
    FOREIGN KEY (`paciente_IdPaciente`)
    REFERENCES `clinicasj`.`paciente` (`IdPaciente`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_paciente_has_sintomas_sintomas1`
    FOREIGN KEY (`sintomas_idSintomas`)
    REFERENCES `clinicasj`.`sintomas` (`idSintomas`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinicasj`.`paciente_has_problemas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicasj`.`paciente_has_problemas` (
  `idpropc` INT NOT NULL AUTO_INCREMENT,
  `paciente_IdPaciente` INT(11) NOT NULL,
  `problemas_idProblemas` INT(11) NOT NULL,
  INDEX `fk_paciente_has_problemas_problemas1_idx` (`problemas_idProblemas` ASC),
  INDEX `fk_paciente_has_problemas_paciente1_idx` (`paciente_IdPaciente` ASC),
  PRIMARY KEY (`idpropc`),
  CONSTRAINT `fk_paciente_has_problemas_paciente1`
    FOREIGN KEY (`paciente_IdPaciente`)
    REFERENCES `clinicasj`.`paciente` (`IdPaciente`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_paciente_has_problemas_problemas1`
    FOREIGN KEY (`problemas_idProblemas`)
    REFERENCES `clinicasj`.`problemas` (`idProblemas`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
