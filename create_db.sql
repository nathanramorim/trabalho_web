CREATE DATABASE `db_exe` /*!40100 COLLATE 'utf8_general_ci' */;

USE `db_exe`;

CREATE TABLE `users` (
	`cpf` VARCHAR(50) NULL,
	`username` VARCHAR(50) NULL,
	`password` VARCHAR(50) NULL
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;