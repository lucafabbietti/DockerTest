CREATE DATABASE IF NOT EXISTS `MYSQL_DATABASE`;
USE `MYSQL_DATABASE`;
DROP TABLE IF EXISTS `x`;
CREATE TABLE `x` (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30) NOT NULL);
INSERT INTO `x` (name) VALUES ('Luca');