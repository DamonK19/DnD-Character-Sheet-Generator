CREATE DATABASE test;

use test;

CREATE TABLE users
(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	age INT(3),
	location VARCHAR(50),
	date TIMESTAMP

);
CREATE TABLE characters
(
	cID int(3) NOT NULL ,
	pID int(3) NOT NULL,
	character_name VARCHAR(30) NOT NULL,
	player_name VARCHAR(30) NOT NULL,
	race_name VARCHAR(30) NOT NULL,
	background VARCHAR(5000) NOT NULL,
	hit_points INT,
	class_name varchar(30),
	allignment VARCHAR(30),
	PRIMARY KEY(cID),
	FOREIGN KEY(pID) REFERENCES users(pID)
);

CREATE TABLE equipment
(
	equipment_name varchar(30) NOT NULL,
	cID int(3) NOT NULL,
	equipped BOOLEAN,
	PRIMARY KEY(equipmentname),
	FOREIGN KEY(cID) REFERENCES characters(cID)
);

CREATE TABLE armor(
	armor_name varchar(30),
	armorClass int,
	PRIMARY KEY(armor_name)
);

CREATE TABLE armor_mod(
	armor_name VARCHAR(30),
	armor_str_mod INT,
	armor_dex_mod INT,
	armor_con_mod INT,
	armor_int_mod INT,
	armor_wis_mod INT,
	armor_chr_mod INT,
	FOREIGN KEY(armor_name) REFERENCES armor(armor_name)
);

CREATE TABLE weapons(
	weapon_name VARCHAR(30),
	PRIMARY KEY(weapon_name)
);

CREATE TABLE weapons_mod(
	weapon_name VARCHAR(30),
	weapons_str_mod INT,
	weapons_dex_mod INT,
	weapons_con_mod INT,
	weapons_int_mod INT,
	weapons_wis_mod INT,
	weapons_chr_mod INT,
	FOREIGN KEY(weapon_name) REFERENCES weapons(weapon_name)

);

CREATE TABLE spells
(
	spell_name varchar(30) NOT NULL,
	spell_level int (1) NOT NULL,
	spell_description VARCHAR(500),
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
	race_name VARCHAR(30) NOT NULL,
	speed VARCHAR(30) NOT NULL,
	race_str_mod INT(3) NOT NULL,
	race_dex_mod INT(3) NOT NULL,
	race_con_mod INT(3) NOT NULL,
	race_int_mod INT(3) NOT NULL,
	race_wis_mod INT(3) NOT NULL,
	race_chr_mod INT(3) NOT NULL,
	PRIMARY KEY(race_name)



);

CREATE TABLE raceMod(
	race_name VARCHAR(30),
	race_str_mod INT,
	race_dex_mod INT,
	race_con_mod INT,
	race_int_mod INT,
	race_wis_mod INT,
	race_chr_mod INT,
	FOREIGN KEY(race_name)
);

CREATE TABLE class_name(
	class_name VARCHAR(30),
	proficiency_bonus INT,
	hit_dice INT,
	PRIMARY KEY(class_name)
);

CREATE TABLE class_skills(
	class_skill_name VARCHAR(30),
	class_name varchar(30)
	FOREIGN KEY(class_name) REFERENCES class_name(class_name)
);

CREATE TABLE class_equipment(
	class_name VARCHAR(30),
	option_1 VARCHAR(30),
	option_2 VARCHAR(30)
);

CREATE TABLE skills(
	cid int,
	skill_name varchar(30)
	FOREIGN KEY(cid) REFERENCES characters(cID)
);

CREATE TABLE background(
	background_name VARCHAR(30),
	skill_proficiency_1 varchar(30),
	skill_proficiency_2 VARCHAR(30),
	PRIMARY KEY(background_name)

);

CREATE TABLE background_equipment(
	background_equipment_name VARCHAR(30),
	background_name VARCHAR(30),
	FOREIGN KEY(background_name) REFERENCES background(background_name)
);

CREATE TABLE background_personality(
	background_name VARCHAR(30),
	background_personality VARCHAR(255),
	personality_roll INT,
	FOREIGN KEY(background_name) REFERENCES background(background_name)
);

CREATE TABLE background_bonds(
	background_name VARCHAR(30),
	background_bonds VARCHAR(255),
	bonds_roll INT,
	FOREIGN KEY(background_name) REFERENCES background(background_name)
);

CREATE TABLE background_ideals(
	background_name VARCHAR(30),
	background_personality VARCHAR(255),
	personality_roll INT,
	FOREIGN KEY(background_name) REFERENCES background(background_name)
);

CREATE TABLE background_flaws(
	background_name VARCHAR(30),
	background_personality VARCHAR(255),
	personality_roll INT,
	FOREIGN KEY(background_name) REFERENCES background(background_name)
);
