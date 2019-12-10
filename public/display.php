<?php include "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>

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

  //find matching armor
  foreach ($armor as $key_a => $value_a) {
    foreach ($items as $key_i => $value_i) {
      if(strstr($value_a, $value_i)) {
        $name = $value_a;
      }
    }
  }
  //get armor class
  if(isset($name)){
    $resultSet = $mysqli->query("SELECT * FROM armor WHERE armor_name = '$name'");
    $row = $resultSet->fetch_assoc();
    $armor_class = $row['armorClass'];
  }
  elseif ($background == 'Barbarian') {
    $armor_class = 10 + $dex_mod + $con_mod;
  }
  elseif ($background == 'Monk') {
    $armor_class = 10 + $dex_mod + $wis_mod;
  }
  else {
    $armor_class = 10 + $dex_mod;
  }

  //get all weapons in array
  $weapon = array();
  $resultSet = $mysqli->query("SELECT * from weapons");
  while($rows = $resultSet->fetch_assoc()) {
    array_push($weapon, $rows['weapon_name']);
  }

  //find matching weapons
  $char_wepaons = array();
  foreach ($weapon as $key_w => $value_w) {
    foreach ($items as $key_i => $value_i) {
      if(strstr($value_a, $value_i)) {
        array_push($char_weapons, $value_w);
      }
    }
  }

  //get proficiencies
  $prof = array();
  $resultSet = $mysqli->query("SELECT * FROM proficiencies WHERE name = '$class' OR name = '$background' OR name = '$race'");
  while($row = $resultSet->fetch_assoc()){
    array_push($prof, $row['type']);
  }

  //get traits
  $trait = array();
  $resultSet = $mysqli->query("SELECT * FROM traits WHERE name = '$race'");
  while($row = $resultSet->fetch_assoc()){
    array_push($trait, $row['type']);
  }

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

 <div class="character-creation-bg">
   <div class="site-wrapper">
     <div class="character-sheet">
       <div class="stat display-cname">
         Character name
       </div>
       <div class="stat display-pname">
         Player name
       </div>
       <div class="stat display-race">
         Race
       </div>
       <div class="stat display-class">
         <?php echo $class; ?>
       </div>
       <div class="stat display-background">
         <?php echo $background; ?>
       </div>
       <div class="stat display-allignment">
         <?php echo $allignment; ?>
       </div>
       <div class="stat display-strength">
         <?php echo $strength; ?>
       </div>
       <div class="stat display-strength-mod">
         <?php echo "+", $str_mod; ?>
       </div>
       <div class="stat display-dexterity">
         <?php echo $dexterity; ?>
       </div>
       <div class="stat display-dexterity-mod">
         <?php echo "+", $dex_mod; ?>
       </div>
       <div class="stat display-constitution">
         <?php echo $constitution; ?>
       </div>
       <div class="stat display-constitution-mod">
         <?php echo "+", $con_mod; ?>
       </div>
       <div class="stat display-intelligence">
         <?php echo $intelligence; ?>
       </div>
       <div class="stat display-intelligence-mod">
        <?php echo "+", $int_mod; ?>
       </div>
       <div class="stat display-wisdom">
         <?php echo $wisdom; ?>
       </div>
       <div class="stat display-wisdom-mod">
         <?php echo "+", $wis_mod; ?>
       </div>
       <div class="stat display-charisma">
         <?php echo $charisma; ?>
       </div>
       <div class="stat display-charisma-mod">
         <?php echo "+", $chr_mod; ?>
       </div>
       <div class="stat display-passive-wisdom">
         <?php echo 10 + $wis_mod; ?>
       </div>
       <div class="stat display-prof-bonus">
         <?php echo $prof_bonus; ?>
       </div>

       <!--character saving throws-->
       <div class="stat display-strength-saving-select">
         <?php
            if($str_race_mod !=0){
              echo "&#8226;";
            }
          ?>
       </div>
       <div class="stat display-strength-saving">
         <?php
            if($str_race_mod !=0){
              echo "+", $str_mod + $prof_bonus;
            }
            else {
              echo "+", $str_mod;
            }
          ?>
       </div>
       <div class="stat display-dexterity-saving-select">
         <?php
            if($dex_race_mod !=0){
              echo "&#8226;";
            }
          ?>
       </div>
       <div class="stat display-dexterity-saving">
         <?php
            if($dex_race_mod !=0){
              echo "+", $dex_mod + $prof_bonus;
            }
            else {
              echo "+", $dex_mod;
            }
          ?>
       </div>
       <div class="stat display-constitution-saving-select">
         <?php
            if($con_race_mod !=0){
              echo "&#8226;";
            }
          ?>
       </div>
       <div class="stat display-consitution-saving">
         <?php
            if($con_race_mod !=0){
              echo "+", $con_mod + $prof_bonus;
            }
            else {
              echo "+", $con_mod;
            }
          ?>
       </div>
       <div class="stat display-intelligence-saving-select">
         <?php
            if($int_race_mod !=0){
              echo "&#8226;";
            }
          ?>
       </div>
       <div class="stat display-intelligence-saving">
         <?php
            if($int_race_mod !=0){
              echo "+", $int_mod + $prof_bonus;
            }
            else {
              echo "+", $int_mod;
            }
          ?>
       </div>
       <div class="stat display-wisdom-saving-select">
         <?php
            if($wis_race_mod !=0){
              echo "&#8226;";
            }
          ?>
       </div>
       <div class="stat display-wisdom-saving">
         <?php
            if($wis_race_mod !=0){
              echo "+", $wis_mod + $prof_bonus;
            }
            else {
              echo "+", $wis_mod;
            }
          ?>
       </div>
       <div class="stat display-charisma-saving-select">
         <?php
            if($chr_race_mod !=0){
              echo "&#8226;";
            }
          ?>
       </div>
       <div class="stat display-charisma-saving">
         <?php
            if($chr_race_mod !=0){
              echo "+", $chr_mod + $prof_bonus;
            }
            else {
              echo "+", $chr_mod;
            }
          ?>
       </div>

       <!--character skills-->
       <div class="stat display-acrobatics-skill">
         <?php
          if(in_array("Acrobatics", $skills)){
            echo $dex_mod + $prof_bonus;
          }
          else {
            echo $dex_mod;
          }

          ?>
       </div>
       <div class="stat display-acrobatics-skill-select">
         <?php
          if(in_array("Acrobatics", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-animal-handling-skill">
         <?php
          if(in_array("Animal Handling", $skills)){
            echo $wis_mod + $prof_bonus;
          }
          else {
            echo $wis_mod;
          }

          ?>
       </div>
       <div class="stat display-animal-handling-skill-select">
         <?php
          if(in_array("Animal Handling", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-arcana-skill">
         <?php
          if(in_array("Arcana", $skills)){
            echo $int_mod + $prof_bonus;
          }
          else {
            echo $int_mod;
          }

          ?>
       </div>
       <div class="stat display-arcana-skill-select">
         <?php
          if(in_array("Arcana", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-athletics-skill">
         <?php
          if(in_array("Athletics", $skills)){
            echo $str_mod + $prof_bonus;
          }
          else {
            echo $str_mod;
          }

          ?>
       </div>
       <div class="stat display-athletics-skill-select">
         <?php
          if(in_array("Athletics", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-deception-skill">
         <?php
          if(in_array("Deception", $skills)){
            echo $chr_mod + $prof_bonus;
          }
          else {
            echo $chr_mod;
          }

          ?>
       </div>
       <div class="stat display-deception-skill-select">
         <?php
          if(in_array("Deception", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-history-skill">
         <?php
          if(in_array("History", $skills)){
            echo $int_mod + $prof_bonus;
          }
          else {
            echo $int_mod;
          }

          ?>
       </div>
       <div class="stat display-history-skill-select">
         <?php
          if(in_array("History", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-insight-skill">
         <?php
          if(in_array("Insight", $skills)){
            echo $wis_mod + $prof_bonus;
          }
          else {
            echo $wis_mod;
          }

          ?>
       </div>
       <div class="stat display-insight-skill-select">
         <?php
          if(in_array("Insight", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-intimidation-skill">
         <?php
          if(in_array("Intimidation", $skills)){
            echo $chr_mod + $prof_bonus;
          }
          else {
            echo $chr_mod;
          }

          ?>
       </div>
       <div class="stat display-intimidation-skill-select">
         <?php
          if(in_array("Intimidation", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-personality">
         <?php echo $personality; ?>
       </div>
       <div class="stat display-ideal">
         <?php echo $ideal; ?>
       </div>
       <div class="stat display-bond">
         <?php echo $bond ;?>
       </div>
       <div class="stat display-flaw">
         <?php echo $flaw ;?>
       </div>

       <!--character etc-->
       <div class="stat display-armor-class">
         <?php echo $armor_class; ?>
       </div>

       <div class="stat display-hit-points">
         <?php echo $hit_dice + $con_mod; ?>
       </div>
       <div class="stat display-hit-dice">
         <?php  echo "1d", $hit_dice;?>
       </div>
       <div class="stat display-speed">
         <?php echo $speed; ?>
       </div>
       <div class="stat display-initiative">
         <?php echo "+", $dex_mod; ?>
       </div>

       <!--character attacks & spellcasting-->
       <div class="stat display-weapon-1">
         <?php
         if(!empty($char_weapons)){
           echo array_pop($char_weapons);
         }
         ?>
       </div>
       <div class="stat display-weapon-2">
         <?php
         if(!empty($char_weapons)){
           echo array_pop($char_weapons);
         }
         ?>
       </div>
       <div class="stat display-weapon-3">
         <?php
         if(!empty($char_weapons)){
           echo array_pop($char_weapons);
         }
         ?>
       </div>

       <!--character equipment-->
       <div class="stat display-equipment-name">
         <?php foreach ($items as $key => $value) {
           echo $value;
           echo "<br>";
         } ?>
       </div>


       <!--character proficiencies and languages-->
       <div class="stat display-proficiencies-and-languages">
         <?php foreach ($prof as $key => $value) {
            echo $value;
            echo "<br>";
         } ?>
       </div>

       <!--character features and traits-->
       <div class="stat display-features-and-traits">
         <?php foreach ($trait as $key => $value) {
            echo $value;
            echo "<br>";
         } ?>
       </div>

       <!--character spells-->
       <div class="stat display-spell-name">
         Spell Name
       </div>

     </div>
   </div>
 </div>

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
