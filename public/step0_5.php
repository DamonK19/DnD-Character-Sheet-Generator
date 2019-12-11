<?php include "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>

<?php
$con = mysqli_connect("localhost", "root", "root", "dnd");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (isset($_POST['char_submit'])) {
  // Perform query
  $sql = "UPDATE Characters SET background = '$_POST[backgrounds]', class_name = '$_POST[class]', allignment = '$_POST[lawVsChaos] $_POST[goodVsEvil]' WHERE character_name='$_SESSION[cname]'";

  mysqli_query($con, $sql);
  header('Location: step1.php');
}
?>
<form action="" method="post">
<div class="step-background">
  <div class="site-wrapper full-height">
    <div class="grid-wrapper grid-wrapper--full centered full-height">
      <!-- MESSAGE -->
      <div class="grid one-half message-scroll">
        <div class="grid-wrapper align--center message-scroll-content">
          <div class="grid three-fifths push--one-fifth message">
            <h2 class="cursive">Select image for:</h2>
            <ul>
              <li>
                <h4 class="">Class:</h4>
              </li>
            </ul>
            <h2 class="cursive">Background:</h2>
            <ul>
                <select class="full-width" name="backgrounds">
                  <option value="Acolyte">Acolyte</option>
                  <option value="Charlaton">Charlaton</option>
                  <option value="Criminal">Criminal</option>
                  <option value="Entertainer">Entertainer</option>
                  <option value="Folk Hero">Folk Hero</option>
                  <option value="Guild Artisan">Guild Artisan</option>
                  <option value="Hermit">Hermit</option>
                  <option value="Noble">Noble</option>
                  <option value="Outlander">Outlander</option>
                  <option value="Sage">Sage</option>
                  <option value="Sailor">Sailor</option>
                  <option value="Soldier">Soldier</option>
                  <option value="Urchin">Urchin</option>
                </select>
            </ul>
            <h2 class="cursive">Allignment:</h2>
            <ul>
                <select name="goodVsEvil">
                  <option value="good">Good</option>
                  <option value="neutral">Neutral</option>
                  <option value="evil">Evil</option>
                </select>
                <select name="lawVsChaos">
                  <option value="lawful">Lawful</option>
                  <option value="neutral">Neutral</option>
                  <option value="chaotic">Chaotic</option>
                </select>
            </ul>
            <div class="message-submit">
              <input type="submit" value="Submit" name="char_submit" id="char_submit">
            </div>
          </div>
        </div>
      </div>
      <!-- CAROUSEL -->
      <div class="grid one-half">
        <div class="carousel-wrapper">
          <span id="item-9"></span>
          <span id="item-10"></span>
          <span id="item-11"></span>
          <span id="item-12"></span>
          <span id="item-13"></span>
          <span id="item-14"></span>
          <span id="item-15"></span>
          <span id="item-16"></span>
          <span id="item-17"></span>
          <span id="item-18"></span>
          <span id="item-19"></span>
          <span id="item-20"></span>
          <div class="carousel-item item-9 text-center">
            <h2 class="item-title">Barbarian</h2>
            <a class="arrow arrow-prev" href="#item-20"></a>
            <a class="arrow arrow-next" href="#item-10"></a>
            <input type='radio' name='class' id='class' value='Barbarian'>
          </div>
          <div class="carousel-item item-10 text-center">
            <h2 class="item-title">Bard</h2>
            <a class="arrow arrow-prev" href="#item-9"></a>
            <a class="arrow arrow-next" href="#item-11"></a>
            <input type='radio' name='class' id='class' value='Bard'>
          </div>
          <div class="carousel-item item-11 text-center">
            <h2 class="item-title">Cleric</h2>
            <a class="arrow arrow-prev" href="#item-10"></a>
            <a class="arrow arrow-next" href="#item-12"></a>
            <input type='radio' name='class' id='class' value='Cleric'>
          </div>
          <div class="carousel-item item-12 text-center">
            <h2 class="item-title">Druid</h2>
            <a class="arrow arrow-prev" href="#item-11"></a>
            <a class="arrow arrow-next" href="#item-13"></a>
            <input type='radio' name='class' id='class' value='Druid'>
          </div>
          <div class="carousel-item item-13 text-center">
            <h2 class="item-title">Fighter</h2>
            <a class="arrow arrow-prev" href="#item-12"></a>
            <a class="arrow arrow-next" href="#item-14"></a>
            <input type='radio' name='class' id='class' value='Fighter'>
          </div>
          <div class="carousel-item item-14 text-center">
            <h2 class="item-title">Monk</h2>
            <a class="arrow arrow-prev" href="#item-13"></a>
            <a class="arrow arrow-next" href="#item-15"></a>
            <input type='radio' name='class' id='class' value='Monk'>
          </div>
          <div class="carousel-item item-15 text-center">
            <h2 class="item-title">Paladin</h2>
            <a class="arrow arrow-prev" href="#item-14"></a>
            <a class="arrow arrow-next" href="#item-16"></a>
            <input type='radio' name='class' id='class' value='Paladin'>
          </div>
          <div class="carousel-item item-16 text-center">
            <h2 class="item-title">Ranger</h2>
            <a class="arrow arrow-prev" href="#item-15"></a>
            <a class="arrow arrow-next" href="#item-17"></a>
            <input type='radio' name='class' id='class' value='Ranger'>
          </div>
          <div class="carousel-item item-17 text-center">
            <h2 class="item-title">Rogue</h2>
            <a class="arrow arrow-prev" href="#item-16"></a>
            <a class="arrow arrow-next" href="#item-18"></a>
            <input type='radio' name='class' id='class' value='Rogue'>
          </div>
          <div class="carousel-item item-18 text-center">
            <h2 class="item-title">Sorcerer</h2>
            <a class="arrow arrow-prev" href="#item-17"></a>
            <a class="arrow arrow-next" href="#item-19"></a>
            <input type='radio' name='class' id='class' value='Sorcerer'>
          </div>
          <div class="carousel-item item-19 text-center">
            <h2 class="item-title">Warlock</h2>
            <a class="arrow arrow-prev" href="#item-18"></a>
            <a class="arrow arrow-next" href="#item-20"></a>
            <input type='radio' name='class' id='class' value='Warlock'>
          </div>
          <div class="carousel-item item-20 text-center">
            <h2 class="item-title">Wizard</h2>
            <a class="arrow arrow-prev" href="#item-19"></a>
            <a class="arrow arrow-next" href="#item-9"></a>
            <input type='radio' name='class' id='class' value='Wizard'>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<?php include "templates/footer.php"; ?>
