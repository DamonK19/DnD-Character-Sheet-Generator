<!-- EXAMPLE OF USING TEMPLATED PHP FILES -->
<?php include "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>
<?php
$con = mysqli_connect("localhost","root","root","dnd");
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (isset($_POST['stat_submit'])) {
  try  {
		$sql = "INSERT INTO stats(cID, strength, dexterity, constitution, intelligence, wisdom, charisma)
		VALUES ('$_SESSION[cid]', '$_POST[strength]', '$_POST[dexterity]', '$_POST[constitution]', '$_POST[intelligence]', '$_POST[wisdom]', '$_POST[charisma]')";

		// Execution...
		mysqli_query($con, $sql);
  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }
	header('Location: step3.php');
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
								Ability Scores.
							</h2>
							<ul>
								<li><h4 class="full-width">These are the ability scores assigned to your character!</h2></li>
								<li><h4 class="full-width">Click submit on the bottom.</h4></li>
							</ul>
							<div class="message-submit">
								<input type="submit" value="Submit" name="stat_submit" id="stat_submit">
							</div>
						</div>
					</div>
				</div>
				<!-- ABILITY SCORE ROLLER -->
				<div class="grid one-half">
					<div class="grid-wrapper centered">
						<div class="grid one-third centered text-center">
							<!-- ABILITY SCORE BLOCK -->
							<div class="ability-score-block strength">
								<input type="text" name="strength" id="strength">
								<!-- BUTTON -->
								<div class="ability-score-button generate"></div>
								<!-- RESULT -->
								<div id="roller_1" class="ability-score"></div>
							</div>
						<!-- // ABILITY SCORE BLOCK -->
						</div>
						<div class="grid one-third centered text-center">
							<!-- ABILITY SCORE BLOCK -->
							<div class="ability-score-block charisma">
								<input type="text" name="charisma" id="charisma">
								<!-- RESULT -->
								<div id="roller_2" class="ability-score"></div>
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
								<div id="roller_3" class="ability-score"></div>
								<!-- BUTTON -->
								<div class="ability-score-button generate"></div>
							</div>
						<!-- // ABILITY SCORE BLOCK -->
						</div>
						<div class="grid one-third centered text-center">
							<!-- ABILITY SCORE BLOCK -->
							<div class="ability-score-block intelligence">
								<input type="text" name="intelligence" id="intelligence">
								<!-- RESULT -->
								<div id="roller_4" class="ability-score"></div>
								<!-- BUTTON -->
								<div class="ability-score-button generate"></div>
							</div>
						<!-- // ABILITY SCORE BLOCK -->
						</div>
						<div class="grid one-third centered text-center">
							<!-- ABILITY SCORE BLOCK -->
							<div class="ability-score-block wisdom">
								<input type="text" name="wisdom" id="wisdom">
								<!-- RESULT -->
								<div id="roller_5" class="ability-score"></div>
								<!-- BUTTON -->
								<div class="ability-score-button generate"></div>
							</div>
						<!-- // ABILITY SCORE BLOCK -->
						</div>
						<div class="grid one-third centered text-center">
							<!-- ABILITY SCORE BLOCK -->
							<div class="ability-score-block constitution">
								<input type="text" name="constitution" id="constitution">
								<!-- BUTTON -->
								<div class="ability-score-button generate"></div>
								<!-- RESULT -->
								<div id="roller_6" class="ability-score"></div>
							</div>
						<!-- // ABILITY SCORE BLOCK -->
						</div>
					</div>
					<!-- SUBMIT BUTTON -->
					<div class="grid-wrapper one-whole">
						<div class="grid one-whole text-center" style="font-family: 'Bookmainia'">
						</div>
					</div>
					<!-- // SUBMIT BUTTON -->
				</div>
			</div>
		</div>
	</div>
</form>





<!-- EXAMPLE OF USING TEMPLATED PHP FILES -->
<?php include "templates/footer.php"; ?>
