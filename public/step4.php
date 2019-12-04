<?php include "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>
<?php include "templates/session.php"; ?>

<div class="grid-wrapper one-whole">
  <div class ="grid one-whole text-center" style="font-family: 'Bookmania'">
    Time for you to select character characteristics!
  </div>
</div>

<div class="gridwrapper one-whole">
  <div class = "grid one-whole text-center" style="font-family: 'Bookmania'">

    <form action="" method="post">
    <?php
      $mysqli = NEW MySQLi('localhost','root','root','dnd');
      $resultSet = $mysqli->query("SELECT * FROM characters WHERE cID = '$_SESSION[cid]' AND pID = '$_SESSION[id]'");
      $row = $resultSet->fetch_assoc();
      $background = $row["background"];
      $i = 1;

     ?>

     <?php
      $mysqli = NEW MySQLi('localhost','root','root','dnd');
      $resultSet = $mysqli->query("SELECT background_personality FROM background_personality WHERE background_name = '$background'");

      ?>

    Personality Trait:<select name="personalities">
      <?php

        while($rows = $resultSet->fetch_assoc())
        {
          $background_personality[$i] = $rows['background_personality'];
          echo "<option value='$i'>$background_personality[$i]</option>";
          $i++;
        }
        $i = 1;
       ?>
    </select>
  </div>

  <div class = "grid one-whole text-center" style="font-family: 'Bookmania'">

    <?php
      $mysqli = NEW MySQLi('localhost','root','root','dnd');
      $resultSet = $mysqli->query("SELECT background_ideal FROM background_ideals WHERE background_name = '$background'")
     ?>

    Ideal:<select name="ideals">
        <?php
          while($rows = $resultSet->fetch_assoc())
          {

            $background_ideal[$i] = $rows['background_ideal'];
            echo "<option value='$i'>$background_ideal[$i]</option>";
            $i++;
          }
          $i = 1;
         ?>
      </select>
  </div>

  <div class = "grid one-whole text-center" style="font-family: 'Bookmania'">

    <?php
      $mysqli = NEW MySQLi('localhost','root','root','dnd');
      $resultSet = $mysqli->query("SELECT background_flaw FROM background_flaws WHERE background_name = '$background'")
     ?>

    Flaw:<select name="flaws">
        <?php
          while($rows = $resultSet->fetch_assoc())
          {
            $background_flaw[$i] = $rows['background_flaw'];
            echo "<option value='$i'>$background_flaw[$i]</option>";
            $i++;
          }
          $i = 1;
         ?>
      </select>
  </div>

  <div class = "grid one-whole text-center" style="font-family: 'Bookmania'">

    <?php
      $mysqli = NEW MySQLi('localhost','root','root','dnd');
      $resultSet = $mysqli->query("SELECT background_bond FROM background_bonds WHERE background_name = '$background'")
     ?>

    Bond:<select name="bonds">
        <?php
          while($rows = $resultSet->fetch_assoc())
          {
            $background_bond[$i] = $rows['background_bond'];
            echo "<option value='$i'>$background_bond[$i]</option>";
            $i++;
          }
         ?>
      </select>
      <input type="submit" value="Submit" name="characteristic_submit" id="characteristic_submit">
    </form>

  </div>


  <?php

    $con=mysqli_connect("localhost","root","root","dnd");
    // Check connection
    if (mysqli_connect_errno()){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if(isset($_POST['characteristic_submit'])){
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

<?php include "templates/footer.php"; ?>
