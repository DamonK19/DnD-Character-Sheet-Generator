<?php require "templates/header.php"; ?>
<?php require "templates/entityselect.php"; ?>
<?php
    $mysqli = NEW MySQLi('localhost','root','root','test');
    $resultSet = $mysqli->query("SELECT spell_name, spell_description FROM spells")
    
     ?>
<div class="grid-lap one-half ">
    <label for="spell-select"> Select a Spell</label>

    <select id="spell-select" class="form-control">
      <?php
      while($rows = $resultSet->fetch_assoc())
      {
        $spell_name = $rows['spell_name'];
        echo "<option value='$spell_name'>$spell_name</option>";
      }
       ?>
    </select>

              
              <input class="btn" type="submit" value="Add Spell To List">
  
</form>
    
</div>
<div class="grid-lap one-third">
<div class="grid-lap one-third">
<div class="grid-lap one-third">
<?php


?>

</div>
</div>
</div>
</div>
</div>


<?php require "templates/footer.php"; ?>