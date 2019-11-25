<?php include "templates/header.php"; ?>
<?php include "templates/session.php"; ?>

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

	echo"<form action='' method='post'>";
	echo "Background skills:<br>";
	echo "<input type='hidden', name='skill1', checked>$skill1</option><br>";
	echo "<input type='hidden', name='skill2', checked>$skill2</option><br><br>";
	echo "Class skills:(choose only ";
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
	echo $quantity, " skills or KABOOM!)<br>";

	//TODO: add conditional to exclude background skills
	$resultSet = $mysqli->query("SELECT * from class_skills WHERE class_name = '$class'");

	while($rows = $resultSet->fetch_assoc())
	{
		$class_skill = $rows['class_skill_name'];
		echo "<input type='checkbox' name='skill[]' id='skill' value='$class_skill'>$class_skill</option><br>";
	}
	echo "<input type='submit' value='Submit' name='skill_submit' id='skill_submit'><br>";
	echo "</form>";
?>

<?php
	if(isset($_POST['skill_submit'])) {
		$skill_name = $_GET['skill'];
		foreach ($skill_name as $name) {
			$mysqli->query("INSERT INTO skills(skill_name, cID) VALUES('$name', $_SESSION[cid])");
		}

		header('Location: step4.php');

	}
 ?>


<?php include "templates/footer.php"; ?>
