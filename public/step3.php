<?php require "templates/header.php"; ?>

<?php
session_start();
$con = mysqli_connect("localhost","root","root","dnd");
// Check connection
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_POST['skill_submit'])) {
  try  {
		// Query...
		$sql = "INSERT INTO class_skill(cID,class_skill1,class_skill2,class_skill3 )
		VALUES ('$_SESSION[id]','$_POST[class_skill1]', '$_POST[class_skill2]', '$_POST[class_skill3]')";

		// Execution...
		mysqli_query($con, $sql);

  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }

	// After execution, go to step3...
	header('Location: step4.php');
}
 ?>

<div class="grid-wrapper one-whole">
  <div class="grid one-whole text-center" style="font-family: 'Bookmania'">
    <h3>Step 3: Class Skills</h3>
    <p>
      Select your character's class skills.
     
      <?php
    $mysqli = new MySQLi('localhost', 'root', 'root', 'dnd');
 
    ?>

  </div>
</div>

<div class="grid-wrapper one-whole">
<div class = "grid one-whole text-center" style="font-family: 'Bookmania'">
  <form action="" method="post">

    <?php
    $mysqli = new MySQLi('localhost', 'root', 'root', 'dnd');
    $resultSet = $mysqli->query("SELECT skill_name FROM skills");
    $character_background=$mysqli->query("SELECT background FROM characters");
    $bskill1 = $mysqli->query("SELECT skill_proficiency_1 FROM background WHERE background_name=$character_background");
    $bskill2 = $mysqli->query("SELECT skill_proficiency_2 FROM background WHERE background_name=$character_background");

    echo "<p> Your background skills are:".$bskill1.$bskill2."</p>";
    ?>
    Skill 1: <select name="class_skill1">
      <?php
      while ($rows = $resultSet->fetch_assoc()) {
        $skill1 = $rows['skill_name'];
        echo "<option value='$skill_name'>$skill_name</option>";
      }
      ?>
    </select>
    </br>
    Skill 2: <select name="class_skill2">
      <?php
      while ($rows = $resultSet->fetch_assoc()) {
        $skill3= $rows['skill_name'];
        echo "<option value='$skill_name'>$skill_name</option>";
      }
      ?>
    </select>
    </br>
    Skill 3: <select name="class_skill3">
      <?php
      while ($rows = $resultSet->fetch_assoc()) {
        $skill3 = $rows['skill_name'];
        echo "<option value='$skill_name'>$skill_name</option>";
      }
      ?>
    </select>
    </br>

    <input type="submit" value="Submit" name="skill_submit" id="skill_submit">

  </form>
</div>

<?php require "templates/footer.php"; ?>