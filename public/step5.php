<?php require "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>
<?php include "templates/session.php"; ?>
<div class="step-background">
  <div class="grid-lap one-half ">
    <?php

    $con = mysqli_connect("localhost", "root", "root", "dnd");
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if (isset($_POST['spell_submit'])) {
      foreach ($_POST['spell_select'] as $selected) {
        // Perform query
        $sql = "INSERT INTO spells (spell_name, cID) Values ('$selected','$_SESSION[cid]')";
        // $sql1 = "INSERT INTO spells ( spell_name, spell_level, spell_description, cID, equipped) VALUES ( test1 , 0 , test1 , 1 , 0 )";
        mysqli_query($con, $sql);
        header('Location: step6.php');
      }
    }
    ?>

    <?php

    $mysqli = new MySQLi('localhost', 'root', 'root', 'dnd');
    $classSet = $mysqli->query("SELECT class_name FROM characters WHERE cID = '$_SESSION[cid]'");
    $row3 = $classSet->fetch_assoc();
    $class = $row3['class_name'];
    $classSet2 = $mysqli->query("SELECT cantrips FROM class_name WHERE class_name = '$class'");
    $row4 = $classSet2->fetch_assoc();
    $classCantrip = $row4['cantrips'];
    $resultSet = $mysqli->query("SELECT spell_name FROM spell_library WHERE class_name = '$class'");
    $resultSet1 = $mysqli->query("SELECT description FROM spell_library WHERE class_name = '$class'");
    if ($classCantrip == 0) {
      header('Location: step6.php');
    }
    ?>

    <form action="" method="post">
      <label for="spell_select"> Select Spells</label>


      <?php
      echo "<br>A $class can select $classCantrip cantrips";
      $spell_description = array();
      $spell_name = array();

      while ($rows1 = $resultSet1->fetch_assoc()) {
        array_push($spell_description, $rows1['description']);
      }
      while ($rows = $resultSet->fetch_assoc()) {
        array_push($spell_name, $rows['spell_name']);
      }

      $array_length = count($spell_name);
      for ($i = 0; $i < $array_length; $i++) {
        echo  "<br><input type= 'checkbox' name='spell_select[]' value='$spell_name[$i]'  />", "<br>", $spell_name[$i], "</br>";
        echo  $spell_description[$i], "<br></br>";
      }
      ?>

      <br></br>

      <input type="submit" value="Submit" name="spell_submit" id="spell_submit">

    </form>
  </div>
  <div class="grid-lap one-third">
    <div class="grid-lap one-third">
      <div class="grid-lap one-third">
      </div>
    </div>
  </div>
</div>
</div>

</div>
<?php require "templates/footer.php"; ?>