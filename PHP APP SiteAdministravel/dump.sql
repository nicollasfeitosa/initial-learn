-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema site_administravel
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `site_administravel` DEFAULT CHARACTER SET utf8 ;
USE `site_administravel` ;

-- -----------------------------------------------------
-- Table `site_administravel`.`pages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `site_administravel`.`pages` (
  `idpages` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(250) NOT NULL,
  `url` VARCHAR(250) NOT NULL,
  `body` TEXT NULL,
  `created` DATETIME NOT NULL,
  `updated` DATETIME NOT NULL,
  PRIMARY KEY (`idpages`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `site_administravel`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `site_administravel`.`users` (
  `idusers` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `user` VARCHAR(45) NOT NULL,
  `email` VARCHAR(250) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `created` DATETIME NOT NULL,
  `updated` DATETIME NOT NULL,
  PRIMARY KEY (`idusers`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
