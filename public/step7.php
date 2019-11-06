<?php require "templates/header.php"; ?>
<?php require "templates/entityselect.php"; ?>
<?php
 session_start();
 $con=mysqli_connect("localhost","root","root","dnd");
 // Check connection
 if (mysqli_connect_errno()){
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 if(isset($_POST['spell_submit'])){
 // Perform query 

   $sql = "UPDATE spells SET equipped = 1 WHERE spell_name = \'Acid Splash\'";
  
   mysqli_query($con, $sql);

   $last_id = mysqli_insert_id($con);

   $_SESSION['cid'] = $last_id;
   
 }

?>

<?php

    $mysqli = NEW MySQLi('localhost','root','root','dnd');
    $resultSet = $mysqli->query("SELECT spell_name FROM spells")
    
     ?>
<div class="grid-lap one-half ">
<form action="" method="post">
    <label for="spell_select"> Select a Spell</label>

    <select id="spell_select" class="form-control">
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