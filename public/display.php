<?php include "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>

<?php

  $mysqli = NEW MySQLi('localhost','root','root','dnd');
  $resultSet = $mysqli->query("SELECT * FROM characters WHERE cID = '$_SESSION[cid]'");
  $row = $resultSet->fetch_assoc();
  //character attributes
  $character_name = $row['character_name'];
  $player_name = $row['player_name'];
  $race = $row['race_name'];
  $class = $row['class_name'];
  $background = $row['background'];
  $allignment = $row['allignment'];

  //stats

  $mysqli = NEW MySQLi('localhost','root','root','dnd');
  $resultSet = $mysqli->query("SELECT * FROM stats WHERE cID = '$_SESSION[cid]'");
  $row = $resultSet->fetch_assoc();

  $strength = $row['strength'];
  $str_mod = ($strength - 10)/2;
  $dexterity = $row['dexterity'];
  $dex_mod = ($dexterity - 10)/2;
  $constitution = $row['constitution'];
  $con_mod = ($constitution - 10)/2;
  $intelligence = $row['intelligence'];
  $int_mod = ($intelligence - 10)/2;
  $wisdom = $row['wisdom'];
  $wis_mod = ($wisdom - 10)/2;
  $charisma = $row['charisma'];
  $chr_mod = ($charisma - 10)/2;
  $prof_bonus = 2;

  //saving throws
  $resultSet = $mysqli->query("SELECT * FROM race_mod WHERE race_name = '$race'");
  $row = $resultSet->fetch_assoc();

  $str_race_mod = $row['race_str_mod'];
  $dex_race_mod = $row['race_dex_mod'];
  $con_race_mod = $row['race_con_mod'];
  $int_race_mod = $row['race_int_mod'];
  $wis_race_mod = $row['race_wis_mod'];
  $chr_race_mod = $row['race_chr_mod'];

  //character skills
  $resultSet = $mysqli->query("SELECT * FROM skills WHERE cID = '$_SESSION[cid]'");
  $skills = array();
  while($rows = $resultSet->fetch_assoc()){
    array_push($skills, $rows['skill_name']);
  }

  //characteristics
  $mysqli = NEW MySQLi('localhost','root','root','dnd');
  $resultSet = $mysqli->query("SELECT * FROM characteristics WHERE cID = '$_SESSION[cid]'");
  $row = $resultSet->fetch_assoc();

  $personality = $row['personality'];
  $ideal = $row['ideal'];
  $bond = $row['bond'];
  $flaw = $row['flaw'];

  //character etc. values
  //get all armor in array
  $armor = array();
  $resultSet = $mysqli->query("SELECT * FROM armor");
  while($rows = $resultSet->fetch_assoc()) {
    array_push($armor, $rows['armor_name']);
  }
  //get all character items
  $items = array();
  $resultSet = $mysqli->query("SELECT * FROM character_equipment WHERE cID = '$_SESSION[cid]'");
  while($rows = $resultSet->fetch_assoc()) {
    array_push($items, $rows['equipment_name']);
  }

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

  //get hit points
  $resultSet = $mysqli->query("SELECT * FROM class_name WHERE class_name = '$class'");
  $row = $resultSet->fetch_assoc();
  $hit_dice = $row['hit_dice'];

  //get speed
  $resultSet = $mysqli->query("SELECT * FROM race where race_name = '$race'");
  $row = $resultSet->fetch_assoc();
  $speed = $row['speed'];

  //spells

  //equipment
 ?>

 <div class="character-creation-bg">
   <div class="site-wrapper">
     <div class="character-sheet">
       <!--character attributes-->
       <div class="stat display-cname">
         <?php echo $character_name; ?>
       </div>
       <div class="stat display-pname">
         <?php echo $player_name; ?>
       </div>
       <div class="stat display-race">
         <?php echo $race; ?>
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

       <!--character stats-->
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
       <div class="stat display-investigation-skill">
         <?php
          if(in_array("Investigation", $skills)){
            echo $chr_mod + $prof_bonus;
          }
          else {
            echo $chr_mod;
          }

          ?>
       </div>
       <div class="stat display-investigation-skill-select">
         <?php
          if(in_array("Investigation", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-medicine-skill">
         <?php
          if(in_array("Medicine", $skills)){
            echo $wis_mod + $prof_bonus;
          }
          else {
            echo $wis_mod;
          }

          ?>
       </div>
       <div class="stat display-medicine-skill-select">
         <?php
          if(in_array("Medicine", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-nature-skill">
         <?php
          if(in_array("Nature", $skills)){
            echo $int_mod + $prof_bonus;
          }
          else {
            echo $int_mod;
          }

          ?>
       </div>
       <div class="stat display-nature-skill-select">
         <?php
          if(in_array("Nature", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-perception-skill">
         <?php
          if(in_array("Perception", $skills)){
            echo $wis_mod + $prof_bonus;
          }
          else {
            echo $wis_mod;
          }

          ?>
       </div>
       <div class="stat display-perception-skill-select">
         <?php
          if(in_array("Perception", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-persuassion-skill">
         <?php
          if(in_array("Persuassion", $skills)){
            echo $chr_mod + $prof_bonus;
          }
          else {
            echo $chr_mod;
          }

          ?>
       </div>
       <div class="stat display-persuassion-skill-select">
         <?php
          if(in_array("Persuassion", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-performance-skill">
         <?php
          if(in_array("Performance", $skills)){
            echo $chr_mod + $prof_bonus;
          }
          else {
            echo $chr_mod;
          }

          ?>
       </div>
       <div class="stat display-performance-skill-select">
         <?php
          if(in_array("Performance", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-religion-skill">
         <?php
          if(in_array("Religion", $skills)){
            echo $int_mod + $prof_bonus;
          }
          else {
            echo $int_mod;
          }

          ?>
       </div>
       <div class="stat display-religion-skill-select">
         <?php
          if(in_array("Religion", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-sleight-of-hand-skill">
         <?php
          if(in_array("Sleight of Hand", $skills)){
            echo $dex_mod + $prof_bonus;
          }
          else {
            echo $dex_mod;
          }

          ?>
       </div>
       <div class="stat display-sleight-of-hand-skill-select">
         <?php
          if(in_array("Sleight of Hand", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-stealth-skill">
         <?php
          if(in_array("Stealth", $skills)){
            echo $dex_mod + $prof_bonus;
          }
          else {
            echo $dex_mod;
          }

          ?>
       </div>
       <div class="stat display-stealth-skill-select">
         <?php
          if(in_array("Stealth", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-survival-skill">
         <?php
          if(in_array("Survival", $skills)){
            echo $wis_mod + $prof_bonus;
          }
          else {
            echo $wis_mod;
          }

          ?>
       </div>
       <div class="stat display-survival-skill-select">
         <?php
          if(in_array("Survival", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>

       <!--character characteristics-->
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
