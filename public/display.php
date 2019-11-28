<?php include "templates/header.php"; ?>


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
  $resultSet = $mysqli->query("SELECT * FROM character_equipment WHERE cID = '$_SESSION[cid]'");

  echo "Equipment Name: <br>";
  while($row = $resultSet->fetch_assoc()){
    echo $row['equipment_name'], "<br>";
  }


 ?>

 <div class="error"></div>
 <form class="url_form">
   <div>Upload a PDF form file: <label><input type="file" name="file" /></label></div>
   <label>or download one: <input type="text" size="40" value="Spielberichtsbogen_2BL.pdf" name="url" /><button role="submit">Download</button></label>
 </form>
 <form class="cur_file"></form>
 <form class="lib_form">
   PDF library:
   <label><input type="radio" name="pdflib" value="minipdf" checked="checked" />minipdf</label>
   <label><input type="radio" name="pdflib" value="pdf.js" />PDF.js</label>
 </form>
 <form class="fill_form"><button class="fill" disabled="disabled">Fill and download PDF</button></form>
 <form class="list_form"></form>
 <div class="loading">Loading (this may take a while since PDF.js is gigantic)</div>
 <script src="assets/js/minipdf.js"></script>
 <script src="assets/js/customlibs/pdf.worker.js"></script>
 <script src="assets/js/minipdf_js.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pako/1.0.3/pako.min.js" integrity="sha256-X7u/eQo6oIgWqc5jOmTjQn3loM8Lse0ock76Gkkn/Ro=" crossorigin="anonymous"></script>
 <script src="assets/js/pdfform.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.0.0/FileSaver.min.js"></script>
 <script src="assets/js/demo.js"></script>


<!-- <script type="text/javascript" src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>
<script type="text/javascript" src="assets/js/pdffiller.js"></script> -->
