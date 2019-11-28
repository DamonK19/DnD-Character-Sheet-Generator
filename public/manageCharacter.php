<!-- EXAMPLE OF USING TEMPLATED PHP FILES -->
<?php include "templates/header.php"; ?>
<?php include "templates/session.php"; ?>

<div class="manage-bg">
	<div class="site-wrapper">
		<div class="grid-wrapper manage-menu">
			<div class="grid one-half push--one-quarter manage-menu-content">
				<div class="grid-wrapper character-display">
					<!-- START CHARACTER -->
					<div class="grid character">
						<div class="grid-wrapper characer-options-container">
							<div class="grid one-fifth push--one-fifth character-name">
								<h4>Character1</h4>
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
					</div>
					<!-- END CHARACTER -->
					<!-- START CHARACTER -->
					<div class="grid character">
						<div class="grid-wrapper characer-options-container">
							<div class="grid one-fifth push--one-fifth character-name">
								<h4>Character2</h4>
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
					</div>
					<!-- END CHARACTER -->
					<!-- START CHARACTER -->
					<div class="grid character">
						<div class="grid-wrapper characer-options-container">
							<div class="grid one-fifth push--one-fifth character-name">
								<h4>Character3</h4>
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
					</div>
					<!-- END CHARACTER -->
					<!-- START CHARACTER -->
					<div class="grid character">
						<div class="grid-wrapper characer-options-container">
							<div class="grid one-fifth push--one-fifth character-name">
								<h4>Character4</h4>
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
					</div>
					<!-- END CHARACTER -->
				</div>
			</div>
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
