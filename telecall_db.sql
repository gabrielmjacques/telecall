-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema telecall_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema telecall_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `telecall_db` DEFAULT CHARACTER SET utf8mb3 ;
USE `telecall_db` ;

-- -----------------------------------------------------
-- Table `telecall_db`.`master_users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `telecall_db`.`master_users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fullname` VARCHAR(100) NOT NULL,
  `login` VARCHAR(6) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `telecall_db`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `telecall_db`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fullname` VARCHAR(100) NOT NULL,
  `mother` VARCHAR(100) NOT NULL,
  `birth_date` DATE NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `gender` VARCHAR(3) NOT NULL,
  `cel` VARCHAR(19) NOT NULL,
  `tel_fixo` VARCHAR(18) NOT NULL,
  `cep` VARCHAR(9) NOT NULL,
  `login` VARCHAR(6) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb3;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
