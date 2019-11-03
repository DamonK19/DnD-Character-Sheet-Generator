<!-- EXAMPLE OF USING TEMPLATED PHP FILES -->
<?php include "templates/header.php"; ?>
<?php

session_start();

$con = mysqli_connect("localhost","root","root","test");
// Check connection
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_POST['stat_submit'])) {
  try  {
		// Query...
		$sql = "INSERT INTO stats(cID, strength, dexterity, constitution, intelligence, wisdom, charisma)
		VALUES ('1', '$_POST[strength]', '$_POST[dexterity]', '0', '$_POST[intelligence]', '$_POST[wisdom]', '$_POST[charisma]')";

		// Execution...
		mysqli_query($con, $sql);

  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }

	// After execution, go to step4...
	header('Location: step4.php');
}
?>


	<div class="grid-wrapper one-whole">
		<div class="grid one-whole text-center" style="font-family: 'Bookmainia'">
			Step 1 is about Ability Scores. By rolling 4 d6 die, removing the lowest or tied for the lowest number, and then adding up the total; you can generate your ability scores!
		</div>
	</div>

	<form method="post" action="">
		<div class="grid-wrapper one-whole centered">
			<div class="grid one-third centered text-center">
				<input type="text" name="strength" id="strength">
				<!-- ABILITY SCORE BLOCK -->
				<div class="ability-score-block strength">
					<!-- BUTTON -->
					<div class="ability-score-button generate"></div>
					<!-- RESULT -->
					<div id="roller_1" class="ability-score">Roll</div>
				</div>
			<!-- // ABILITY SCORE BLOCK -->
			</div>
			<div class="grid one-third centered text-center">
				<input type="text" name="charisma" id="charisma">
				<!-- ABILITY SCORE BLOCK -->
				<div class="ability-score-block charisma">
					<!-- RESULT -->
					<div id="roller_2" class="ability-score">Roll</div>
					<!-- BUTTON -->
					<div class="ability-score-button generate"></div>
				</div>
			<!-- // ABILITY SCORE BLOCK -->
			</div>
			<div class="grid one-third centered text-center">
				<!-- ABILITY SCORE BLOCK -->
				<div class="ability-score-block dexterity">
					<input type="text" name="dexterity" id="dexterity">
					<!-- RESULT -->
					<div id="roller_3" class="ability-score">Roll</div>
					<!-- BUTTON -->
					<div class="ability-score-button generate"></div>
				</div>
			<!-- // ABILITY SCORE BLOCK -->
			</div>
			<div class="grid one-third centered text-center">
				<input type="text" name="intelligence" id="intelligence">
				<!-- ABILITY SCORE BLOCK -->
				<div class="ability-score-block intelligence">
					<!-- RESULT -->
					<div id="roller_4" class="ability-score">Roll</div>
					<!-- BUTTON -->
					<div class="ability-score-button generate"></div>
				</div>
			<!-- // ABILITY SCORE BLOCK -->
			</div>
			<div class="grid one-third centered text-center">
				<input type="text" name="wisdom" id="wisdom">
				<!-- ABILITY SCORE BLOCK -->
				<div class="ability-score-block wisdom">
					<!-- RESULT -->
					<div id="roller_5" class="ability-score">Roll</div>
					<!-- BUTTON -->
					<div class="ability-score-button generate"></div>
				</div>
			<!-- // ABILITY SCORE BLOCK -->
			</div>
		</div>
		<!-- SUBMIT BUTTON -->
		<div class="grid-wrapper one-whole">
			<div class="grid one-whole text-center" style="font-family: 'Bookmainia'">
				<input type="submit" value="Submit" name="stat_submit" id="stat_submit">
			</div>
		</div>
		<!-- // SUBMIT BUTTON -->
	</form>

<!-- EXAMPLE OF USING TEMPLATED PHP FILES -->
<?php include "templates/footer.php"; ?>
