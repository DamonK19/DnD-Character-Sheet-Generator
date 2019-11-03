<?php require "templates/header.php"; ?>

  <h2>please login!</h2>
<?php
  include "../config.php";

  session_start();
  $con = mysqli_connect($host, $username, $password, $dbname);
  if(isset($_POST['but_submit'])){

    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($email != "" && $password != ""){

        $sql_query = "select id from users where email='".$email."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['id'];

        if($count > 0){
          $_SESSION['id'] = $row["id"];
          header('Location: manageCharacter.php');
        }else{
          echo "Invalid email and password";
        }
    }
  }
?>
<!--

  this should be the login page
 -->



 <form action="" method="post">
   <input type="text" name="email" placeholder="Enter your Email" required>
   <input type="password" name="password" placeholder="Enter your password" required>
   <input type="submit" value="Submit" name="but_submit" id="but_submit">
</form>

  <a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>
