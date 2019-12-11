<!-- EXAMPLE OF USING TEMPLATED PHP FILES -->
<?php include "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>


<?php

if(isset($_POST['view_submit'])) {
	header("Location: display.php");
}

 ?>
<form action="" method="post">
<div class="manage-bg">
	<div class="site-wrapper full-height">
		<div class="grid-wrapper manage-menu full-height">
			<div class="grid ten-twelfths push--one-twelfth manage-menu-content">
				<!-- TITLE -->
				<div class="grid-wrapper grid-wrapper--full centered text-center">
					<div class="grid centered text-center">
						<h2>Previous Characters:</h2>
					</div>
				</div>
				<!-- START CHARACTER LISTING -->
				<div class="grid-wrapper character-display text-center">
					<!-- CHARACTER -->
						<div class='grid character'>
							<div class='grid-wrapper characer-options-container'>
								<?php
								$mysqli = NEW MySQLi('localhost','root','root','dnd');
								$resultSet = $mysqli->query("SELECT * FROM characters WHERE pid = '$_SESSION[id]'");

								while($rows = $resultSet->fetch_assoc())
								{
									echo "
			 							 <div class='grid one-quarter push--one-quarter character-name'>
			 								 <h4>$rows[character_name]</h4>
			 							 </div>
										 <div class='grid one-eighth push--one-eighth'>
											 <input type='radio' name='character' id='character' value='$rows[cID]'>
										 </div>

			 					 ";
								}
								?>
						</div>
					</div>
				</div>
			</div>
			<!-- BOTTOM BUTTONS -->
			<div class="grid one-half push--one-quarter page-options text-center">
				<div class="btn">
					<a href="step0.php">Create</a>
				</div>
				<input type='submit' value='View' name='view_submit' id='view_submit'>
				<input type='submit' value='Delete' name='delete_submit' id='delete_submit'>
			</div>
		</div>
	</div>
</div>
</form>

<?php

if(isset($_POST['delete_submit'])) {
	$mysqli->query("SET FOREIGN_KEY_CHECKS = 0");
	$mysqli->query("DELETE FROM characters WHERE cID = '$_POST[character]'");
	$mysqli->query("SET FOREIGN_KEY_CHECKS = 1");
	header("Refresh:0");
}

if(isset($_POST['view_submit'])) {
	$_SESSION['cid'] = $_POST['character'];
}
 ?>

<?php include "templates/footer.php"; ?>
