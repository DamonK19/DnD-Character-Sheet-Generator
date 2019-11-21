<?php require "templates/header.php"; ?>
<?php include "templates/session.php"; ?>
<div class="grid-lap one-half ">
<?php

 $con=mysqli_connect("localhost","root","root","dnd");
 // Check connection
 if (mysqli_connect_errno()){
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

 foreach($_POST['equipment_select'] as $selected){
 // Perform query
   $sql = "UPDATE equipment SET equipped = 1 WHERE equipment_name = '$selected'";
   mysqli_query($con, $sql);


  header('Location: display.php');
 }

?>

<?php

    $mysqli = NEW MySQLi('localhost','root','root','dnd');
    $resultSet = $mysqli->query("SELECT equipment_name FROM equipment")

     ?>

<form action="" method="post">
    <label for="equipment_select"> Select an equipment</label>


      <?php
      $equipment_name = array();
      while($rows = $resultSet->fetch_assoc())
      {
        array_push($equipment_name, $rows['equipment_name']);
      }

      $array_length = count($equipment_name);
      for($i = 0; $i<$array_length; $i++){
        echo  "<br><input type= 'checkbox' name='equipment_select[]' value='$equipment_name[$i]'  />", $equipment_name[$i],"\n\n";

      }
       ?>
      
    <br><input type="submit" value="Submit" name="equipment_submit" id="equipment_submit">


</form>
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
