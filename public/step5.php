<?php require "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>

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
<div class="step-background">
  <div class="site-wrapper full-height">
    <!-- MESSAGE -->
    <div class="grid-wrapper grid-wrapper--full centered full-height">
      <div class="grid one-half message-scroll">
        <div class="grid-wrapper align--center message-scroll-content">
          <div class="grid three-fifths push--one-fifth message">
            <h2 class="cursive">
              Select Spells:
            </h2>
            <ul>
              <li><h4 class='cursive'>
                <?php echo "A ", $class, " can select ", $classCantrip, " spells from the right.";
                $spell_description = array();
                $spell_name = array();
                ?>
              </h4></li>
              <li><h4 class="cursive">Then, once finished, click below to continue.</h4></li>
            </ul>
            <div class="message-submit">
              <input type="submit" value="Submit" name="spell_submit" id="spell_submit">
            </div>
          </div>
        </div>
      </div>
      <!-- MESSAGE -->
      <div class="grid one-half message-scroll">
        <div class="grid-wrapper align--center message-scroll-content">
          <div class="grid three-fifths push--one-fifth message">
            <h2 class="cursive">
              Spell List:
            </h2>
            <ul>
              <?php
                $con = mysqli_connect("localhost", "root", "root", "dnd");
                // Check connection
                if (mysqli_connect_errno()) {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

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
                  echo  "<li>", $spell_name[$i], "<input type= 'checkbox' name='spell_select[]' value='$spell_name[$i]'  /></li>";
                  echo  $spell_description[$i];
                }
               ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>


<?php require "templates/footer.php"; ?>
