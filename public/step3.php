<?php include "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>

<?php
	if(isset($_POST['skill_submit'])) {
		$skill_name = $_GET['skill'];
		foreach ($skill_name as $name) {
			$mysqli->query("INSERT INTO skills(skill_name, cID) VALUES('$name', $_SESSION[cid])");
		}
		header('Location: step4.php');
	}
 ?>

<form action='' method='post'>
 <div class="step-background">
	 <div class="site-wrapper full-height">
		 <!-- MESSAGE -->
		 <div class="grid-wrapper grid-wrapper--full centered full-height">
			 <div class="grid one-half message-scroll">
				 <div class="grid-wrapper align--center message-scroll-content">
					 <div class="grid three-fifths push--one-fifth message">
						 <h2 class="cursive">
							 Background Skills:
						 </h2>
						 <ul>
							 <?php
							 $mysqli = NEW mysqli('localhost','root','root', 'dnd');
							 //get background name of character
							 $resultSet = $mysqli->query("SELECT background FROM characters WHERE cID = '$_SESSION[cid]'");
							 $row = $resultSet->fetch_assoc();
							 $background = $row['background'];

							 //grab background skill1
							 $resultSet = $mysqli->query("SELECT skill_proficiency_1 FROM background WHERE background_name = '$background'");
							 while ($row = $resultSet->fetch_assoc()) {
								 $skill1 = $row['skill_proficiency_1'];
							 }
							 //grab background skill2
							 $resultSet = $mysqli->query("SELECT skill_proficiency_2 FROM background WHERE background_name = '$background'");
							 while ($row = $resultSet->fetch_assoc()) {
								 $skill2 = $row['skill_proficiency_2'];
							 }

							 echo "<li><h4 class='cursive'>$skill1</h4></li>";
							 echo "<li><h4 class='cursive'>$skill2</h4></li>";
							  ?>
						 </ul>
						 <h2 class="cursive">
							 Class Skills:
						 </h2>
						 <ul>
						 	<li>choose
								<?php
								$mysqli = NEW mysqli('localhost','root','root', 'dnd');
								//get class name
								$result = $mysqli->query("SELECT class_name FROM characters WHERE cID = '$_SESSION[cid]'");
								while($row = $result->fetch_assoc()) {
									$class = $row['class_name'];
								}
								//grab class skill quantity
								$resultSet = $mysqli->query("SELECT skill_quantity FROM class_name WHERE class_name = '$class'");
								while($row = $resultSet->fetch_assoc())
								{
									$quantity = $row['skill_quantity'];
								}
								echo $quantity
								 ?>
								 options from the right</li>
						 </ul>
						 <div class="message-submit">
							 <input type='submit' value='Submit' name='skill_submit' id='skill_submit'>
						 </div>
					 </div>
				 </div>
			 </div>
			 <!-- MESSAGE -->
			 <div class="grid-wrapper grid-wrapper--full centered full-height">
				 <div class="grid one-half message-scroll">
					 <div class="grid-wrapper align--center message-scroll-content">
						 <div class="grid three-fifths push--one-fifth message">
							 <h2 class="cursive">
								 Class Skills
							 </h2>
							 <ul>
								 <?php
									 $mysqli = NEW mysqli('localhost','root','root', 'dnd');
									 $resultSet = $mysqli->query("SELECT * from class_skills WHERE class_name = '$class'");
									 while($rows = $resultSet->fetch_assoc())
									 {
										 $class_skill = $rows['class_skill_name'];
										 echo "<li><h4 class='cursive'>$class_skill<input type='checkbox' name='skill[]' id='skill' value='$class_skill'></h4></li>";
									 }
								  ?>
							 </ul>
						 </div>
					 </div>
				 </div>
			 </div>
		 </div>
	 </div>
 </div>
</form>

<?php include "templates/footer.php"; ?>
