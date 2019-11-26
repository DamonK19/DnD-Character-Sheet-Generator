<?php include "templates/header.php"; ?>
<?php include "templates/session.php"; ?>
<?php

  
  $con=mysqli_connect("localhost","root","root","dnd");
  // Check connection
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if(isset($_POST['char_submit'])){
  // Perform query
    $sql = "INSERT INTO characters(pID, character_name, player_name, race_name, background, hit_points, class_name, allignment)
    VALUES('$_SESSION[id]', '$_POST[cname]', '$_POST[pname]', '$_POST[race]', '$_POST[backgrounds]', 1, '$_POST[class]', '$_POST[goodVsEvil] $_POST[lawVsChaos]')";

    mysqli_query($con, $sql);

    $last_id = mysqli_insert_id($con);

    $_SESSION['cid'] = $last_id;
    header('Location: step1.php');
  }

?>


<div class="grid-wrapper one-whole">
  <div class ="grid one-whole text-center" style="font-family: 'Bookmania'">
    Start by Entering in your Character Name, Player name and choose your Class,
     Background, Allignment and how you would like to choose your stats.
  </div>
</div>

<div class="grid-wrapper one-whole centered">
  <form action="" method="post">
    Character Name: <input type="text" name="cname"><br>
    Player Name: <input type="text" name="pname"><br>

    <?php
      $mysqli = NEW MySQLi('localhost','root','root','dnd');
      $resultSet = $mysqli->query("SELECT race_name FROM race")
     ?>

    Race(Choose one): <br>
      <?php
        while($rows = $resultSet->fetch_assoc())
        {
          $race_name = $rows['race_name'];
          echo "<input type='radio' name='race' id='race' value='$race_name'>$race_name</option><br>";
        }
       ?>
    </select>
  </br>

  <?php
    $mysqli = NEW MySQLi('localhost','root','root','dnd');
    $resultSet = $mysqli->query("SELECT class_name FROM class_name")
   ?>
    Class(Choose one):<br>
      <?php
        while($rows = $resultSet->fetch_assoc()){
          $class_name = $rows['class_name'];
          echo "<input type='radio' name='class' id='race' value='$class_name'>$class_name</option><br>";
        }
       ?>
    </select>
  </br>
  <?php
    $mysqli = NEW MySQLi('localhost','root','root','dnd');
    $resultSet = $mysqli->query("SELECT background_name FROM background");
   ?>
    Background: <select name="backgrounds">
      <?php
        while($rows = $resultSet->fetch_assoc()){
          $background_name = $rows['background_name'];
          echo "<option value='$background_name'>$background_name</option>";
        }
       ?>
    </select>
  </br>
    Allignment: <select name ="goodVsEvil">
      <option value = "good">Good</option>
      <option value = "neutral">Neutral</option>
      <option value = "evil">Evil</option>
    </select>
    <select name = "lawVsChaos">
      <option value = "lawful">Lawful</option>
      <option value = "neutral">Neutral</option>
      <option value = "chaotic">Chaotic</option>
    </select>
  </br>
    Attribute Selection Method: <select name="attributeSelect">
      <option value = "roll">Roll for attributes</option>
      <option value = "array">Use Standard Array</option>
    </select>
  <input type="submit" value="Submit" name="char_submit" id="char_submit">

  </form>
</div>


<?php include "templates/footer.php"; ?>
