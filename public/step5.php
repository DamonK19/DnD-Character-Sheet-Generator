<?php require "templates/header.php"; ?>
<?php include "templates/session.php"; ?>
<div class="grid-lap one-half ">
<?php



 $spellvar = $_POST['spell_select'];

 $con=mysqli_connect("localhost","root","root","dnd");
 // Check connection
 if (mysqli_connect_errno()){
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 if(isset($_POST['spell_submit'])){
 // Perform query

   $sql = "UPDATE spells SET equipped = 1 WHERE spell_name = '$spellvar'";
  $sql1 = "INSERT INTO spells ( spell_name, spell_level, spell_description, cID, equipped) VALUES ( test1 , 0 , test1 , 1 , 0 )";
   mysqli_query($con, $sql);


  header('Location: step6.php');
 }

?>

<?php

    $mysqli = NEW MySQLi('localhost','root','root','dnd');
    $resultSet = $mysqli->query("SELECT spell_name FROM spells")

     ?>

<form action="" method="post">
    <label for="spell_select"> Select a Spell</label>

    <select name="spell_select" class="form-control">
      <?php
      while($rows = $resultSet->fetch_assoc())
      {
        $spell_name = $rows['spell_name'];
        echo "<option value='$spell_name'>$spell_name</option>";
      }
       ?>
    </select>


    <input type="submit" value="Submit" name="spell_submit" id="spell_submit">

</form>
<?php
$_SESSION['test'] = $_POST['test_select'];
?>
</div>
<div class="grid-lap one-third">
<div class="grid-lap one-third">
<div class="grid-lap one-third">
</div>
</div>
</div>
</div>
</div>


<?php require "templates/footer.php"; ?>
