USE dnd;

INSERT INTO background
VALUES
  ('Acolyte', 'Insight', 'Religion'),
  ('Charlaton', 'Deception', 'Sleight of Hand'),
  ('Criminal', 'Deception', 'Stealth'),
  ('Entertainer', 'Acrobatics', 'Performance'),
  ('Folk Hero', 'Animal Handling', 'Survival'),
  ('Guild Artisan', 'Insight', 'Persuasion'),
  ('Hermit', 'Medicine', 'Religion'),
  ('Noble', 'History', 'Persuasion');

  INSERT INTO class_name
  VALUES
  ('Barbarian','2','12'),
  ('Bard','2','8'),
  ('Cleric','2','8'),
  ('Druid','2','8'),
  ('Fighter','2','10'),
  ('Monk','2','8'),
  ('Paladin','2','10'),
  ('Ranger','2','10'),
  ('Rogue','2','8'),
  ('Sorcerer','2','6'),
  ('Warlock','2','8'),
  ('Wizard','2','6');

  INSERT INTO race
  VALUES
  ('Dwarf', '25'),
  ('Elf', '30'),
  ('Halfling', '25');

  INSERT INTO background_personality
  VALUES
  ('Acolyte', "I idolize a particular hero of my faith", 1),
  ('Acolyte', "I can find common ground between the fiercest of enemies", 2),
  ('Acolyte', "I see omens in ever event and action", 3);

  INSERT INTO background_ideals
  VALUES
  ('Acolyte', "Tradition", 1),
  ('Acolyte', "Charity", 2),
  ('Acolyte', "Change", 3);

  INSERT INTO background_bonds
  VALUES
  ('Acolyte', "I would die to recover and ancient relic", 1),
  ('Acolyte', "I will someday get revenge", 2),
  ('Acolyte', "I owe my life to the priest", 3);

  INSERT INTO background_flaws
  VALUES
  ('Acolyte', "I judge others harshly", 1),
  ('Acolyte', "I put too much trust in those", 2),
  ('Acolyte', "My piety sometimes leads me to", 3);



  INSERT INTO skills
  VALUES
  ('Acrobatics','Animal Handling','Arcana','Athletics',
  'Deception','History','Insight','Intimidation','Investigation','Medicine',
  'Nature','Perception','Performance','Persuasion','Religion','Sleight Of Hand','Stealth','Survival');

  INSERT INTO spells
  VALUES
  ('Mage Hand', 0 , 'A spectral, floating hand appears at a point you choose within range. The hand lasts for the duration or until you dismiss it as an action. The hand vanishes if it is ever more than 30 feet away from you or if you cast this spell again.
You can use your action to control the hand. You can use the hand to manipulate an object, open an unlocked door or container, stow or retrieve an item from an open container, or pour the contents out of a vial. You can move the hand up to 30 feet each time you use it.
The hand can’t attack, activate magic items, or carry more than 10 pounds.', 1 , 0),
('Acid Splash', 0 , 'You hurl a bubble of acid. Choose one creature within range, or choose two creatures within range that are within 5 feet of each other. A target must succeed on a Dexterity saving throw or take 1d6 acid damage.', 1 , 0);

INSERT INTO equipment
VALUES
('Dagger', 1 ,0),
('Greatsword', 1 , 0),
('Stick', 1 , 0);