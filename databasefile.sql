-- CREATE DATABASE healthtracker;
USE healthtracker;
 /* CREATE TABLE `student` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(100) NOT NULL,
	shuttle VARCHAR(100) NOT NULL,
    opmerkingen TEXT NULL,
    gesprek TEXT NULL
); 
 CREATE TABLE `coach` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(100) NOT NULL,
	conversatie TEXT NULL,
    opmerkingen TEXT NULL,
    gesprek TEXT NULL
);
CREATE TABLE checkupS (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    student_id MEDIUMINT NOT NULL,
    cijfer int,
    FOREIGN KEY (student_id) REFERENCES student(id)
); 
CREATE TABLE checkupC (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    coach_id MEDIUMINT NOT NULL,
    cijfer int,
    FOREIGN KEY (coach_id) REFERENCES coach(id)
); */
SELECT * FROM healthtracker.checkups;
