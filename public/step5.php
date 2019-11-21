<?php require "templates/header.php"; ?>
<?php include "templates/session.php"; ?>
<div class="grid-lap one-half ">
<?php

 $con=mysqli_connect("localhost","root","root","dnd");
 // Check connection
 if (mysqli_connect_errno()){
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

foreach($_POST['spell_select'] as $selected){
 // Perform query


   $sql = "UPDATE spells SET equipped = 1 WHERE spell_name = '$selected'";
 // $sql1 = "INSERT INTO spells ( spell_name, spell_level, spell_description, cID, equipped) VALUES ( test1 , 0 , test1 , 1 , 0 )";
   mysqli_query($con, $sql);


  header('Location: step6.php');
 }

?>

<?php

    $mysqli = NEW MySQLi('localhost','root','root','dnd');
    $resultSet = $mysqli->query("SELECT spell_name FROM spells");
    $resultSet1 = $mysqli->query("SELECT spell_description FROM spells");

     ?>

<form action="" method="post">
    <label for="spell_select"> Select Spells</label>


      <?php
      $spell_description = array();
      $spell_name = array();

      while($rows1 = $resultSet1->fetch_assoc())
      {
       array_push($spell_description,$rows1['spell_description']);
      }
      while($rows = $resultSet->fetch_assoc())
      {
        array_push($spell_name, $rows['spell_name']);
      }

      $array_length = count($spell_name);
      for($i = 0; $i<$array_length; $i++){
        echo  "<br><input type= 'checkbox' name='spell_select[]' value='$spell_name[$i]'  />", "<br>",$spell_name[$i], "</br>";
        echo  $spell_description[$i], "<br></br>";

      }
       ?>

    <br></br>

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
