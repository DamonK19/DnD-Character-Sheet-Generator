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
