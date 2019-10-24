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
    Race: <select name="races">

    </select>
  </br>
    Class: <select name="classes">

    </select>
  </br>
    Background: <select name="backgrounds">

    </select>
  </br>
    Allignment: <select name ="goodVsEvil">
      <option value = "good">Good</option>
      <option value = "neutral">Neutral</option>
      <option value = "evil">Evil</option>
    </select>
    <select name = "lawVsChaos">
      <option value = "lawful">Lawful</option>
      <option value = "neutral">Neutral</option>
      <option value = "chaotic">Chaotic</option>
    </select>
  </br>
    Attribute Selection Method: <select name="attributeSelect">

    </select>
  <input type="submit" value="Submit">

  </form>
</div>

<?php include "templates/navigator.php"; ?>
<?php include "templates/footer.php"; ?>
