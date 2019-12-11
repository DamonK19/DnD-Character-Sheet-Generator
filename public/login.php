<?php require "templates/header.php"; ?>

<?php include "../config.php";

session_start();
$con = mysqli_connect($host, $username, $password, $dbname);
if (isset($_POST['but_submit'])) {

    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $_SESSION['email'] = $_POST['email'];
    if ($email != "" && $password != ""){

    $sql_query = "select id from users where email='" . $email . "' and password='" . $password . "'";
    $result = mysqli_query($con, $sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['id'];

    if ($count > 0) {
      $_SESSION['id'] = $row["id"];
      header('Location: manageCharacter.php');
    } else {
      $message = "Invalid email or password";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }
}
?>
<!--this should be the login page-->

<div class="login-bg">
  <div class="site-wrapper full-height">
    <div class="grid-wrapper login-menu full-height">
      <div class="grid login-menu-content">
        <h2>Login</h2>
        <form action="" method="post">
          <!-- Email -->
          <div>
          <input type="text" name="email" placeholder="Enter your Email" required>
          </div>
          <!-- password -->
          <div>
          <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <!-- submit -->
          <div>
          <input type="submit" value="Submit" name="but_submit" id="but_submit">
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
