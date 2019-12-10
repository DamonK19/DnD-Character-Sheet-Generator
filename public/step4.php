<?php include "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>

<?php

$con = mysqli_connect("localhost", "root", "root", "dnd");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_POST['characteristic_submit'])) {
  // Perform query
  $p = mysqli_real_escape_string($mysqli, $background_personality[$_POST['personalities']]);
  $i = mysqli_real_escape_string($mysqli, $background_ideal[$_POST['ideals']]);
  $b = mysqli_real_escape_string($mysqli, $background_bond[$_POST['bonds']]);
  $f = mysqli_real_escape_string($mysqli, $background_flaw[$_POST['flaws']]);

  $sql = "INSERT INTO characteristics(cID, personality, ideal, bond, flaw)
  VALUES('$_SESSION[cid]', '$p', '$i', '$b', '$f')";

  mysqli_query($con, $sql);

  header('Location: step5.php');
}

?>
<form action="" method="post">

<?php
$mysqli = new MySQLi('localhost', 'root', 'root', 'dnd');
$resultSet = $mysqli->query("SELECT * FROM characters WHERE cID = '$_SESSION[cid]' AND pID = '$_SESSION[id]'");
$row = $resultSet->fetch_assoc();
$background = $row["background"];
$i = 1;
?>

<div class="step-background">
  <div class="site-wrapper full-height">
    <!-- MESSAGE -->
    <div class="grid-wrapper grid-wrapper--full centered full-height">
      <div class="grid one-half message-scroll">
        <div class="grid-wrapper align--center message-scroll-content">
          <div class="grid three-fifths push--one-fifth message">
            <h2 class="cursive">
              Personality:
            </h2>
            <ul>
              <li>
                <select class="" name="personalities">
                  <?php
                  $mysqli = new MySQLi('localhost', 'root', 'root', 'dnd');
                  $resultSet = $mysqli->query("SELECT background_personality FROM background_personality WHERE background_name = '$background'");
                  while ($rows = $resultSet->fetch_assoc()) {
                    $background_personality[$i] = $rows['background_personality'];
                    echo "<option value='$i'>$background_personality[$i]</option>";
                    $i++;
                  }
                  $i = 1;
                  ?>
                </select>
              </li>
            </ul>
            <h2 class="cursive">
              Ideal:
            </h2>
            <ul>
              <li>
                <select class="" name="ideals">
                  <?php
                  $mysqli = new MySQLi('localhost', 'root', 'root', 'dnd');
                  $resultSet = $mysqli->query("SELECT background_ideal FROM background_ideals WHERE background_name = '$background'");
                  while ($rows = $resultSet->fetch_assoc()) {
                    $background_ideal[$i] = $rows['background_ideal'];
                    echo "<option value='$i'>$background_ideal[$i]</option>";
                    $i++;
                  }
                  $i = 1;
                  ?>
                </select>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- MESSAGE -->
      <div class="grid-wrapper grid-wrapper--full centered full-height">
        <div class="grid one-half message-scroll">
          <div class="grid-wrapper align--center message-scroll-content">
            <div class="grid three-fifths push--one-fifth message">
              <h2 class="cursive">
                Flaw:
              </h2>
              <ul>
                <li>
                  <select class="" name="flaws">
                    <?php
                    $mysqli = new MySQLi('localhost', 'root', 'root', 'dnd');
                    $resultSet = $mysqli->query("SELECT background_flaw FROM background_flaws WHERE background_name = '$background'");
                    while ($rows = $resultSet->fetch_assoc()) {
                      $background_flaw[$i] = $rows['background_flaw'];
                      echo "<option value='$i'>$background_flaw[$i]</option>";
                      $i++;
                    }
                    $i = 1;
                    ?>
                  </select>
                </li>
              </ul>
              <h2 class="cursive">
                Bond:
              </h2>
              <ul>
                <li>
                  <select class="" name="bonds">
                    <?php
                    $mysqli = new MySQLi('localhost', 'root', 'root', 'dnd');
                    $resultSet = $mysqli->query("SELECT background_bond FROM background_bonds WHERE background_name = '$background'");
                    while ($rows = $resultSet->fetch_assoc()) {
                      $background_bond[$i] = $rows['background_bond'];
                      echo "<option value='$i'>$background_bond[$i]</option>";
                      $i++;
                    }
                    ?>
                  </select>
                </li>
              </ul>
              <div class="message-submit">
                <input type="submit" value="Submit" name="characteristic_submit" id="characteristic_submit">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
  <?php include "templates/footer.php"; ?>
