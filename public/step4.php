<?php include "templates/header.php"; ?>

<?php
  session_start();
  $con=mysqli_connect("localhost","root","root","dnd");
  // Check connection
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if(isset($_POST['characteristic_submit'])){
    // Perform query
    $sql = "INSERT INTO characteristics(cID, personality, ideal, bond, flaw)
    VALUES('$_SESSION[cid]', '$_POST[personalities]', '$_POST[ideals]', '$_POST[bonds]', '$_POST[flaws]')";

    mysqli_query($con, $sql);
    header('Location: step5.php');
  }
 ?>

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

     ?>

     <?php
      $mysqli = NEW MySQLi('localhost','root','root','dnd');
      $resultSet = $mysqli->query("SELECT background_personality FROM background_personality WHERE background_name = '$background'")
      ?>

    Personality Trait:<select name="personalities">
      <?php
        while($rows = $resultSet->fetch_assoc())
        {
          $background_personality = $rows['background_personality'];
          echo "<option value='$background_personality'>$background_personality</option>";
        }
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
            $background_ideal = $rows['background_ideal'];
            echo "<option value='$background_ideal'>$background_ideal</option>";
          }
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
            $background_flaw = $rows['background_flaw'];
            echo "<option value='$background_flaw'>$background_flaw</option>";
          }
         ?>
      </select>
  </div>

  <div class = "grid one-whole text-center" style="font-family: 'Bookmania'">

    <?php
      $mysqli = NEW MySQLi('localhost','root','root','dnd');
      $resultSet = $mysqli->query("SELECT background_flaw FROM background_flaws WHERE background_name = '$background'")
     ?>

    Bond:<select name="bonds">
        <?php
          while($rows = $resultSet->fetch_assoc())
          {
            $background_flaw = $rows['background_flaw'];
            echo "<option value='$background_flaw'>$background_flaw</option>";
          }
         ?>
      </select>
      <input type="submit" value="Submit" name="characteristic_submit" id="characteristic_submit">
    </form>
  </div>

<?php include "templates/footer.php"; ?>
