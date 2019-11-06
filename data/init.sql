CREATE DATABASE dnd;

use dnd;

CREATE TABLE users
(
	id INT AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(30) NOT NULL,
	password varchar(30) NOT NULL,
	date TIMESTAMP
);

CREATE TABLE characters
(
	cID INT NOT NULL AUTO_INCREMENT,
	pID INT NOT NULL,
	character_name VARCHAR(30) NOT NULL,
	player_name VARCHAR(30) NOT NULL,
	race_name VARCHAR(30) NOT NULL,
	background VARCHAR(5000) NOT NULL,
	hit_points TINYINT,
	class_name varchar(30),
	allignment VARCHAR(30),
	PRIMARY KEY(cID),
	FOREIGN KEY(pID) REFERENCES users(id)
);

CREATE TABLE equipment
(
	equipment_name varchar(30) NOT NULL,
	cID INT NOT NULL,
	equipped BIT,
	PRIMARY KEY(equipment_name),
	FOREIGN KEY(cID) REFERENCES characters(cID)
);

CREATE TABLE armor(
	armor_name varchar(30),
	armorClass TINYINT,
	PRIMARY KEY(armor_name)
);

CREATE TABLE armor_mod(
	armor_name VARCHAR(30),
	armor_str_mod TINYINT,
	armor_dex_mod TINYINT,
	armor_con_mod TINYINT,
	armor_int_mod TINYINT,
	armor_wis_mod TINYINT,
	armor_chr_mod TINYINT,
	FOREIGN KEY(armor_name) REFERENCES armor(armor_name)
);

CREATE TABLE weapons(
	weapon_name VARCHAR(30),
	PRIMARY KEY(weapon_name)
);

CREATE TABLE weapons_mod(
	weapon_name VARCHAR(30),
	weapons_str_mod TINYINT,
	weapons_dex_mod TINYINT,
	weapons_con_mod TINYINT,
	weapons_int_mod TINYINT,
	weapons_wis_mod TINYINT,
	weapons_chr_mod TINYINT,
	FOREIGN KEY(weapon_name) REFERENCES weapons(weapon_name)

);

CREATE TABLE spells
(
	spell_name varchar(30) NOT NULL,
	spell_level TINYINT NOT NULL,
	spell_description VARCHAR(2000),
	equipped BIT NOT NULL,  
	cID INT NOT NULL,
	PRIMARY KEY(spell_name),
	FOREIGN KEY(cID) REFERENCES characters(cID)
);

CREATE TABLE stats(
	cID INT NOT NULL,
	strength TINYINT NOT NULL,
	dexterity TINYINT NOT NULL,
	constitution TINYINT NOT NULL,
	intelligence TINYINT NOT NULL,
	wisdom TINYINT NOT NULL,
	charisma TINYINT NOT NULL,
	FOREIGN KEY(cID) REFERENCES characters(cID)
);

CREATE TABLE race(
	race_name VARCHAR(30) NOT NULL,
	speed VARCHAR(30) NOT NULL,
	PRIMARY KEY(race_name)

);

CREATE TABLE raceMod(
	race_name VARCHAR(30),
	race_str_mod TINYINT,
	race_dex_mod TINYINT,
	race_con_mod TINYINT,
	race_int_mod TINYINT,
	race_wis_mod TINYINT,
	race_chr_mod TINYINT,
	FOREIGN KEY(race_name) REFERENCES race(race_name)
);

CREATE TABLE class_name(
	class_name VARCHAR(30),
	proficiency_bonus TINYINT,
	hit_dice TINYINT,
	PRIMARY KEY(class_name)
);

/*  CREATE TABLE class_skills(
	class_name VARCHAR(30),
	class_skill_name VARCHAR(30),
	quanity TINYINT,
	FOREIGN KEY(class_name) REFERENCES class_name(class_name)
);
*/
CREATE TABLE class_skill(
	cID INT NOT NULL,
	class_skill1 VARCHAR(30),
	class_skill2 VARCHAR(30),
	class_skill3 VARCHAR(30),
	FOREIGN KEY(cID) REFERENCES characters(cID)
);
CREATE TABLE skills(
	skill_name varchar(30)
);

CREATE TABLE class_equipment(
	class_name VARCHAR(30),
	option_1 VARCHAR(30),
	option_2 VARCHAR(30)
);

CREATE TABLE background(
	background_name VARCHAR(30),
	skill_proficiency_1 VARCHAR(30),
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
	personality_roll TINYINT,
	FOREIGN KEY(background_name) REFERENCES background(background_name)
);

CREATE TABLE background_bonds(
	background_name VARCHAR(30),
	background_bond VARCHAR(255),
	bonds_roll TINYINT,
	FOREIGN KEY(background_name) REFERENCES background(background_name)
);

CREATE TABLE background_ideals(
	background_name VARCHAR(30),
	background_ideal VARCHAR(255),
	personality_roll TINYINT,
	FOREIGN KEY(background_name) REFERENCES background(background_name)
);

CREATE TABLE background_flaws(
	background_name VARCHAR(30),
	background_flaw VARCHAR(255),
	personality_roll TINYINT,
	FOREIGN KEY(background_name) REFERENCES background(background_name)
);

CREATE TABLE characteristics(
	cID INT,
	personality VARCHAR(255),
	ideal VARCHAR(255),
	bond VARCHAR(255),
	flaw VARCHAR(255),
	FOREIGN KEY(cID) REFERENCES characters(cID)
);
