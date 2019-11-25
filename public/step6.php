<?php require "templates/headernav.php"; ?>
<?php include "templates/session.php"; ?>
<div class="grid-lap one-half ">
<?php

 $equipmentvar = $_POST['equipment_select'];

 $con=mysqli_connect("localhost","root","root","dnd");
 // Check connection
 if (mysqli_connect_errno()){
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 if(isset($_POST['equipment_submit'])){
 // Perform query

   $sql = "UPDATE equipment SET equipped = 1 WHERE equipment_name = '$equipmentvar'";
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

    <select name="equipment_select" class="form-control">
      <?php
      while($rows = $resultSet->fetch_assoc())
      {
        $equipment_name = $rows['equipment_name'];
        echo "<option value='$equipment_name'>$equipment_name</option>";
      }
       ?>
    </select>


    <input type="submit" value="Submit" name="equipment_submit" id="equipment_submit">

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
