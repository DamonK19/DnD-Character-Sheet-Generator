<?php require "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>

<form action="" method="post">
<?php
$con = NEW MySQLi("localhost","root","root","dnd");
// Check connection
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//background equipment Selection
//query for background
$mysqli = NEW MySQLi('localhost','root','root','dnd');
$resultSet = $mysqli->query("SELECT * FROM characters WHERE cID = '$_SESSION[cid]' AND pID = '$_SESSION[id]'");
$row = $resultSet->fetch_assoc();
$background = $row["background"];

//query for background items
$resultSet = $mysqli->query("SELECT * FROM background_equipment WHERE background_name = '$background'");
?>
<div class="step-background">
  <div class="site-wrapper full-height">
    <!-- MESSAGE -->
    <div class="grid-wrapper grid-wrapper--full centered full-height">
      <div class="grid one-half message-scroll">
        <div class="grid-wrapper align--center message-scroll-content">
          <div class="grid three-fifths push--one-fifth message">
            <h2 class="cursive">
							Background&nbsp;Equipment:
            </h2>
						<ul>
							<?php
								$con = NEW MySQLi("localhost","root","root","dnd");
								// Check connection
								if (mysqli_connect_errno()){
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}

								$b_array = array();

								while($rows = $resultSet->fetch_assoc()){
									if(is_null($rows['background_equipment_2']) && is_null($rows['background_equipment_3']) && is_null($rows['background_equipment_4'])){
										array_push($b_array, $rows['background_equipment_1']);
										echo "<li><h4 class='cursive'>,", $rows['background_equipment_1'], "</li></h4>";
									}
									else {
										echo "<li><Select name='background_equipment[]'>";
										echo "<option value='$rows[background_equipment_1]'>$rows[background_equipment_1]</option>";
										echo "<option value='$rows[background_equipment_2]'>$rows[background_equipment_2]</option>";
										if($rows['background_equipment_3'] !== NULL){
											echo "<option value='$rows[background_equipment_3]'>$rows[background_equipment_3]</option>";
										}
										if($rows['background_equipment_4'] !== NULL){
											echo "<option value='$rows[background_equipment_4]'>$rows[background_equipment_4]</option>";
										}
										echo "</select></li>";
									}
								}
							 ?>
						</ul>
          </div>
        </div>
      </div>
      <!-- MESSAGE -->
      <div class="grid one-half message-scroll">
        <div class="grid-wrapper align--center message-scroll-content">
          <div class="grid three-fifths push--one-fifth message">
            <h2 class="cursive">
							Class Equipment:
            </h2>
						<ul>
							<?php
								$con = NEW MySQLi("localhost","root","root","dnd");
								// Check connection
								if (mysqli_connect_errno()){
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}

								$resultSet = $mysqli->query("SELECT * FROM characters WHERE cID = '$_SESSION[cid]' AND pID = '$_SESSION[id]'");
								$row = $resultSet->fetch_assoc();
								$class = $row["class_name"];
								$c_array = array();
								//query for class items
								$resultSet = $mysqli->query("SELECT * FROM class_equipment WHERE class_name = '$class'");
								while($rows = $resultSet->fetch_assoc()) {
									if(is_null($rows['option_2']) && is_null($rows['option_3'])) {
										array_push($c_array, $rows['option_1']);
										echo "<li><h4 class='cursive'>",$rows['option_1'],"</h4></li>";
									}
									else {
										echo "<li><Select name='class_equipment[]'>";
										echo "<option value='$rows[option_1]'>$rows[option_1]</option>";
										echo "<option value='$rows[option_2]'>$rows[option_2]</option>";
										if($rows['option_3'] !== NULL) {
											echo "<option value='$rows[option_3]'>$rows[option_3]</option>";
										}
										echo "</select></li>";
									}
								}
							 ?>
						</ul>
						<div class="message-submit">
							<input type="submit" value="Submit" name="equip_submit" id="equip_submit">
						</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>

<?php
	if(isset($_POST['equip_submit'])){
		if(isset($_POST['background_equipment'])){
			foreach ($_POST['background_equipment'] as $key => $value) {
				array_push($b_array, $value);
			}
		}

		if(isset($_POST['class_equipment'])){
			foreach ($_POST['class_equipment'] as $key => $value) {
				array_push($c_array, $value);
			}
		}
		$_SESSION['c_e'] = $c_array;
		$_SESSION['b_e'] = $b_array;

		//go to step 6.5 or insert equipment into database(background equipment)
		foreach ($b_array as $key => $value) {
			if(strstr($value, "Artisan") || strstr($value, "Musical")){
				header('Location: step6_5.php');
				exit;
			}
			else {
				$mysqli->query("INSERT INTO character_equipment(cID, equipment_name)
				VALUES('$_SESSION[cid]', '$value')");
			}
		}

		//go to step 6.5 or insert equipment into database(class equipment)
		foreach ($c_array as $key => $value) {
			if(strstr($value, "Simple") || strstr($value, "Martial") || strstr($value, "Musical")){
				header('Location: step6_5.php');
				exit;
			}
			else {
				$mysqli->query("INSERT INTO character_equipment(cID, equipment_name)
				VALUES('$_SESSION[cid]', '$value')");
				header('Location: display.php');
			}
		}
	}

?>

<?php require "templates/footer.php"; ?>
