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
  $str_mod = round(($strength - 10)/2, 0, PHP_ROUND_HALF_DOWN);
  $dexterity = $row['dexterity'];
  $dex_mod = round(($dexterity - 10)/2, 0, PHP_ROUND_HALF_DOWN);
  $constitution = $row['constitution'];
  $con_mod = round(($constitution - 10)/2, 0, PHP_ROUND_HALF_DOWN);
  $intelligence = $row['intelligence'];
  $int_mod = round(($intelligence - 10)/2, 0, PHP_ROUND_HALF_DOWN);
  $wisdom = $row['wisdom'];
  $wis_mod = round(($wisdom - 10)/2, 0, PHP_ROUND_HALF_DOWN);
  $charisma = $row['charisma'];
  $chr_mod = round(($charisma - 10)/2, 0, PHP_ROUND_HALF_DOWN);
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
  $resultSet = $mysqli->query("SELECT * FROM background WHERE background_name = '$background'");
  while($rows = $resultSet->fetch_assoc()){
    array_push($skills, $rows['skill_proficiency_1']);
    array_push($skills, $rows['skill_proficiency_2']);
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
  $char_weapons = array();
  foreach ($weapon as $key_w => $value_w) {
    foreach ($items as $key_i => $value_i) {
      if(strstr($value_i, $value_w)) {
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
  //get spells
  $spells = array();
  $resultSet = $mysqli->query("SELECT * FROM spells where cID = '$_SESSION[cid]'");
  while($row = $resultSet->fetch_assoc()){
    array_push($spells, $row['spell_name']);
  }
  //equipment
 ?>

 <div class="step-background">
   <div class="site-wrapper">
     <div class="character-sheet">
       <img class="sheet" src="assets/images/dnd_char_sheet.png" alt="">
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
         <?php echo $class; ?> lv 1
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
       <div class="stat display-strength-mod mod">
         <?php echo "+", $str_mod; ?>
       </div>
       <div class="stat display-dexterity">
         <?php echo $dexterity; ?>
       </div>
       <div class="stat display-dexterity-mod mod">
         <?php echo "+", $dex_mod; ?>
       </div>
       <div class="stat display-constitution">
         <?php echo $constitution; ?>
       </div>
       <div class="stat display-constitution-mod mod">
         <?php echo "+", $con_mod; ?>
       </div>
       <div class="stat display-intelligence">
         <?php echo $intelligence; ?>
       </div>
       <div class="stat display-intelligence-mod mod">
        <?php echo "+", $int_mod; ?>
       </div>
       <div class="stat display-wisdom">
         <?php echo $wisdom; ?>
       </div>
       <div class="stat display-wisdom-mod mod">
         <?php echo "+", $wis_mod; ?>
       </div>
       <div class="stat display-charisma">
         <?php echo $charisma; ?>
       </div>
       <div class="stat display-charisma-mod mod">
         <?php echo "+", $chr_mod; ?>
       </div>
       <div class="stat display-passive-wisdom">
         <?php echo 10 + $wis_mod; ?>
       </div>
       <div class="stat display-prof-bonus">
         <?php echo $prof_bonus; ?>
       </div>
       <!--character saving throws-->
       <div class="stat display-strength-saving-select throw">
         <?php
            if($str_race_mod !=0){
              echo "&#8226;";
            }
          ?>
       </div>
       <div class="stat display-strength-saving saving">
         <?php
            if($str_race_mod !=0){
              echo "+", $str_mod + $prof_bonus;
            }
            else {
              echo "+", $str_mod;
            }
          ?>
       </div>
       <div class="stat display-dexterity-saving-select throw">
         <?php
            if($dex_race_mod !=0){
              echo "&#8226;";
            }
          ?>
       </div>
       <div class="stat display-dexterity-saving saving">
         <?php
            if($dex_race_mod !=0){
              echo "+", $dex_mod + $prof_bonus;
            }
            else {
              echo "+", $dex_mod;
            }
          ?>
       </div>
       <div class="stat display-constitution-saving-select throw">
         <?php
            if($con_race_mod !=0){
              echo "&#8226;";
            }
          ?>
       </div>
       <div class="stat display-consitution-saving saving">
         <?php
            if($con_race_mod !=0){
              echo "+", $con_mod + $prof_bonus;
            }
            else {
              echo "+", $con_mod;
            }
          ?>
       </div>
       <div class="stat display-intelligence-saving-select throw">
         <?php
            if($int_race_mod !=0){
              echo "&#8226;";
            }
          ?>
       </div>
       <div class="stat display-intelligence-saving saving">
         <?php
            if($int_race_mod !=0){
              echo "+", $int_mod + $prof_bonus;
            }
            else {
              echo "+", $int_mod;
            }
          ?>
       </div>
       <div class="stat display-wisdom-saving-select throw">
         <?php
            if($wis_race_mod !=0){
              echo "&#8226;";
            }
          ?>
       </div>
       <div class="stat display-wisdom-saving saving">
         <?php
            if($wis_race_mod !=0){
              echo "+", $wis_mod + $prof_bonus;
            }
            else {
              echo "+", $wis_mod;
            }
          ?>
       </div>
       <div class="stat display-charisma-saving-select throw">
         <?php
            if($chr_race_mod !=0){
              echo "&#8226;";
            }
          ?>
       </div>
       <div class="stat display-charisma-saving saving">
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
       <div class="stat display-acrobatics-skill saving">
         <?php
          if(in_array("Acrobatics", $skills)){
            echo $dex_mod + $prof_bonus;
          }
          else {
            echo $dex_mod;
          }
          ?>
       </div>
       <div class="stat display-acrobatics-skill-select throw">
         <?php
          if(in_array("Acrobatics", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-animal-handling-skill saving">
         <?php
          if(in_array("Animal Handling", $skills)){
            echo $wis_mod + $prof_bonus;
          }
          else {
            echo $wis_mod;
          }
          ?>
       </div>
       <div class="stat display-animal-handling-skill-select throw">
         <?php
          if(in_array("Animal Handling", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-arcana-skill saving">
         <?php
          if(in_array("Arcana", $skills)){
            echo $int_mod + $prof_bonus;
          }
          else {
            echo $int_mod;
          }
          ?>
       </div>
       <div class="stat display-arcana-skill-select throw">
         <?php
          if(in_array("Arcana", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-athletics-skill saving">
         <?php
          if(in_array("Athletics", $skills)){
            echo $str_mod + $prof_bonus;
          }
          else {
            echo $str_mod;
          }
          ?>
       </div>
       <div class="stat display-athletics-skill-select throw">
         <?php
          if(in_array("Athletics", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-deception-skill saving">
         <?php
          if(in_array("Deception", $skills)){
            echo $chr_mod + $prof_bonus;
          }
          else {
            echo $chr_mod;
          }
          ?>
       </div>
       <div class="stat display-deception-skill-select throw">
         <?php
          if(in_array("Deception", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-history-skill saving">
         <?php
          if(in_array("History", $skills)){
            echo $int_mod + $prof_bonus;
          }
          else {
            echo $int_mod;
          }
          ?>
       </div>
       <div class="stat display-history-skill-select throw">
         <?php
          if(in_array("History", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-insight-skill saving">
         <?php
          if(in_array("Insight", $skills)){
            echo $wis_mod + $prof_bonus;
          }
          else {
            echo $wis_mod;
          }
          ?>
       </div>
       <div class="stat display-insight-skill-select throw">
         <?php
          if(in_array("Insight", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-intimidation-skill saving">
         <?php
          if(in_array("Intimidation", $skills)){
            echo $chr_mod + $prof_bonus;
          }
          else {
            echo $chr_mod;
          }
          ?>
       </div>
       <div class="stat display-intimidation-skill-select throw">
         <?php
          if(in_array("Intimidation", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-investigation-skill saving">
         <?php
          if(in_array("Investigation", $skills)){
            echo $chr_mod + $prof_bonus;
          }
          else {
            echo $chr_mod;
          }
          ?>
       </div>
       <div class="stat display-investigation-skill-select throw">
         <?php
          if(in_array("Investigation", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-medicine-skill saving">
         <?php
          if(in_array("Medicine", $skills)){
            echo $wis_mod + $prof_bonus;
          }
          else {
            echo $wis_mod;
          }
          ?>
       </div>
       <div class="stat display-medicine-skill-select throw">
         <?php
          if(in_array("Medicine", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-nature-skill saving">
         <?php
          if(in_array("Nature", $skills)){
            echo $int_mod + $prof_bonus;
          }
          else {
            echo $int_mod;
          }
          ?>
       </div>
       <div class="stat display-nature-skill-select throw">
         <?php
          if(in_array("Nature", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-perception-skill saving">
         <?php
          if(in_array("Perception", $skills)){
            echo $wis_mod + $prof_bonus;
          }
          else {
            echo $wis_mod;
          }
          ?>
       </div>
       <div class="stat display-perception-skill-select throw">
         <?php
          if(in_array("Perception", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-persuassion-skill saving">
         <?php
          if(in_array("Persuassion", $skills)){
            echo $chr_mod + $prof_bonus;
          }
          else {
            echo $chr_mod;
          }
          ?>
       </div>
       <div class="stat display-persuassion-skill-select throw">
         <?php
          if(in_array("Persuassion", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-performance-skill saving">
         <?php
          if(in_array("Performance", $skills)){
            echo $chr_mod + $prof_bonus;
          }
          else {
            echo $chr_mod;
          }
          ?>
       </div>
       <div class="stat display-performance-skill-select throw">
         <?php
          if(in_array("Performance", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-religion-skill saving">
         <?php
          if(in_array("Religion", $skills)){
            echo $int_mod + $prof_bonus;
          }
          else {
            echo $int_mod;
          }
          ?>
       </div>
       <div class="stat display-religion-skill-select throw">
         <?php
          if(in_array("Religion", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-sleight-of-hand-skill saving">
         <?php
          if(in_array("Sleight of Hand", $skills)){
            echo $dex_mod + $prof_bonus;
          }
          else {
            echo $dex_mod;
          }
          ?>
       </div>
       <div class="stat display-sleight-of-hand-skill-select throw">
         <?php
          if(in_array("Sleight of Hand", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-stealth-skill saving">
         <?php
          if(in_array("Stealth", $skills)){
            echo $dex_mod + $prof_bonus;
          }
          else {
            echo $dex_mod;
          }
          ?>
       </div>
       <div class="stat display-stealth-skill-select throw">
         <?php
          if(in_array("Stealth", $skills)){
            echo "&#8226;";
          }
          ?>
       </div>
       <div class="stat display-survival-skill saving">
         <?php
          if(in_array("Survival", $skills)){
            echo $wis_mod + $prof_bonus;
          }
          else {
            echo $wis_mod;
          }
          ?>
       </div>
       <div class="stat display-survival-skill-select throw">
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
           $weapon1 = array_pop($char_weapons);
           echo $weapon1;
         }
         ?>
       </div>
       <div class="stat display-weapon-2">
         <?php
         if(!empty($char_weapons)){
           $weapon2 = array_pop($char_weapons);
           echo $weapon2;
         }
         ?>
       </div>
       <div class="stat display-weapon-3">
         <?php
         if(!empty($char_weapons)){
           $weapon3 = array_pop($char_weapons);
           echo $weapon3;
         }
         ?>
       </div>
       <div class="stat display-damage-1">
         <?php

         if(isset($weapon1)){
           $resultSet = $mysqli->query("SELECT * FROM weapons WHERE weapon_name = '$weapon1'");
           while($rows = $resultSet->fetch_assoc()){
             echo $rows['damage'];
           }
         }

          ?>
       </div>

       <div class="stat display-damage-2">
         <?php

         if(isset($weapon2)){
           $resultSet = $mysqli->query("SELECT * FROM weapons WHERE weapon_name = '$weapon2'");
           while($rows = $resultSet->fetch_assoc()){
             echo $rows['damage'];
           }
         }

          ?>
       </div>

       <div class="stat display-damage-3">
         <?php

         if(isset($weapon3)){
           $resultSet = $mysqli->query("SELECT * FROM weapons WHERE weapon_name = '$weapon3'");
           while($rows = $resultSet->fetch_assoc()){
             echo $rows['damage'];
           }
         }

          ?>
       </div>

       <div class="stat display-attack-bonus-1">
         <?php
         if(isset($weapon1)){
          echo "+5";
          }
          ?>
       </div>

       <div class="stat display-attack-bonus-2">
         <?php
         if(isset($weapon2)){
          echo "+5";
          }
          ?>
       </div>

       <div class="stat display-attack-bonus-3">
         <?php
         if(isset($weapon3)){
          echo "+5";
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
         <?php foreach ($spells as $value){
           echo $value;
           echo "<br>";
         }

         ?>
       </div>

     </div>
   </div>
 </div>

 <?php include "templates/footer.php"; ?>
