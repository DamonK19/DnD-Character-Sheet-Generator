<?php
session_start();
 echo "Current User: ", $_SESSION['email'];
?>

<?php
if(isset($_POST['logout'])){
  session_unset();
  session_destroy();
  header('Location: index.php');
}
 ?>

<div>
  <form method="post">
    <input type="submit" value="Logout" name="logout" id="logout">
  </form>
</div>
