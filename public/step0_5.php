<?php include "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>

<?php
$con = mysqli_connect("localhost", "root", "root", "dnd");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (isset($_POST['char_submit'])) {
  // Perform query
  $sql = "UPDATE Characters SET background = '$_POST[backgrounds]', class_name = '$_POST[class]', allignment = '$_POST[lawVsChaos] $_POST[evilVsGood]' WHERE character_name='$_SESSION[cname]'";

  mysqli_query($con, $sql);
  header('Location: step1.php');
}
?>
<div class="step-background">
  <div class="grid-wrapper one-whole centered">
    <form action="" method="post">
    <div class="class-select">
      Class:  
      <input type='radio' name='class' id='class' value='Barbarian'>Barbarian </br>
      <input type='radio' name='class' id='class' value='Bard'>Bard </br>
      <input type='radio' name='class' id='class' value='Cleric'>Cleric </br>
      <input type='radio' name='class' id='class' value='Druid'>Druid </br>
      <input type='radio' name='class' id='class' value='Fighter'>Fighter </br>
      <input type='radio' name='class' id='class' value='Monk'>Monk </br>
      <input type='radio' name='class' id='class' value='Paladin'>Paladin </br>
      <input type='radio' name='class' id='class' value='Ranger'>Ranger </br>
      <input type='radio' name='class' id='class' value='Rogue'>Rogue </br>
      <input type='radio' name='class' id='class' value='Sorcerer'>Sorcerer </br>
      <input type='radio' name='class' id='class' value='Warlock'>Warlock </br>
      <input type='radio' name='class' id='class' value='Wizard'>Wizard </br>
      </div>
<div class="background-select">
      Background: <select name="backgrounds">
      <option value="Acolyte">Acolyte</option>
      <option value="Charlaton">Charlaton</option>
      <option value="Criminal">Criminal</option>
      <option value="Entertainer">Entertainer</option>
      <option value="Folk Hero">Folk Hero</option>
      <option value="Guild Artisan">Guild Artisan</option>
      <option value="Hermit">Hermit</option>
      <option value="Noble">Noble</option>
      <option value="Outlander">Outlander</option>
      <option value="Sage">Sage</option>
      <option value="Sailor">Sailor</option>
      <option value="Soldier">Soldier</option>
      <option value="Urchin">Urchin</option>
      </select>
  </div>
      </br>
      Allignment: <select name="goodVsEvil">
        <option value="good">Good</option>
        <option value="neutral">Neutral</option>
        <option value="evil">Evil</option>
      </select>
      <select name="lawVsChaos">
        <option value="lawful">Lawful</option>
        <option value="neutral">Neutral</option>
        <option value="chaotic">Chaotic</option>
      </select>
      </br>
      Attribute Selection Method: <select name="attributeSelect">
        <option value="roll">Roll for attributes</option>
        <option value="array">Use Standard Array</option>
      </select>
      <input type="submit" value="Submit" name="char_submit" id="char_submit">
    </form>
  </div>

 
        

<?php include "templates/footer.php"; ?>