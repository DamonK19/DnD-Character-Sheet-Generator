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
  ('Noble', 'History', 'Persuasion'),
  ('Outlander', 'Athletics', 'Survival'),
  ('Sage', 'Arcana', 'History'),
  ('Sailor', 'Athletics', 'Perception'),
  ('Soldier', 'Athletics', 'Intimidation'),
  ('Urchin', 'Sleight of Hand', 'Stealth');

  INSERT INTO class_name
  VALUES
  ('Barbarian','2','12', 2, 0),
  ('Bard','2','8', 3, 2),
  ('Cleric','2','8', 2, 3),
  ('Druid','2','8', 2, 2),
  ('Fighter','2','10', 2, 0),
  ('Monk','2','8', 2, 0),
  ('Paladin','2','10', 2, 0),
  ('Ranger','2','10', 3, 0),
  ('Rogue','2','8', 4, 0),
  ('Sorcerer','2','6', 2, 4),
  ('Warlock','2','8', 2, 2),
  ('Wizard','2','6', 2, 3);

  INSERT INTO race
  VALUES
  ('Dwarf', '25'),
  ('Elf', '30'),
  ('Halfling', '25'),
  ('Human', '30'),
  ('Dragonborn', '30'),
  ('Gnome', '25'),
  ('Half-Orc', '30'),
  ('Tiefling', '30');

INSERT INTO race_mod
values
('Dwarf', 0, 0, 2, 0, 0, 0),
('Elf', 0, 2, 0, 0, 0, 0),
('Halfling', 0, 2, 0, 0, 0, 0),
('Human', 1, 1, 1, 1, 1, 1),
('Dragonborn', 2, 0, 0, 0, 0, 1),
('Gnome', 0, 0, 0, 2, 0, 0),
('Half-Orc', 2, 0, 1, 0 ,0 ,0),
('Tiefling', 0, 0, 0, 1, 0, 3);



/*Acolyte characteristics*/
  INSERT INTO background_personality
  VALUES
  ('Acolyte', "I idolize a particular hero of my faith, and constantly refer to that person's deeds and example.", 1),
  ('Acolyte', "I can find common ground between the fiercest of enemies", 2),
  ('Acolyte', "I see omens in ever event and action", 3),
  ('Acolyte', "Nothing can shake my optimistic attitude", 4),
  ('Acolyte', "I quote (or misquote) sacred texts and proverbs in almost every situation", 5),
  ('Acolyte', "I am tolerant (or intolerant) of other faiths and respect (or condemn) the worship of other gods.", 6),
  ('Acolyte', "I've enjoyed fine food, drink and high society among my temple's elite. rough living grates on me.", 7),
  ('Acolyte', "I've spent so long in the temple that I have little practical experience dealing with people in the outside world.", 8);

  INSERT INTO background_ideals
  VALUES
  ('Acolyte', "Tradition", 1),
  ('Acolyte', "Charity", 2),
  ('Acolyte', "Change", 3),
  ('Acolyte', "Power", 4),
  ('Acolyte', "Faith", 5),
  ('Acolyte', "Aspiration", 6);

  INSERT INTO background_bonds
  VALUES
  ('Acolyte', "I would die to recover and ancient relic of my faith that was lost long ago.", 1),
  ('Acolyte', "I will someday get revenge on the corrupt temple hierarchy who branded me a heretic.", 2),
  ('Acolyte', "I owe my life to the priest who took me in when my parents died.", 3),
  ('Acolyte', "Everything I do is for the common people", 4),
  ('Acolyte', "I will do anything to protect the temple where I served", 5),
  ('Acolyte', "I seek to preserve a sacred text that my enemies consider heretical and seek to destory", 6);

  INSERT INTO background_flaws
  VALUES
  ('Acolyte', "I judge others harshly, and myself even more severly.", 1),
  ('Acolyte', "I put too much trust in those who wield power within my temple's hierarchy.", 2),
  ('Acolyte', "My piety sometimes leads me to blindly trust those that profess faith in my god.", 3),
  ('Acolyte', "I am inflexible in my thinking.", 4),
  ('Acolyte', "I am suspicioius of strangers and expect the worst of them", 5),
  ('Acolyte', "Once I pick a goal, I become obsessed with it to the detriment of everything else in my life.", 6);

/*Charlaton characteristics*/
INSERT INTO background_personality
VALUES
  ('Charlaton', "I fall in and out of love easily, and am always pursuing someone.", 1),
  ('Charlaton', "I have a joke for every occasion, especially occasions where humor is inappropriate", 2),
  ('Charlaton', "Flattery is my preferred trick for getting what I want.", 3),
  ('Charlaton', "I'm a born gambler who can't resist taking a risk for a potential payoff", 4),
  ('Charlaton', "I lie about almost everything, even when there's no good reason too", 5),
  ('Charlaton', "Sarcasm and insults are my weapon of choice", 6),
  ('Charlaton', "I keep multiple holy symbols on me and invoke whatever deity might come in useful at any given moment.", 7),
  ('Charlaton', "I pocket anything I see that might have some value", 8);

INSERT INTO background_ideals
VALUES
  ('Charlaton', 'Independence', 1),
  ('Charlaton', "Fairness", 2),
  ('Charlaton', "Charity", 3),
  ('Charlaton', "Creativity", 4),
  ('Charlaton', "Friendship", 5),
  ('Charlaton', "Aspiration", 6);

INSERT INTO background_bonds
VALUES
  ('Charlaton', "I fleeced the wrong person and must work to ensure that this individual never crosses paths with me or those I care about.", 1),
  ('Charlaton', "I owe everything to my mentor - a horrible person who's probably rotting in jail somewhere.", 2),
  ('Charlaton', "Somewhere out there, I have a child who doesn't know me. I'm making the world better for him or her.", 3),
  ('Charlaton', "I come from a noble family, and one day I'll reclaim my lands and title from those who stole them from me.", 4),
  ('Charlaton', "A powerful person killed someone I love. Some day soon, I'll have my revenge.", 5),
  ('Charlaton', "I swindled and ruined a person who didn't deserve it. I seek to atone for my misdeeds but might never be able to forgive myself", 6);

INSERT INTO background_flaws
VALUES
  ('Charlaton', "I can't resist a pretty face.", 1),
  ('Charlaton', "I'm always in debt. I spend my ill-gotten gains on decadent luxaries faster than I bring them in.", 2),
  ('Charlaton', "I'm convinced that no one could ever fool me the way I fool others.", 3),
  ('Charlaton', "I'm too greedy for my own good. I can't resist taking a risk if there's money involved.", 4),
  ('Charlaton', "I can't resist swindling people who are more powerful than me", 5),
  ('Charlaton', " I hate to admit it and will hate myself for it, but I'll run and preserve my own hide if the going gets tough", 6);

/*Criminal Characteristics*/

INSERT INTO background_personality
VALUES
  ('Criminal', "I always have a plan for what tod o when things go wrong.", 1),
  ('Criminal', "I am always calm, no matter what the situation. Inever raisemy voice or let my emotions control me.", 2),
  ('Criminal', "The first thing I do in a new place is note the locations of everything valuable - or where such things could be hidden.", 3),
  ('Criminal', "I would rather make a new friend than a new enemy.", 4),
  ('Criminal', "I am incredibly slow to trust. Those who seem the fairest often have the most to hide.", 5),
  ('Criminal', "I don't pay attention to the risks in a situation. Never tell me the odds.", 6);

INSERT INTO background_ideals
VALUES
  ('Criminal', "Honor", 1),
  ('Criminal', "Freedom", 2),
  ('Criminal', "Charity", 3),
  ('Criminal', "Greed", 4),
  ('Criminal', "People", 5),
  ('Criminal', "Redemption", 6);

INSERT INTO background_bonds
VALUES
  ('Criminal', "I'm trying to pay off and old debt I owe to a generous benefactor.", 1),
  ('Criminal', "My ill-gotten gains go to support my family.", 2),
  ('Criminal', "Something important was taken from me, and I aim to steal it back.", 3),
  ('Criminal', "I will become the greatest thief that ever lived.", 4),
  ('Criminal', "I'm guilty of a terrible crime. I hope I can redeem myself for it.", 5),
  ('Criminal', "Someone I loved died because of a mistake I made. That will never happen again.", 6);

INSERT INTO background_flaws
VALUES
  ('Criminal', "When I see something valuable, I can't think about anything but how to steal it.", 1),
  ('Criminal', "When faced with a choice between money and my friends, I usually choose the monye.", 2),
  ('Criminal', "If there's a plan, I'll forget it. If I don't forget it, I'll ignore it.", 3),
  ('Criminal', "I have a 'tell' that reveals when I'm lying.", 4),
  ('Criminal', "I turn tail and run when things look bad.", 5),
  ('Criminal', "An innocent person is in prison for a crime that I commited. I'm okay with that.", 6);

/*Entertainer characteristics*/

INSERT INTO background_personality
VALUES
  ('Entertainer', "I know a story relevant to almost every situation.", 1),
  ('Entertainer', "Whenever I come to a new place, I collect local rumors and spread gossip", 2),
  ('Entertainer', "I'm a hopeless romantic, always searching for that 'special someone'.", 3),
  ('Entertainer', "Nobody stays angry at me or around me for long, since I can defuse any amount of tension", 4),
  ('Entertainer', "I love a good insult, even on directed at me.", 5),
  ('Entertainer', "I get bitter if I'm not the center of attention", 6),
  ('Entertainer', "I'll settle for nothing less than perfection", 7),
  ('Entertainer', "I'll change my mood or my mind as quickly as I change key ina song", 8);

INSERT INTO background_ideals
VALUES
  ('Entertainer', "Beauty", 1),
  ('Entertainer', "Tradition", 2),
  ('Entertainer', "Creativity", 3),
  ('Entertainer', "Greed", 4),
  ('Entertainer', "People", 5),
  ('Entertainer', "Honesty", 6);

INSERT INTO background_bonds
VALUES
  ('Entertainer', "My instrument is my most treasured possession, and it reminds me of someone I love", 1),
  ('Entertainer', "Somone stole my precious instrument, and someday I'll get it back.", 2),
  ('Entertainer', "I want to be famous, whatever it takes", 3),
  ('Entertainer', "I idolize a hero of the old tales and measure my deeds against that person's", 4),
  ('Entertainer', "I would do anything to prove myself superior to my hated rival.", 5),
  ('Entertainer', "I would do anything for the other members of my old troupe.", 6);

INSERT INTO background_flaws
VALUES
  ('Entertainer', "I'll do anything to win fame and renown", 1),
  ('Entertainer', "I'm a sucker for a pretty face", 2),
  ('Entertainer', "A scandal prevents me from ever going home again. That kind of trouble seems to follow me around.", 3),
  ('Entertainer', "I once satirized a noble who still wants my head. It was a mistake that I will likely repeat", 4),
  ('Entertainer', "I have trouble keeping my true feelings hidden. My sharp tongue lands me in trouble.", 5),
  ('Entertainer', "Despite my best efforts, I am unreliable to my friends.", 6);

/*Folk Hero characteristics*/
INSERT INTO background_personality
VALUES
  ('Folk Hero', "I judge people by their actions, not their words.", 1),
  ('Folk Hero', "If someone is in trouble, I'm always ready to lend help.", 2),
  ('Folk Hero', "When I set my mind to something, I follow through no matter what gets in my way.", 3),
  ('Folk Hero', "I have a strong sense of fair play and always try to find the most equitable solution to arguments.", 4),
  ('Folk Hero', "I'm confident in my own abilities and do what I can to instill confidence in others.", 5),
  ('Folk Hero', "Thinking is for other people. I prefer action.", 6),
  ('Folk Hero', "I misuse long words in an attempt to sound smarter.", 7),
  ('Folk Hero', "I get bored easily. When am I going to get on with my destiny?", 8);

INSERT INTO background_ideals
VALUES
  ('Folk Hero', "Respect", 1),
  ('Folk Hero', "Fairness", 2),
  ('Folk Hero', "Freedom", 3),
  ('Folk Hero', "Might", 4),
  ('Folk Hero', "Sincerity", 5),
  ('Folk Hero', "Destiny", 6);

INSERT INTO background_bonds
VALUES
  ('Folk Hero', "I have a family, but I have no idea where they are. One day, I hope to see them again.", 1),
  ('Folk Hero', "I worked the land, I love the land, and i will protect the land.", 2),
  ('Folk Hero', "A proud noble once gave me a horrible beating, and I will take my revenge on any bully I encounter.", 3),
  ('Folk Hero', "My tools are symbols of my past life, and I carry them so that I will never forget my roots.", 4),
  ('Folk Hero', "I protect those who cannot protect themselves.", 5),
  ('Folk Hero', "I wish my childhood sweetheart had come with me to persue my destiny.", 6);

INSERT INTO background_flaws
VALUES
  ('Folk Hero', "The tyrant who rules my land will stop at nothing to see me killed.", 1),
  ('Folk Hero', "I'm convinced of the significance of my destiny, and blind to my shortcomings and the risk of failure.", 2),
  ('Folk Hero', "The people who knew me when I was young know my shameful secret, so I can never go home again.", 3),
  ('Folk Hero', "I have a weakness for the vices of the city, especially hard drink.", 4),
  ('Folk Hero', "Secretly, I believe that things would be better if I were a tyrant lording over the land.", 5),
  ('Folk Hero', "I have trouble trusting in my allies.", 6);

/*Guild artisan characteristics*/
INSERT INTO background_personality
VALUES
  ('Guild Artisan', "I believe that anything worth doing is worth doing right. I can't help it - I'm a perfectionist.", 1),
  ('Guild Artisan', "I'm a snob who looks down on those who can't appreciate fine art.", 2),
  ('Guild Artisan', "I always want to know how things work and waht makes people tick.", 3),
  ('Guild Artisan', "I'm full of witty aphorisms and have a proverb for ever occasion.", 4),
  ('Guild Artisan', "I'm rude to people who lack my commitment to hard work and fair play.", 5),
  ('Guild Artisan', "I like to talk at length about my profession.", 6),
  ('Guild Artisan', "I don't part with my money easily and will haggle tirelessly to get the best deal possible.", 7),
  ('Guild Artisan', "I'm well known for my work, and I want to make sure everyone appreciates it. I'm always taken aback whne people haven't heard of me.", 8);
INSERT INTO background_ideals
VALUES
  ('Guild Artisan', "Community", 1),
  ('Guild Artisan', "Generosity", 2),
  ('Guild Artisan', "Freedome", 3),
  ('Guild Artisan', "Greed", 4),
  ('Guild Artisan', "People", 5),
  ('Guild Artisan', "Aspiration", 6);

INSERT INTO background_bonds
VALUES
  ('Guild Artisan', "The workshop where I learned my trade is the most important place in the world to me.", 1),
  ('Guild Artisan', "I created a great work for someone, and then found them unworthyto receiveit. I'm still looking for someone worthy.", 2),
  ('Guild Artisan', "I owe my guild a great debt for forging me into the person I am today.", 3),
  ('Guild Artisan', "I persue wealth to secure someone's love.", 4),
  ('Guild Artisan', "One day I will return to my guild and prove that I am the greatest artisan of them all.", 5),
  ('Guild Artisan', "I will get revenge on the evil forces that destroyed my place of business and ruined my livelihood", 6);


INSERT INTO background_flaws
VALUES
  ('Guild Artisan', "I'll do anything to get my hands on something rare or priceless.", 1),
  ('Guild Artisan', "I'm quick to assume that someone is trying to cheat me.", 2),
  ('Guild Artisan', "No one must ever learn that I once stole money from guild coffers.", 3),
  ('Guild Artisan', "I'm never satisfied with what I have - I always want more.", 4),
  ('Guild Artisan', "I would kill to acquire a noble title.", 5),
  ('Guild Artisan', "I'm horribly jealous of anyone who can outsine my handwork. Everywhere I go, I'm surrounded by rivals.", 6);

/*Hermit characteristics*/
INSERT INTO background_personality
VALUES
  ('Hermit', "I've been isolated for so long that I rarely speak, preferring gestures and the occasional grunt.", 1),
  ('Hermit', "I'm utterly serene, even in the face of disaster.", 2),
  ('Hermit', "The leader of my community had something wise to say on every topic, and I am eager to share that wisdom.", 3),
  ('Hermit', "I feel tremendous empathy for all who suffer.", 4),
  ('Hermit', "I'm oblivious to etiquette and social expectations.", 5),
  ('Hermit', "I connect everything that happens to me to a grand, cosmic plan.", 6),
  ('Hermit', "I often get lost in my own throught and contemplation, becoming oblivious to my surroundings.", 7),
  ('Hermit', "I am working on a grand philosophical theory and love sharing my ideas.", 8);

INSERT INTO background_ideals
VALUES
  ('Hermit', "Greater Good", 1),
  ('Hermit', "Logic", 2),
  ('Hermit', "Free Thinking", 3),
  ('Hermit', "Power", 4),
  ('Hermit', "Live and Let Live", 5),
  ('Hermit', "Self-Knowledge", 6);
INSERT INTO background_bonds
VALUES
  ('Hermit', "Nothing is more important than the members of my hermitage, order, or association", 1),
  ('Hermit', "I entered seclusion to hide from the ones who might still be hunting me. I must someday confront them.", 2),
  ('Hermit', "I'm still seeking the enlightement I persued in my seclusion, and it still eludes me.", 3),
  ('Hermit', "I entered seclusion because I loved someone I could not have.", 4),
  ('Hermit', "Should my discovery come to light, it could bring ruin to the world.", 5),
  ('Hermit', "My isolation gave me great insight into a great evil that only I can destroy.", 6);


INSERT INTO background_flaws
VALUES
  ('Hermit', "Now that I've returned to the world, I enjoy its delights a little too much.", 1),
  ('Hermit', "I harbor dark, bloodthirsty thoughts that my isolation and meditation failed to quell.", 2),
  ('Hermit', "I am dogmatic in my thoughts and philosophy.", 3),
  ('Hermit', "I let my need to win arguments overshadow friendships and harmony.", 4),
  ('Hermit', "I'd risk too much to uncover a lot bit of knowledge.", 5),
  ('Hermit', "I like keeping secrets and won't share them with anyone.", 6);

/*Noble characteristics*/
INSERT INTO background_personality
VALUES
  ('Noble', "My eloquent flattery makes everyone I talk to feel like the most wonderfuland important person in the world.", 1),
  ('Noble', "The common folk love me for my kindness and generosity.", 2),
  ('Noble', "No one could doubt by looking at my regal bearing that I am a cut above the unwashed masses.", 3),
  ('Noble', "I take great pains to always look my best and follow the latest fashions.", 4),
  ('Noble', "I don't like to get my hands dirty, and I won't be caught dead in unsuitable accomodations.", 5),
  ('Noble', "Despite my noble birth, I do not place myself above other folk. We all have the same blood.", 6),
  ('Noble', "My favor, once lost, is lost forever.", 7),
  ('Noble', "If you do me an injury, I will crush you, ruin your name, and salt your fields.", 8);

INSERT INTO background_ideals
VALUES
  ('Noble', "Respect", 1),
  ('Noble', "Responsibility", 2),
  ('Noble', "Independence", 3),
  ('Noble', "Power", 4),
  ('Noble', "Family", 5),
  ('Noble', "Noble Obligation", 6);

INSERT INTO background_bonds
VALUES
  ('Noble', "I will face any challenge to win approval of my family.", 1),
  ('Noble', "My house's alliance with another noble family must be sustained at all costs.", 2),
  ('Noble', "Nothing is more important that the other members of my family.", 3),
  ('Noble', "I am in love with the heir of a family that my family despises.", 4),
  ('Noble', "My loyalty to my sovereign is unwavering.", 5),
  ('Noble', "The common folk must see me as a hero of the people.", 6);

INSERT INTO background_flaws
VALUES
  ('Noble', "I secretly believe that everyone is beneath me.", 1),
  ('Noble', "I hide a truly scandalous secret that could ruin my family forever.", 2),
  ('Noble', "I too often hear veiled insults and threats in ever word addressed to me, and I'm quick to anger.", 3),
  ('Noble', "I have an insatiable desire for carnal pleasures.", 4),
  ('Noble', "In fact, the world does revolve around me.", 5),
  ('Noble', "By my words and actions I often bring shame to my family.", 6);

/*Outlander characteristics*/
INSERT INTO background_personality
VALUES
  ('Outlander', "I'm driven by a wanderlust that led me away from home.", 1),
  ('Outlander', "I watch over my friends as if they were a litter of newborn pups", 2),
  ('Outlander', "I once ran twenty-five miles without stopping to warn to my clan of an approaching orc hords. I'd do it again if I had to.", 3),
  ('Outlander', "I have a lesson for every situation, drawn from observing nature.", 4),
  ('Outlander', "I place no stock in wealthy or well-mannered folk. Money and manners won't save you from a hungry owlbear.", 5),
  ('Outlander', "I'm always picking things up, absently fiddling with them, and sometimes accidentally breaking them.", 6),
  ('Outlander', "I feel far more comfortable around animals than people.", 7),
  ('Outlander', "I was, in fact, raised by wolves.", 8);

INSERT INTO background_ideals
VALUES
  ('Outlander', "Change", 1),
  ('Outlander', "Greater Good.", 2),
  ('Outlander', "Honor", 3),
  ('Outlander', "Might", 4),
  ('Outlander', "Nature", 5),
  ('Outlander', "Glory", 6);

INSERT INTO background_bonds
VALUES
  ('Outlander', "My family, clan, or tribe is the most important thing in my life, even when they are far from me.", 1),
  ('Outlander', "An injurty to the unspoiled wilderness of my home is an injurty to me.", 2),
  ('Outlander', "I will bring terrible wrath down on the evildoers who destroyed my homeland.", 3),
  ('Outlander', "I am the last of my tribe, and it is up to me to ensure their names enter lengend.", 4),
  ('Outlander', "I suffer awful visions of a coming disaster and will do anything to prevent it.", 5),
  ('Outlander', "It is my duty to provide children to sustain my tribe.", 6);

INSERT INTO background_flaws
VALUES
  ('Outlander', "I am too enamored of ale, wine, and other intoxicant.", 1),
  ('Outlander', "There's no room for caution in a life lived to the fullest.", 2),
  ('Outlander', "I remember every insult I've recieved and nurse a silent resentment toward anyone who's ever wronged me.", 3),
  ('Outlander', "I am slow to trust members of other races, tribes, and societies.", 4),
  ('Outlander', "Violence is my answer to almost any challenge", 5),
  ('Outlander', "Don't expect me to save those who can't save themselves. It is nature's way that the strong thrive and the weak perish.", 6);

/*Sage characteristics*/
INSERT INTO background_personality
VALUES
('Sage', "I use polysyllabic words that convey the impression of great erudition.", 1),
('Sage', "I've read every book in the world's greatest libraries - or I like to boast that I have.", 2),
('Sage', "I'm used to helping out those who aren't as smart as I am, and I patiently explain anything and everything to others.", 3),
('Sage', "There nothing I like more than a good mystery.", 4),
('Sage', "I'm willing to listen to every side of an argument before I make my own judgement.", 5),
('Sage', "I...speak...slowly...when talking... to idiots,...which..almost...everyone...is...compared...to me.", 6),
('Sage', "I am horribly, horribly awkard in social situations.", 7),
('Sage', "I'm convinced that people are always trying to steal my secrets.", 8);

INSERT INTO background_ideals
VALUES
  ('Sage', "Knowledge", 1),
  ('Sage', "Beauty", 2),
  ('Sage', "Logic", 3),
  ('Sage', "No Limits", 4),
  ('Sage', "Power", 5),
  ('Sage', "Self-Improvement", 6);
INSERT INTO background_bonds
VALUES
  ('Sage', "It's my duty to protect my students.", 1),
  ('Sage', "I have an ancient text that holds terrible secrets that must not fall into the wrong hands.", 2),
  ('Sage', "I work to preserve a library, university, scriporium or a monastery.", 3),
  ('Sage', "My life's work is a series of tomes related to a specific field of lore.", 4),
  ('Sage', "I've been searching my whole life for the answer to a certain question.", 5),
  ('Sage', "I sold my soul for knowledge. I hope to do great deeds and win it back.", 6);

INSERT INTO background_flaws
VALUES
  ('Sage', "I am easily distracted by the promise of information.", 1),
  ('Sage', "Most people scream and run when they see a demon. I stop and take notes on its anatomy.", 2),
  ('Sage', "Unlocking an ancient mystery is worth the price of a civilization.", 3),
  ('Sage', "I overlook obvious solutions in favor of complicated ones.", 4),
  ('Sage', "I speak without really thinking through my words, invariably insulting others.", 5),
  ('Sage', "I can't keep a secret to save my life, or anyone else's.", 6);

/*Sailor characteristics*/
INSERT INTO background_personality
VALUE
('Sailor', "My friends know they can rely on me, no matter what.", 1),
('Sailor', "I work hard so that I can play hard when the work is done.", 2),
('Sailor', "I enjoy sailing into new ports and making new friends over a flagon of ale.", 3),
('Sailor', "I stretch the truth for the sake of a good story.", 4),
('Sailor', "To me, a tavern brawl is a nice way to get to know a new city.", 5),
('Sailor', "I never pass up a friednly wager.", 6),
('Sailor', "My language is as foul as an otyugh nest.", 7),
('Sailor', "I like a job well done, especially if I can convince someone else to do it.", 8);

INSERT INTO background_ideals
VALUES
('Sailor', "Respect", 1),
('Sailor', "Fairness", 2),
('Sailor', "Freedom", 3),
('Sailor', "Mastery", 4),
('Sailor', "People", 5),
('Sailor', "Aspiration", 6);

INSERT INTO background_bonds
VALUES
('Sailor', "I'm loyal to my captain first, everything else second.", 1),
('Sailor', "The ship is most important - crewmates and captains come and go.", 2),
('Sailor', "I'll always remember my first ship.", 3),
('Sailor', "In a harbor town,I have a paramour whose eyes nearly stole me from the sea.", 4),
('Sailor', "I was cheated out of my fair share of the profits, and I want to get my due.", 5),
('Sailor', "Ruthless pirates murdered my captain and crewmates, plundered our ship, and left me to die. Vengeance will be mine.", 6);

INSERT INTO background_flaws
VALUES
('Sailor', "I follow orders, even if I think they're wrong.", 1),
('Sailor', "I'll say anything to avoid having to do extra work.", 2),
('Sailor', "Once someone questions my courage, I never back down no matter how dangerous the situation.", 3),
('Sailor', "Once I start drinking, it's hard for me to stop.", 4),
('Sailor', "I can't help but pocket loose coins and other trinkets I come across.", 5),
('Sailor', "My price will probably lead to my destruction.", 6);

/*Soldier characteristics*/
INSERT INTO background_personality
VALUES
('Soldier', "I'm always polite and respectful.", 1),
('Soldier', "I'm haunted by the memories of war. I can't get the images of violence out of my mind.", 2),
('Soldier', "I've lost too many friends, and I'm slow to make new ones.", 3),
('Soldier', "I'm full of inspiring and cautionary tales from my military experience relevant to almost every combat situation.", 4),
('Soldier', "I can stare down a hell hound without flinching.", 5),
('Soldier', "I enjoy being strong and like breaking things.", 6),
('Soldier', "I have a crude sense of humor.", 7),
('Soldier', "I face problems head-on. A simple, direct solution is the best path to success.", 8);

INSERT INTO background_ideals
VALUES
('Soldier', "Greater Good", 1),
('Soldier', "Responsibility", 2),
('Soldier', "Independence", 3),
('Soldier', "Might", 4),
('Soldier', "Live and Let Live", 5),
('Soldier', "Nation", 6);

INSERT INTO background_bonds
VALUES
('Soldier', "I would still lay down my life for the people I served with.", 1),
('Soldier', "Someone saved my life on the battlefield. To this day I will never leave a friend behind.", 2),
('Soldier', "My honor is my life.", 3),
('Soldier', "I'll never forget the crushing defeat my company suffered or the enemies who delt it.", 4),
('Soldier', "Those who fight beside me are those worth dying for.", 5),
('Soldier', "I fight for those who cannot fight for themselves.", 6);

INSERT INTO background_flaws
VALUES
('Soldier', "The monstrous enemy we faced in battle still leave me quivering with fear.", 1),
('Soldier', "I have little respect for anyone who is not a proven warrior.", 2),
('Soldier', "I made a terrible mistake in battle cost many lives - and I would do anything to keep that mistake secret.", 3),
('Soldier', "My hatred of my enemies is blind and unreasoning.", 4),
('Soldier', "I obey the law, even if the law causes misery.", 5),
('Soldier', "I'd rather eat my armor than admit when I'm wrong.", 6);

/*Urchin characteristics*/
INSERT INTO background_personality
VALUES
('Urchin', "I hide scraps of food and trinkets away in my pockets.", 1),
('Urchin', "I ask a lot of questions.", 2),
('Urchin', "I like to squeeze into small places where no one else can get to me.", 3),
('Urchin', "I sleep with my back to a wall or tree, with everything I own wrapped in a bundle in my arms.", 4),
('Urchin', "I eat like a pig and have bad manners.", 5),
('Urchin', "I think anyone who's nice to me is hiding evil intent.", 6),
('Urchin', "I don't like to bathe.", 7),
('Urchin', "I bluntly say what other people are hinting or hiding.", 8);

INSERT INTO background_ideals
VALUES
('Urchin', "Respect", 1),
('Urchin', "Community", 2),
('Urchin', "Change", 3),
('Urchin', "Retribution", 4),
('Urchin', "People", 5),
('Urchin', "Aspiration", 6);

INSERT INTO background_bonds
VALUES
('Urchin', "My town is my home, and I'll fight to defend it.", 1),
('Urchin', "I sponsor an orphanage to keep others from enduring what I was forced to endure.", 2),
('Urchin', "I owe my survival to another urchin who taught me to live on the streets.", 3),
('Urchin', "I owe a debt I can never repay to the person who took pity on me.", 4),
('Urchin', "I escaped my life of poverty by robbing an important person, and I'm wanted for it.", 5),
('Urchin', "No one else should have to endure the hardships I've been through.", 6);

INSERT INTO background_flaws
VALUES
('Urchin', "If I'm outnumbered, I will run away from a fight.",  1),
('Urchin', "Gold seems like a lot of money to me. and I'll do just about anything for more of it.",  2),
('Urchin', "I will never fully trust anyone other than myself.",  3),
('Urchin', "I'd rather kill someone in their sleep then fight fair.",  4),
('Urchin', "It's not stealing if I need it more than someone else.",  5),
('Urchin', "People who can't take care of themselves get what they deserve.",  6);

/*barbarian skills*/
  INSERT INTO class_skills
  VALUES
    ('Barbarian', 'Animal Handling'),
    ('Barbarian', 'Atheletics'),
    ('Barbarian', 'Intimidation'),
    ('Barbarian', 'Nature'),
    ('Barbarian', 'Perception'),
    ('Barbarian', 'Survival');

  /*bard skills*/
  INSERT INTO class_skills
  VALUES
    ('Bard', 'Athletics'),
    ('Bard', 'Acrobatics'),
    ('Bard', 'Sleight of Hand'),
    ('Bard', 'Stealth'),
    ('Bard', 'Arcana'),
    ('Bard', 'History'),
    ('Bard', 'Investigation'),
    ('Bard', 'Nature'),
    ('Bard', 'Religion'),
    ('Bard', 'Animal Handling'),
    ('Bard', 'Insight'),
    ('Bard', 'Medicine'),
    ('Bard', 'Perception'),
    ('Bard', 'Survival'),
    ('Bard', 'Deception'),
    ('Bard', 'Athletics');

/*cleric skills*/
  INSERT INTO class_skills
  VALUES
    ('Cleric', 'History'),
    ('Cleric', 'Insight'),
    ('Cleric', 'Medicine'),
    ('Cleric', 'Persuassion'),
    ('Cleric', 'Religion');

/*druid skills*/
INSERT INTO class_skills
VALUES
  ('Druid', 'Arcana'),
  ('Druid', 'Animal Handling'),
  ('Druid', 'Insight'),
  ('Druid', 'Medicine'),
  ('Druid', 'Nature'),
  ('Druid', 'Perception'),
  ('Druid', 'Religion'),
  ('Druid', 'Survival');

/*fighter skills*/
INSERT INTO class_skills
VALUES
  ('Fighter', 'Acrobatics'),
  ('Fighter', 'Animal Handling'),
  ('Fighter', 'Athletics'),
  ('Fighter', 'History'),
  ('Fighter', 'Insight'),
  ('Fighter', 'Intimidation'),
  ('Fighter', 'Perception'),
  ('Fighter', 'Survival');

/*monk skills*/
INSERT INTO class_skills
VALUES
  ('Monk', 'Acrobatics'),
  ('Monk', 'Athletics'),
  ('Monk', 'History'),
  ('Monk', 'Insight'),
  ('Monk', 'Religion'),
  ('Monk', 'Stealth');

/*paladin skills*/
INSERT INTO class_skills
VALUES
  ('Paladin', 'Atheletics'),
  ('Paladin', 'Insight'),
  ('Paladin', 'Intimidation'),
  ('Paladin', 'Medicine'),
  ('Paladin', 'Persuasion'),
  ('Paladin', 'Religion');

/*ranger skills*/
INSERT INTO class_skills
VALUES
  ('Ranger', 'Animal Handling'),
  ('Ranger', 'Athletics'),
  ('Ranger', 'Insight'),
  ('Ranger', 'Investigation'),
  ('Ranger', 'Nature'),
  ('Ranger', 'Perception'),
  ('Ranger', 'Stealth'),
  ('Ranger', 'Survival');

/*rogue skills*/
INSERT INTO class_skills
VALUES
  ('Rogue', 'Acrobatics'),
  ('Rogue', 'Atheletics'),
  ('Rogue', 'Deception'),
  ('Rogue', 'Insight'),
  ('Rogue', 'Intimidation'),
  ('Rogue', 'Investigation'),
  ('Rogue', 'Perception'),
  ('Rogue', 'Performance'),
  ('Rogue', 'Persuasion'),
  ('Rogue', 'Sleight of Hand'),
  ('Rogue', 'Stealth');


/*sorcerer skills*/
INSERT INTO class_skills
VALUES
  ('Sorcerer', 'Arcana'),
  ('Sorcerer', 'Deception'),
  ('Sorcerer', 'Insight'),
  ('Sorcerer', 'Intimidation'),
  ('Sorcerer', 'Persuasion'),
  ('Sorcerer', 'Religion');


/*warlock skills*/
INSERT INTO class_skills
VALUES
  ('Warlock', 'Arcana'),
  ('Warlock', 'Deception'),
  ('Warlock', 'History'),
  ('Warlock', 'Intimidation'),
  ('Warlock', 'Investigation'),
  ('Warlock', 'Nature'),
  ('Warlock', 'Religion');


/*wizard skills*/
INSERT INTO class_skills
VALUES
  ('Wizard', 'Arcana'),
  ('Wizard', 'History'),
  ('Wizard', 'Insight'),
  ('Wizard', 'Investigation'),
  ('Wizard', 'Medicine'),
  ('Wizard', 'Religion');

/*Spell Data Entry*/
INSERT INTO spell_library
VALUES
('Bard', 'Blade Ward', '',0),
('Bard', 'Dancing Lights', '',0),
('Bard', 'Friends', '',0),
('Bard', 'Light', '',0),
('Bard', 'Mage Hand', '',0),
('Bard', 'Mending', '',0),
('Bard', 'Message', '',0),
('Bard', 'Minor Illusion', '',0),
('Bard', 'Prestidigitation', '',0),
('Bard', 'True Strike', '',0),
('Bard', 'Vicious Mockery', '',0),
('Cleric', 'Guidance', '',0),
('Cleric', 'Light', '',0),
('Cleric', 'Mending', '',0),
('Cleric', 'Resistance', '',0),
('Cleric', 'Sacred Flame', '',0),
('Cleric', 'Spare the Dying', '',0),
('Cleric', 'Thaumaturgy', '',0),
('Druid', 'Druidcraft', '',0),
('Druid', 'Guidance', '',0),
('Druid', 'Mending', '',0),
('Druid', 'Poison Spray', '',0),
('Druid', 'Produce Flame', '',0),
('Druid', 'Resistance', '',0),
('Druid', 'Shillelagh', '',0),
('Druid', 'Thorn Whip', '',0),
('Sorcerer', 'Acid Splash', '',0),
('Sorcerer', 'Blade Ward', '',0),
('Sorcerer', 'Chill Touch', '',0),
('Sorcerer', 'Dancing Lights', '',0),
('Sorcerer', 'Fire Bolt', '',0),
('Sorcerer', 'Friends', '',0),
('Sorcerer', 'Light', '',0),
('Sorcerer', 'Mage Hand', '',0),
('Sorcerer', 'Mending', '',0),
('Sorcerer', 'Message', '',0),
('Sorcerer', 'Minor Illusion', '',0),
('Sorcerer', 'Poison Spray', '',0),
('Sorcerer', 'Prestidigitation', '',0),
('Sorcerer', 'Ray of Frost', '',0),
('Sorcerer', 'Shocking Grasp', '',0),
('Sorcerer', 'True Strike', '',0),
('Warlock', 'Blade Ward', '',0),
('Warlock', 'Chill Touch', '',0),
('Warlock', 'Eldritch Blast', '',0),
('Warlock', 'Friends', '',0),
('Warlock', 'Mage Hand', '',0),
('Warlock', 'Minor Illusion', '',0),
('Warlock', 'Poison Spray', '',0),
('Warlock', 'Prestidigitation', '',0),
('Warlock', 'True Strike', '',0),
('Wizard', 'Acid Splash', '',0),
('Wizard', 'Blade Ward', '',0),
('Wizard', 'Chill Touch', '',0),
('Wizard', 'Dancing Lights', '',0),
('Wizard', 'Fire Bolt', '',0),
('Wizard', 'Friends', '',0),
('Wizard', 'Light', '',0),
('Wizard', 'Mage Hand', '',0),
('Wizard', 'Mending', '',0),
('Wizard', 'Message', '',0),
('Wizard', 'Minor Illusion', '',0),
('Wizard', 'Poison Spray', '',0),
('Wizard', 'Prestidigitation', '',0),
('Wizard', 'Ray of Frost', '',0),
('Wizard', 'Shocking Grasp', '',0),
('Wizard', 'True Strike', '',0);
/*class equipment*/
INSERT INTO class_equipment
VALUES
('Barbarian', 'Greataxe', 'Martial Melee Weapon', NULL),
('Barbarian', 'Two Handaxes', 'Simple Weapon', NULL),
('Barbarian', 'Explorer''s pack', NULL, NULL),
('Barbarian', 'Four Javelins', NULL, NULL),
('Bard', 'Rapier', 'Longsword', 'Simple Weapon'),
('Bard', 'Displomat''s pack', 'Entertainer''s pack', NULL),
('Bard', 'Lute', 'Musical Instrument', NULL),
('Bard', 'Leather Armor', NULL, NULL),
('Bard', 'Dagger', NULL, NULL),
('Cleric', 'Mace', 'Warhammer', NULL),
('Cleric', 'Scale Mail', 'Leather Armor', 'Chain Mail'),
('Cleric', 'Light Crossbow and 20 bolts', 'Simple Weapon', NULL),
('Cleric', 'Priest''s pack', 'Explorer''s pack', NULL),
('Cleric', 'Shield', NULL, NULL),
('Cleric', 'Holy Symbol', NULL, NULL),
('Druid', 'Wooden Shield', 'Simple Weapon', NULL),
('Druid', 'Scimitar', 'Simple Melee Weapon', NULL),
('Druid', 'Leather Armor', NULL, NULL),
('Druid', 'Explorer''s Pack', NULL, NULL),
('Druid', 'Druidic Focus', NULL, NULL),
('Fighter', 'Chain Mail', 'Leather, Longbow and 20 arrows', NULL),
('Fighter', 'Martial Weapon and Shield', 'Martial Weapon', 'Martial Weapon'),
('Fighter', 'Light Crossbow and 20 Bolts', 'Two Handaxes', NULL),
('Fighter', 'Dungeoneer''s Pack', 'Explorer''s pack', NULL),
('Monk', 'Shortsword', 'Simple Weapon', NULL),
('Monk', 'Dungeoneer''s Pack', 'Explorer''s pack', NULL),
('Monk', '10 Darts', NULL, NULL),
('Paladin', 'Martial Weapon and Shield', 'Martial Weapon', 'Martial Weapon'),
('Paladin', 'Five Javelins', 'Simple Melee Weapon', NULL),
('Paladin', 'Priest''s Pack', 'Explorer''s Pack', NULL),
('Paladin', 'Chain Mail', NULL, NULL),
('Paladin', 'Holy Symbol', NULL, NULL),
('Ranger', 'Scale Mail', 'Leather Armor', NULL),
('Ranger', 'Two Shortswords', 'Simple Melee Weapon', 'Simple Melee Weapon'),
('Ranger', 'Dungeoneer''s pack', 'Explorer''s Pack', NULL),
('Ranger', 'Longbow and quiver of 20 arrows', NULL, NULL),
('Rogue', 'Rapier', 'Shortsword', NULL),
('Rogue', 'Shortbow and Quiver of 20 arrows', 'Shortsword', NULL),
('Rogue', 'Burglar''s pack', 'Dungeoneer''s pack', 'Explorer''s pack'),
('Rogue', 'Leather Armor', NULL, NULL),
('Rogue', 'Two Daggers', NULL, NULL),
('Rogue', 'Thieves'' Tools', NULL, NULL),
('Sorcerer', 'Light Crossbow and 20 Bolts', 'Simple Weapon', NULL),
('Sorcerer', 'Component Pouch', 'Arcane Focus', NULL),
('Sorcerer', 'Dungeoneer''s Pack', 'Explorer''s Pack', NULL),
('Sorcerer', 'Two Daggers', NULL, NULL),
('Warlock', 'Light Crossbow and 20 bolts', 'Simple Weapon', NULL),
('Warlock', 'Component Pouch', 'Arcane Focus', NULL),
('Warlock', 'Scholar''s pack', 'Dungeoneer''s Pack', NULL),
('Warlock', 'Leather Armor', NULL, NULL),
('Warlock', 'Simple Weapon', NULL, NULL),
('Warlock', 'Two Daggers', NULL, NULL),
('Wizard', 'Quarterstaff', 'Dagger', NULL),
('Wizard', 'Component Pouch', 'Arcane Focus', NULL),
('Wizard', 'Scholar''s Pack', 'Explorer''s pack', NULL),
('Wizard', 'Spellbook', NULL, NULL);

/*background equipment*/
INSERT INTO background_equipment
VALUES
('Acolyte', 'Holy Symbol', NULL, NULL, NULL),
('Acolyte', 'Prayer Book', 'Prayer Whee', NULL, NULL),
('Acolyte', '5 Sticks of Incense', NULL, NULL, NULL),
('Acolyte', 'Vestments', NULL, NULL, NULL),
('Acolyte', 'Set of Common Clothes', NULL, NULL, NULL),
('Acolyte', 'Belt Pouch containing 15gp', NULL, NULL, NULL),
('Charlaton', 'A Set of Fine Clothes', NULL, NULL, NULL),
('Charlaton', 'Disguise Kit', NULL, NULL, NULL),
('Charlaton', 'Ten Bottles Filled With Colored Liquid', 'A Set of Weighted Dice', 'Deck of Marked Cards', 'Signet Ring of an Imaginary Duke'),
('Charlaton', 'A Set of Fine Clothes', NULL, NULL, NULL),
('Charlaton', 'Belt Pouch Containing 15gp', NULL, NULL, NULL),
('Criminal', 'Crowbar', NULL, NULL, NULL),
('Criminal', 'Set of Dark Common Clothes Including a Hood', NULL, NULL, NULL),
('Criminal', 'Belt Pouch containing 15gp', NULL, NULL, NULL),
('Entertainer', 'Musical Instrument', NULL, NULL, NULL),
('Entertainer', 'Love Letter', 'Lock of Hair', 'Trinket', NULL),
('Entertainer', 'Costume', NULL, NULL, NULL),
('Entertainer', 'Belt Pouch Containing 15 gp', NULL, NULL, NULL),
('Folk Hero', 'Artisan''s tools', NULL, NULL, NULL),
('Folk Hero', 'Shovel', NULL, NULL, NULL),
('Folk Hero', 'Iron Pot', NULL, NULL, NULL),
('Folk Hero', 'Set of Common Clothes', NULL, NULL, NULL),
('Folk Hero', 'Belt Pouch Containing 10 gp', NULL, NULL, NULL),
('Guild Artisan', 'Artisan''s tools', NULL, NULL, NULL),
('Guild Artisan', 'A Letter of Introduction From Your Guild', NULL, NULL, NULL),
('Guild Artisan', 'Set of Traveler''s Clothes', NULL, NULL, NULL),
('Guild Artisan', 'Belt Pouch Containing 15 gp', NULL, NULL, NULL),
('Hermit', 'Scroll Case Stuffed Full of Notes From Studies or Prayers', NULL, NULL, NULL),
('Hermit', 'Winter Blanket', NULL, NULL, NULL),
('Hermit', 'Scroll Case Stuffed Full of Notes From Studies or Prayers', NULL, NULL, NULL),
('Hermit', 'Set of Common Clothes', NULL, NULL, NULL),
('Hermit', 'Herbalism Kit', NULL, NULL, NULL),
('Hermit', '5 gp', NULL, NULL, NULL),
('Noble', 'Set of Fine Clothes', NULL, NULL, NULL),
('Noble', 'Signet Ring', NULL, NULL, NULL),
('Noble', 'Scroll of Pedigree', NULL, NULL, NULL),
('Noble', 'Purse Containing 25 gp', NULL, NULL, NULL),
('Outlander', 'Staff', NULL, NULL, NULL),
('Outlander', 'Hunting Trap', NULL, NULL, NULL),
('Outlander', 'Trophy From Animal You Killed', NULL, NULL, NULL),
('Outlander', 'Set of Traveler''s Clothes', NULL, NULL, NULL),
('Outlander', 'Belt Pouch Containing 10 gp', NULL, NULL, NULL),
('Sage', 'Bottle of Black Ink', NULL, NULL, NULL),
('Sage', 'Quill', NULL, NULL, NULL),
('Sage', 'Small Knife', NULL, NULL, NULL),
('Sage', 'Letter From a Dead Colleague Posing a Question You Have Not Yet Been Able to Answer', NULL, NULL, NULL),
('Sage', 'Set of Common Clothes', NULL, NULL, NULL),
('Sage', 'Belt Pouch Containing 10 gp', NULL, NULL, NULL),
('Sailor', 'Belaying Pin(Club)', NULL, NULL, NULL),
('Sailor', '50 Feet of Silk Rope', NULL, NULL, NULL),
('Sailor', 'Rabbit Foot', 'Small Stone with Hole in the Center', NULL, NULL),
('Sailor', 'Set of Common Clothes', NULL, NULL, NULL),
('Sailor', 'Belt Pouch Containing 10 gp', NULL, NULL, NULL),
('Soldier', 'Insignia of Rank', NULL, NULL, NULL),
('Soldier', 'Enemy Dagger', 'Enemy Broken Blad', 'Piece of Enemy Banner', NULL),
('Soldier', 'Set of Bone Dice', 'Deck of Cards', NULL, NULL),
('Soldier', 'Set of Common Clothes', NULL, NULL, NULL),
('Soldier', 'Belt Pouch Containing 10 gp', NULL, NULL, NULL),
('Urchin', 'Small Knife', NULL, NULL, NULL),
('Urchin', 'Map of the City You Grew Up In', NULL, NULL, NULL),
('Urchin', 'Pet Mouse', NULL, NULL, NULL),
('Urchin', 'Token to Remember Your Parents By', NULL, NULL, NULL),
('Urchin', 'Set of Common Clothes', NULL, NULL, NULL),
('Urchin', 'Belt Pouch Containing 10 gp', NULL, NULL, NULL);

/*armor data entry*/
INSERT INTO armor
VALUES
('Padded', 'Light', 11),
('Leather', 'Light', 11),
('Studded', 'Light', 12),
('Hide', 'Medium', 12),
('Chain Shirt', 'Medium', 13),
('Scale Mail', 'Medium', 14),
('Breastplate', 'Medium', 14),
('Half Plate', 'Medium', 15),
('Ring Mail', 'Heavy', 14),
('Chain Mail', 'Heavy', 16),
('Splint', 'Heavey', 17),
('Plate', 'Heavy', 18),
('Shield', 'Shield', 2);

/*weapon data entry*/
INSERT INTO weapons
VALUES
('Club', 'Simple', 'Melee'),
('Greatclub', 'Simple', 'Melee'),
('Handaxe', 'Simple', 'Melee'),
('Javelin', 'Simple', 'Melee'),
('Light Hammer', 'Simple', 'Melee'),
('Mace', 'Simple', 'Melee'),
('Quarterstaff', 'Simple', 'Melee'),
('Sickle', 'Simple', 'Melee'),
('Spear', 'Simple', 'Melee'),
('Unarmed Strike', 'Simple', 'Melee'),
('Light Crossbow', 'Simple', 'Ranged'),
('Dart', 'Simple', 'Ranged'),
('Shortbow', 'Simple', 'Ranged'),
('Sling', 'Simple', 'Ranged'),
('BattleAxe', 'Martial', 'Melee'),
('Flail', 'Martial', 'Melee'),
('Glaive', 'Martial', 'Melee'),
('Greataxe', 'Martial', 'Melee'),
('Greatsword', 'Martial', 'Melee'),
('Halberd', 'Martial', 'Melee'),
('Lance', 'Martial', 'Melee'),
('Longsword', 'Martial', 'Melee'),
('Maul', 'Martial', 'Melee'),
('Morningstar', 'Martial', 'Melee'),
('Pike', 'Martial', 'Melee'),
('Rapier', 'Martial', 'Melee'),
('Scimitar', 'Martial', 'Melee'),
('Shortsword', 'Martial', 'Melee'),
('Trident', 'Martial', 'Melee'),
('War Pick', 'Martial', 'Melee'),
('Warhammer', 'Martial', 'Melee'),
('Whip', 'Martial', 'Melee'),
('Blowgun', 'Marital', 'Ranged'),
('Hand Crossbow', 'Marital', 'Ranged'),
('Heavy Crossbow', 'Marital', 'Ranged'),
('Longbow', 'Marital', 'Ranged'),
('Net', 'Marital', 'Ranged');



INSERT INTO tool_library
VALUES
('Artisan''s Tools', 'Alchemist''s Supplies'),
('Artisan''s Tools', 'Brewer''s Supplies'),
('Artisan''s Tools', 'Calligraphers''s Supplies'),
('Artisan''s Tools', 'Carpenter''s Tools'),
('Artisan''s Tools', 'Cartographer''s Tools'),
('Artisan''s Tools', 'Cobbler''s Tools'),
('Artisan''s Tools', 'Cook''s Utensils'),
('Artisan''s Tools', 'Glassblower''s Tools'),
('Artisan''s Tools', 'Jeweler''s Tools'),
('Artisan''s Tools', 'Leatherworker''s Tools'),
('Artisan''s Tools', 'Mason''s Tools'),
('Artisan''s Tools', 'Painter''s Supplies'),
('Artisan''s Tools', 'Potter''s Tools'),
('Artisan''s Tools', 'Smith''s Tools'),
('Artisan''s Tools', 'Tinker''s Tools'),
('Artisan''s Tools', 'Weaver''s Tools'),
('Artisan''s Tools', 'Woodcarver''s Tools'),
('Musical Instrument', 'Bagpipes'),
('Musical Instrument', 'Drum'),
('Musical Instrument', 'Dulcimer'),
('Musical Instrument', 'Flute'),
('Musical Instrument', 'Lute'),
('Musical Instrument', 'Lyre'),
('Musical Instrument', 'Horn'),
('Musical Instrument', 'Pan Flute'),
('Musical Instrument', 'Shawm'),
('Musical Instrument', 'Viol');
