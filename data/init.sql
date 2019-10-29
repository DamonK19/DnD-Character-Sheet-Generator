CREATE DATABASE test;

use test;

CREATE TABLE users
(
	id INT(11),
	UNSIGNED AUTO_INCREMENT PRIMARY KEY,
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
	charactername VARCHAR(30) NOT NULL,
	racename VARCHAR(30) NOT NULL,
	background VARCHAR(5000) NOT NULL,
	proficiencies VARCHAR(500) NOT NULL,
	PRIMARY KEY(cID),
	FOREIGN KEY(pID) REFERENCES users(pID)

);
INSERT INTO users (cID, pID, character_name)
VALUES('1', '1', 'Big Chungus')

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

INSERT INTO spells (spell_name, spell_level, spell_description)
VALUES ('Mage Hand', '0', 'A spectral, floating hand appears at a point you choose within range. The hand lasts for the duration or until you dismiss it as an action. The hand vanishes if it is ever more than 30 feet away from you or if you cast this spell again.
You can use your action to control the hand. You can use the hand to manipulate an object, open an unlocked door or container, stow or retrieve an item from an open container, or pour the contents out of a vial. You can move the hand up to 30 feet each time you use it.
The hand can’t attack, activate magic items, or carry more than 10 pounds.' )
INSERT INTO spells (spell_name, spell_level, spell_description)
VALUES ('Acid Splash', '0', 'You hurl a bubble of acid. Choose one creature within range, or choose two creatures within range that are within 5 feet of each other. A target must succeed on a Dexterity saving throw or take 1d6 acid damage.
')
INSERT INTO spells (spell_name, spell_level, spell_description)
VALUES('Ray of Frost', '0','A frigid beam of blue-white light streaks toward a creature within range. Make a ranged spell attack against the target. On a hit, it takes 1d8 cold damage, and its speed is reduced by 10 feet until the start of your next turn.
', '1');
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
	FOREIGN KEY(race_name) REFERENCES race(race_name)
);

CREATE TABLE class_name(
	class_name VARCHAR(30),
	proficiency_bonus INT,
	hit_dice INT,
	PRIMARY KEY(class_name)
);

CREATE TABLE class_skills(
	class_skill_name VARCHAR(30),
	class_name varchar(30),
	FOREIGN KEY(class_name) REFERENCES class_name(class_name)
);

CREATE TABLE class_equipment(
	class_name VARCHAR(30),
	option_1 VARCHAR(30),
	option_2 VARCHAR(30)
);

CREATE TABLE skills(
	cID int,
	skill_name varchar(30),
	FOREIGN KEY(cID) REFERENCES characters(cID)
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
