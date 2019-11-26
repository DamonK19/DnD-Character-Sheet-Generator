<?php
  session_start();


  $mysqli = NEW MySQLi('localhost','root','root','dnd');
  $resultSet = $mysqli->query("SELECT * FROM characters WHERE cID = $_SESSION[cid]");
  $row = $resultSet->fetch_assoc();
  //display character name
  echo "Character name: ", $row['character_name'];
  echo "<br>";
  //display player name
  echo "Player name: ", $row['player_name'];
  echo "<br>";
  //display race
  echo "Race: ", $row['race_name'];
  echo "<br>";
  //display class
  echo "Class: ", $row['class_name'];
  echo "<br>";
  //display background
  echo "Background: ", $row['background'];
  echo "<br>";
  //display Allignment
  echo "Allignment: ", $row['allignment'];
  echo "<br>";
  //display stats

  $mysqli = NEW MySQLi('localhost','root','root','dnd');
  $resultSet = $mysqli->query("SELECT * FROM stats WHERE cID = $_SESSION[cid]");
  $row = $resultSet->fetch_assoc();

  echo "Strength: ", $row['strength'];
  echo "<br>";

  echo "Dexterity: ", $row['dexterity'];
  echo "<br>";

  echo "Constitution: ", $row['constitution'];
  echo "<br>";

  echo "Intelligence: ", $row['intelligence'];
  echo "<br>";

  echo "Wisdom: ", $row['wisdom'];
  echo "<br>";

  echo "Charisma: ", $row['charisma'];
  echo "<br>";

  //display characteristics
  $mysqli = NEW MySQLi('localhost','root','root','dnd');
  $resultSet = $mysqli->query("SELECT * FROM characteristics WHERE cID = $_SESSION[cid]");
  $row = $resultSet->fetch_assoc();

  echo "Personality: ", $row['personality'];
  echo "<br>";

  echo "Ideal: ", $row['ideal'];
  echo "<br>";

  echo "Bond: ", $row['bond'];
  echo "<br>";

  echo "Flaw: ", $row['flaw'];
  echo "<br>";


  $mysqli = NEW MySQLi('localhost','root','root','dnd');
  $resultSet = $mysqli->query("SELECT * FROM spells WHERE cID = $_SESSION[cid]");
  $row = $resultSet->fetch_assoc();

  echo "Spell Name: ", $row['spell_name'];
  echo "<br>";
  echo "Spell Description: ", $row['description'];
  echo "<br>";

  $mysqli = NEW MySQLi('localhost','root','root','dnd');
  $resultSet = $mysqli->query("SELECT * FROM equipment WHERE equipped = 1");
  $row = $resultSet->fetch_assoc();

  echo "Equipment Name: ", $row['equipment_name'];



 ?>
<br>
 <a href="manageCharacter.php">Click here to go back to home</a>
