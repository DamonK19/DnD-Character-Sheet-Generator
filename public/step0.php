<?php include "templates/header.php"; ?>

<div class="grid-wrapper one-whole">
  <div class ="grid one-whole text-center" style="font-family: 'Bookmania'">
    Start by Entering in your Character Name, Player name and choose your Class, Background and Allignment
  </div>
</div>

<div class="grid-wrapper one-whole centered">
  <form>
    Character Name: <input type="text" name="fname"><br>
    Player Name: <input type="text" name="lname"><br>
    Class: <select name="classes">

    </select>
    Background: <select name="backgrounds">

    </select>
    Allignment: <select name ="goodVsEvil">

    </select>
    <select name = "lawVsChaos">

    </select>
  <input type="submit" value="Submit">

  </form>

<?php include "templates/footer.php"; ?>
