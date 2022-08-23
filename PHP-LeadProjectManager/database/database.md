# How to Create a database

CREATE DATABASE leadprojectmanager;

use leadprojectmanager

CREATE TABLE `users` (`id` INT NOT NULL AUTO_INCREMENT, `name` VARCHAR(250) NOT NULL, PRIMARY KEY(`id`)) 

ENGINE = InnoDB;

INSERT INTO users (name) VALUES ("Nicollau"), ("Gostoso)", ("Transante");