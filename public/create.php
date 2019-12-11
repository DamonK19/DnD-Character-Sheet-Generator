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

    //query to get rows of users
    $query = "SELECT * FROM users WHERE email = '$_POST[email]'";
    $result= $connection->query($query);
    $result->execute();

    //if users contains 1 email
    if($result->rowCount() != 0) {
      $message = "Email already exists";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
    //else add user
    else{
    $sql = sprintf(
      "INSERT INTO %s (%s) values (%s)",
      "users",
      implode(", ", array_keys($new_user)),
      ":" . implode(", :", array_keys($new_user))
    );

    $statement = $connection->prepare($sql);
    $statement->execute($new_user);
    echo $_POST['email'],  " successfully added";
  }
  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }
}
?>

  <!-- <?php if (isset($_POST['submit']) && $statement) : ?>
    <blockquote><?php echo $_POST['email']; ?> successfully added.</blockquote>
  <?php endif; ?> -->

  <!-- <h2>Add a user</h2> -->


<!--
  <form method="post">
  <label for="email">Email</label>
  <input type="text" name="email" id="email">
  <label for="password">Password</label>
  <input type="text" name="password" id="password">
  <input type="submit" name="submit" value="Submit">
  </form> -->

  <div class="login-bg">
    <div class="site-wrapper full-height">
      <div class="grid-wrapper login-menu full-height">
        <div class="grid login-menu-content">
          <h2>Sign Up</h2>
          <form method="post">
            <!-- Email -->
            <div>
              <!-- <label for="email">Email</label> -->
              <input type="text" name="email" id="email" placeholder="Enter your Email" required>
            </div>
            <!-- password -->
            <div>
              <!-- <label for="password">Password</label> -->
              <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>
            <!-- submit -->
            <div>
              <input type="submit" name="submit" value="Submit">
            </div>
            <div class="">
              <a href="index.php">Back to Home</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php require "templates/footer.php"; ?>
