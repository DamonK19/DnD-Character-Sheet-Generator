
<!-- EXAMPLE OF USING TEMPLATED PHP FILES -->
<?php include "templates/header.php"; ?>
<?php include "templates/splash.php"; ?>

<div class="grid-wrapper one-whole">
	<div class="grid desk-one-quarter">
		<ul>
			<li><a href="create.php"><strong>Create</strong></a> - add a user</li>
		</ul>
	</div>
	<div class="grid desk-one-quarter">
		<ul>
			<li><a href="read.php"><strong>Read</strong></a> - find a user</li>
		</ul>
	</div>
	<div class="grid desk-one-quarter">
		<ul>
			<li><a href="update.php"><strong>Update</strong></a> - edit a user</li>
		</ul>
	</div>
	<div class="grid desk-one-quarter">
		<ul>
			<li><a href="delete.php"><strong>Delete</strong></a> - delete a user</li>
		</ul>
	</div>
</div>

<div class="grid-wrapper one-whole">
	<div class="grid one-wholer text-center">
		<button class="btn generate">Click me</button>
	</div>
	<div class="grid one-wholer text-center">
		<div class="number">Roll</button>
	</div>
</div>

<!-- EXAMPLE OF USING TEMPLATED PHP FILES -->
<?php include "templates/footer.php"; ?>
