-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema telecall_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema telecall_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `telecall_db` DEFAULT CHARACTER SET utf8mb3 ;
USE `telecall_db` ;

-- -----------------------------------------------------
-- Table `telecall_db`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `telecall_db`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fullname` VARCHAR(60) NOT NULL,
  `mother` VARCHAR(60) COLLATE 'utf8mb3_unicode_ci' NOT NULL,
  `birth_date` DATE NOT NULL,
  `cpf` VARCHAR(14) COLLATE 'utf8mb3_unicode_ci' NOT NULL,
  `gender` VARCHAR(10) COLLATE 'utf8mb3_unicode_ci' NOT NULL,
  `cel` VARCHAR(19) COLLATE 'utf8mb3_unicode_ci' NOT NULL,
  `tel_fixo` VARCHAR(18) COLLATE 'utf8mb3_unicode_ci' NOT NULL,
  `login` VARCHAR(6) COLLATE 'utf8mb3_unicode_ci' NOT NULL,
  `password` VARCHAR(100) COLLATE 'utf8mb3_unicode_ci' NOT NULL,
  `cep` VARCHAR(9) COLLATE 'utf8mb3_unicode_ci' NOT NULL,
  `uf` VARCHAR(2) COLLATE 'utf8mb3_unicode_ci' NOT NULL,
  `city` VARCHAR(30) CHARACTER SET 'utf8mb3' NOT NULL,
  `address` VARCHAR(50) COLLATE 'utf8mb3_unicode_ci' NOT NULL,
  `house_number` INT NOT NULL,
  `complement` VARCHAR(50) COLLATE 'utf8mb3_unicode_ci' NOT NULL,
  `type` TINYINT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `telecall_db`.`logs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `telecall_db`.`logs` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `log_description` VARCHAR(50) NOT NULL,
  `datatime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`, `user_id`),
  INDEX `fk_log_users_idx` (`user_id` ASC) VISIBLE,
  CONSTRAINT `fk_log_users`
    FOREIGN KEY (`user_id`)
    REFERENCES `telecall_db`.`users` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `telecall_db`.`messages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `telecall_db`.`messages` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `message` VARCHAR(100) NOT NULL,
  `datatime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_master_msg` TINYINT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_messages_users1_idx` (`user_id` ASC) VISIBLE,
  CONSTRAINT `fk_messages_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `telecall_db`.`users` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
