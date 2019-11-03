<?php require "templates/header.php"; ?>
<?php
  include("../config.php");
/**
 * Use an HTML form to create a new entry in the
 * users table.
 *
 */
 
if (isset($_POST['submit'])) {
  try  {
    $connection = new PDO($dsn, $username, $password, $options);

    $new_user = array(
      "password"  => $_POST['password'],
      "email"     => $_POST['email']
    );

    $sql = sprintf(
      "INSERT INTO %s (%s) values (%s)",
      "users",
      implode(", ", array_keys($new_user)),
      ":" . implode(", :", array_keys($new_user))
    );

    $statement = $connection->prepare($sql);
    $statement->execute($new_user);
  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }
}
?>

  <?php if (isset($_POST['submit']) && $statement) : ?>
    <blockquote><?php echo $_POST['email']; ?> successfully added.</blockquote>
  <?php endif; ?>

  <h2>Add a user</h2>

  <form method="post">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <label for="password">Password</label>
    <input type="text" name="password" id="password">
    <input type="submit" name="submit" value="Submit">
  </form>

  <a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>
