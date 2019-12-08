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
  $sql = "INSERT INTO characters(pID, character_name, player_name, race_name, background, hit_points, class_name, allignment)
    VALUES('$_SESSION[id]','$_POST[cname]','$_POST[pname]', '$_POST[race]','',1,'','')";

  mysqli_query($con, $sql);

  $last_id = mysqli_insert_id($con);

  $_SESSION['cid'] = $last_id;
  $_SESSION['cname'] = $_POST[cname];
  header('Location: step0_5.php');
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
            <h4 class="cursive">Start by choosing your:<br></h4>
            <ul>
              <li>
                <h4 class="cursive">Character Name:<input type="text" name="cname"></h4>
              </li>
              <li>
                <h4 class="cursive">Player name:<input type="text" name="pname"></h4>
              </li>
            </ul>
            <h4 class="cursive">Then use the image slector on the right for your:</h4>
            <ul>
              <li>
                <h4 class="cursive">Race</h4>
              </li>
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
          <span id="item-1"></span>
          <span id="item-2"></span>
          <span id="item-3"></span>
          <span id="item-4"></span>
          <span id="item-5"></span>
          <span id="item-6"></span>
          <span id="item-7"></span>
          <span id="item-8"></span>
          <div class="carousel-item item-1 text-center">
            <h2 class="item-title">Dragonborn</h2>
            <a class="arrow arrow-prev" href="#item-8"></a>
            <a class="arrow arrow-next" href="#item-2"></a>
            <input type='radio' name='race' id='race' value='Dragonborn'>
          </div>
          <div class="carousel-item item-2 text-center">
            <h2 class="item-title">Dwarf</h2>
            <a class="arrow arrow-prev" href="#item-1"></a>
            <a class="arrow arrow-next" href="#item-3"></a>
            <input type='radio' name='race' id='race' value='Dwarf'>
          </div>
          <div class="carousel-item item-3 text-center">
            <h2 class="item-title">Elf</h2>
            <a class="arrow arrow-prev" href="#item-2"></a>
            <a class="arrow arrow-next" href="#item-4"></a>
            <input type='radio' name='race' id='race' value='Elf'>
          </div>
          <div class="carousel-item item-4 text-center">
            <h2 class="item-title">Gnome</h2>
            <a class="arrow arrow-prev" href="#item-3"></a>
            <a class="arrow arrow-next" href="#item-5"></a>
            <input type='radio' name='race' id='race' value='Gnome'>
          </div>
          <div class="carousel-item item-5 text-center">
            <h2 class="item-title">Half-Orc</h2>
            <a class="arrow arrow-prev" href="#item-4"></a>
            <a class="arrow arrow-next" href="#item-6"></a>
            <input type='radio' name='race' id='race' value='Half-Orc'>
          </div>
          <div class="carousel-item item-6 text-center">
            <h2 class="item-title">Halfling</h2>
            <a class="arrow arrow-prev" href="#item-5"></a>
            <a class="arrow arrow-next" href="#item-7"></a>
            <input type='radio' name='race' id='race' value='Halfling'>
          </div>
          <div class="carousel-item item-7 text-center">
            <h2 class="item-title">Human</h2>
            <a class="arrow arrow-prev" href="#item-6"></a>
            <a class="arrow arrow-next" href="#item-8"></a>
            <input type='radio' name='race' id='race' value='Human'>
          </div>
          <div class="carousel-item item-8 text-center">
            <h2 class="item-title">Tiefling</h2>
            <a class="arrow arrow-prev" href="#item-7"></a>
            <a class="arrow arrow-next" href="#item-1"></a>
            <input type='radio' name='race' id='race' value='Tiefling'>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
<?php include "templates/footer.php"; ?>
