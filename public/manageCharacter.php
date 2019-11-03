<!-- EXAMPLE OF USING TEMPLATED PHP FILES -->
<?php include "templates/header.php"; ?>

<?php
  session_start();
  // echo $_SESSION['id'];
?>

<div class="grid-wrapper one-whole">
  <div class="grid desk-one-third text-center">
		<ul>
			<li><a href="step0.php"><strong>Create</strong></a> - Create a Character</li>
		</ul>
	</div>

	<div class="grid desk-one-third text-center">
		<ul>
			<li><a href="update.php"><strong>Update</strong></a> - Update a Character</li>
		</ul>
	</div>
  <div class="grid desk-one-third text-center">
		<ul>
			<li><a href="delete.php"><strong>Delete</strong></a> - Delete a Character</li>
		</ul>
	</div>
</div>



<!-- EXAMPLE OF USING TEMPLATED PHP FILES -->
<?php include "templates/footer.php"; ?>
