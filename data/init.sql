CREATE DATABASE test;

use test;

CREATE TABLE users (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	age INT(3),
	location VARCHAR(50),
	date TIMESTAMP
<<<<<<< Updated upstream
=======
);
CREATE TABLE characters
(
	cID int(3) NOT NULL ,
	pID int(3) NOT NULL,
	charactername VARCHAR(30) NOT NULL,
	racename VARCHAR(30) NOT NULL,
	background VARCHAR(5000) NOT NULL,
	proficiencies VARCHAR(500) NOT NULL,
	PRIMARY KEY(cID),
	FOREIGN KEY(pID) REFERENCES users(pID)

);

CREATE TABLE equipment
(
	equipmentname varchar(30) NOT NULL,
	cID int(3) NOT NULL,
	equipped BOOLEAN,
	equipmodarray int(7) NOT NULL,
	PRIMARY KEY(equipmentname),
	FOREIGN KEY(cID) REFERENCES characters(cID)
);

CREATE TABLE spells
(
	spellname varchar(30) NOT NULL,
	spelllevel int (1) NOT NULL,
	spelldescription VARCHAR(500),
	cID int(3) NOT NULL,
	PRIMARY KEY(spellname),
	FOREIGN KEY(cID) REFERENCES characters(cID)
);

CREATE TABLE stats(
	cID int(3) NOT NULL,
	strength int (3) NOT NULL,
	dexterity int (3) NOT NULL,
	constitution int (3) NOT NULL,
	intelligence int (3) NOT NULL,
	wisdom int (3) NOT NULL,
	charisma int (3) NOT NULL,
	FOREIGN KEY(cID) REFERENCES characters(cID)
);

CREATE TABLE race(
	racename VARCHAR(30) NOT NULL,
	speed VARCHAR(30) NOT NULL,
	racestr INT(3) NOT NULL,
	racedex INT(3) NOT NULL,
	racecon INT(3) NOT NULL,
	raceint INT(3) NOT NULL,
	racewis INT(3) NOT NULL,
	racecha INT(3) NOT NULL,
	PRIMARY KEY(race)
 

);

CREATE TABLE cclass(

);

CREATE TABLE proficiency(

);

CREATE TABLE background(


);