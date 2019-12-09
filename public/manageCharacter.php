<!-- EXAMPLE OF USING TEMPLATED PHP FILES -->
<?php include "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>
<?php include "templates/session.php"; ?>
<?php
session_start();
?>
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
				<div class="grid-wrapper character-display">
					<!-- CHARACTER -->
					<?php
					$mysqli = NEW MySQLi('localhost','root','root','dnd');
					$resultSet = $mysqli->query("SELECT character_name FROM characters WHERE pid =".$_SESSION['id']);
					$character_name = array();
					while($rows = $resultSet->fetch_assoc())
					{
					 array_push($character_name,$rows['character_name']);
					}
					$array_length = count($character_name);
					  for($i = 0; $i<$array_length; $i++){
						echo '<div class="grid character">
						<div class="grid-wrapper characer-options-container">
							<div class="grid one-fifth push--one-fifth character-name">
								<h4>', $character_name[$i] ,'</h4>
							</div>
							<div class="grid one-fifth character-update">
								<div class="btn">
									<a href="update.php">View</a>
								</div>
							</div>
							<div class="grid one-fifth character-delete">
								<div class="btn">
									<a href="delete.php">Delete</a>
								</div>
							</div>
						</div>
					</div>';
					  }
					?>
					
			<!-- BOTTOM BUTTONS -->
			<div class="grid one-half push--one-quarter page-options text-center">
				<div class="btn">
					<a href="#">Log Out</a>
				</div>
				<div class="btn">
					<a href="step0.php">Create New Character</a>
				</div>
			</div>
		</div>
	</div>
  <div class="grid desk-one-third text-center">
		<ul>
			<li><a href="viewchars.php"><strong>View Characters</strong></a> - View all created Characters</li>
		</ul>
	</div>
</div>

<?php include "templates/footer.php"; ?>
