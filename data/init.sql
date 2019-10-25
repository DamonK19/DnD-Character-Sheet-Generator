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
INSERT INTO spells (spellname, spelllevel, spelldescription)
VALUES ('Mage Hand', '0', 'A spectral, floating hand appears at a point you choose within range. The hand lasts for the duration or until you dismiss it as an action. The hand vanishes if it is ever more than 30 feet away from you or if you cast this spell again.
You can use your action to control the hand. You can use the hand to manipulate an object, open an unlocked door or container, stow or retrieve an item from an open container, or pour the contents out of a vial. You can move the hand up to 30 feet each time you use it.
The hand can’t attack, activate magic items, or carry more than 10 pounds.' )
INSERT INTO spells (spellname, spelllevel, spelldescription)
VALUES ('Acid Splash', '0', 'You hurl a bubble of acid. Choose one creature within range, or choose two creatures within range that are within 5 feet of each other. A target must succeed on a Dexterity saving throw or take 1d6 acid damage.
')
INSERT INTO spells (spellname, spelllevel, spelldescription)
VALUES('Ray of Frost', '0','A frigid beam of blue-white light streaks toward a creature within range. Make a ranged spell attack against the target. On a hit, it takes 1d8 cold damage, and its speed is reduced by 10 feet until the start of your next turn.
')
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