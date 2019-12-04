<?php require "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>
<?php
session_start();

    $mysqli = NEW MySQLi('localhost','root','root','dnd');
    $resultSet = $mysqli->query("SELECT character_name FROM characters WHERE pid =".$_SESSION['id']);
  
    $character_name = array();
      
    while($rows = $resultSet->fetch_assoc())
    {
     array_push($character_name,$rows['character_name']);
    }
    $array_length = count($character_name);
      for($i = 0; $i<$array_length; $i++){
        echo $character_name[$i], "<br>";
        
      }
?>





























<?php include "templates/footer.php"; ?>