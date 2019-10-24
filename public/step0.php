<?php include "templates/header.php"; ?>

<div class="grid-wrapper one-whole">
  <div class ="grid one-whole text-center" style="font-family: 'Bookmania'">
    Start by Entering in your Character Name, Player name and choose your Class, Background, Allignment and how you would like to choose your stats.
  </div>
</div>

<div class="grid-wrapper one-whole centered">
  <form>
    Character Name: <input type="text" name="fname"><br>
    Player Name: <input type="text" name="lname"><br>

    <?php
    $mysqli = NEW MySQLi('localhost','root','root','test');
    $resultSet = $mysqli->query("SELECT race_name FROM race")
     ?>

    Race: <select name="races">
      <?php
      while($rows = $resultSet->fetch_assoc())
      {
        $race_name = $rows['race_name'];
        echo "<option value='$race_name'>$race_name</option>";
      }
       ?>
    </select>
  </br>

  <?php
  $mysqli = NEW MySQLi('localhost','root','root','test');
  $resultSet = $mysqli->query("SELECT class_name FROM class_name")
   ?>
    Class: <select name="classes">
      <?php
      while($rows = $resultSet->fetch_assoc())
      {
        $class_name = $rows['class_name'];
        echo "<option value='$class_name'>$class_name</option>";
      }
       ?>
    </select>
  </br>
  <?php
  $mysqli = NEW MySQLi('localhost','root','root','test');
  $resultSet = $mysqli->query("SELECT background_name FROM background")
   ?>
    Background: <select name="backgrounds">
      <?php
      while($rows = $resultSet->fetch_assoc())
      {
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
  <input type="submit" value="Submit">

  </form>
</div>

<?php include "templates/navigator.php"; ?>
<?php include "templates/footer.php"; ?>
