<?php include "templates/header.php"; ?>
<?php include "templates/session.php"; ?>

<form action="" method="post">
<?php
$mysqli = NEW MySQLi('localhost','root','root','dnd');
echo "Choose among the selected items:<br>";

$at = mysqli_real_escape_string($mysqli, "Artisan's Tools");

    foreach ($_SESSION['b_e'] as $key => $value) {

      switch($value) {
        case stristr($value, "Artisan"):
          echo "Artisan's Tools:<br>";
          echo "<select name='artisan'>";
          $resultSet = $mysqli->query("SELECT * from tool_library WHERE type = '$at'");
          while($rows = $resultSet->fetch_assoc()){
            $name = $rows['name'];
            echo "<option value='$name'>$name</option>";
          }
          echo "</select><br>";
          break;

        case stristr($value, 'Musical Instrument'):
          echo "Musical Instrument:<br>";
          echo "<select name='musical'>";
          $resultSet = $mysqli->query("SELECT * from tool_library WHERE type = 'Musical Instrument'");
          while($rows = $resultSet->fetch_assoc()){
            $name = $rows['name'];
            echo "<option value='$name'>$name</option>";
          }
          echo "</select><br>";
          break;

      }
    }



foreach ($_SESSION['c_e'] as $key => $value) {

  switch($value) {
    case $value === "Simple Weapon":
      echo "Simple Weapon<br>";
      echo "<select name='simple'>";
      $resultSet = $mysqli->query("SELECT * from weapons WHERE type1 = 'Simple'");
      while($rows = $resultSet->fetch_assoc()){
        $name = $rows['weapon_name'];
        echo "<option value='$name'>$name</option>";
      }
      echo "</select><br>";
      break;

    case $value === "Simple Melee Weapon":
      echo "Simple Melee Weapon<br>";
      echo "<select name='simple_melee'>";
      $resultSet = $mysqli->query("SELECT * from weapons WHERE type1 = 'Simple' AND type2 = 'Melee'");
      while($rows = $resultSet->fetch_assoc()){
        $name = $rows['weapon_name'];
        echo "<option value='$name'>$name</option>";
      }
      echo "</select><br>";
      break;

    case $value === "Martial Weapon":
      echo "Martial Weapon:<br>";
      echo "<select name='martial'>";
      $resultSet = $mysqli->query("SELECT * from weapons WHERE type1 = 'Martial'");
      while($rows = $resultSet->fetch_assoc()){
        $name = $rows['weapon_name'];
        echo "<option value='$name'>$name</option>";
      }
      echo "</select><br>";
      break;

    case $value === "Martial Melee Weapon":
      echo "Martial Melee Weapon:<br>";
      echo "<select name='martial_melee'>";
      $resultSet = $mysqli->query("SELECT * from weapons WHERE type1 = 'Martial' AND type2 = 'Melee'");
      while($rows = $resultSet->fetch_assoc()){
        $name = $rows['weapon_name'];
        echo "<option value='$name'>$name</option>";
      }
      echo "</select><br>";
      break;

    case stristr($value, "Musical Instrument"):
      echo "Musical Instrument:<br>";
      echo "<select name='musical_1'>";
      $resultSet = $mysqli->query("SELECT * from tool_library WHERE type = 'Musical Instrument'");
      while($rows = $resultSet->fetch_assoc()){
        $name = $rows['name'];
        echo "<option value='$name'>$name</option>";
      }
      echo "</select><br>";
      break;

  }
}

 ?>
 <input type="submit" value="Submit" name="special_sub" id="special_sub">
</form>

<?php

if(isset($_POST['special_sub'])) {
  //assign array variables

  if(isset($_SESSION['b_e'])){
    $b_e_array = array();
    $b_e_array = $_SESSION['b_e'];
  }
  $c_e_array = array();
  $c_e_array = $_SESSION['c_e'];


  //replace placeholder with selected item
  if(isset($_POST['artisan'])) {
    $b_e_array = array_replace($b_e_array, array_fill_keys(array_keys($b_e_array, $at), $_POST['artisan']));
  }

  if(isset($_POST['musical'])) {
    $b_e_array = array_replace($b_e_array, array_fill_keys(array_keys($b_e_array, "Musical Instrument"), $_POST['musical']));
  }

  if(isset($_POST['simple'])) {
    $c_e_array = array_replace($c_e_array, array_fill_keys(array_keys($c_e_array, "Simple Weapon"), $_POST['simple']));
  }

  if(isset($_POST['simple_melee'])) {
    $c_e_array = array_replace($c_e_array, array_fill_keys(array_keys($c_e_array, "Simple Melee Weapon"), $_POST['simple_melee']));
  }

  if(isset($_POST['martial'])) {
    $c_e_array = array_replace($c_e_array, array_fill_keys(array_keys($c_e_array, "Martial Weapon"), $_POST['martial']));
  }

  if(isset($_POST['martial_melee'])) {
    $c_e_array = array_replace($c_e_array, array_fill_keys(array_keys($c_e_array, "Martial Melee Weapon"), $_POST['martial_melee']));
  }

  if(isset($_POST['musical_1'])) {
    $c_e_array = array_replace($c_e_array, array_fill_keys(array_keys($c_e_array, "Musical Instrument"), $_POST['musical_1']));
  }

//add to database
foreach ($b_e_array as $key => $value) {
  $mysqli->query("INSERT INTO character_equipment(cID, equipment_name)
                    VALUES('$_SESSION[cid]', '$value')");
}


foreach ($c_e_array as $key => $value) {
  $mysqli->query("INSERT INTO character_equipment(cID, equipment_name)
                  VALUES('$_SESSION[cid]', '$value')");
}

header("Location: display.php");

}

 ?>

<?php include "templates/footer.php"; ?>
