<?php require "templates/header.php"; ?>
        <h3>Step 5: Skills</h3> <p>
            Select your skills. Skills from background are already selected.



        <form action="step6.php" method="post">

        <div class="grid-wrapper">
        <div class="grid  one-third">
          <div class="grid-wrapper">
            <div class="grid">
            <div class="checkbox has-success"><label for="checkbox1"><input type="checkbox" name="checkbox" id="acrobatics" checked="checked" disabled> Acrobatics</label></div>
            <div class="checkbox"><label for="checkbox2"><input type="checkbox" name="checkbox" id="arcana">Arcana</label></div>
            <div class="checkbox"><label for="checkbox3"><input type="checkbox" name="checkbox" id="athletics">Athletics</label></div>
            <div class="checkbox"><label for="checkbox4"><input type="checkbox" name="checkbox" id="bluff">Bluff</label></div>
            <div class="checkbox"><label for="checkbox5"><input type="checkbox" name="checkbox" id="diplomacy">Diplomacy</label></div>
            <div class="checkbox"><label for="checkbox6"><input type="checkbox" name="checkbox" id="dungeoneering"> Dungeoneering</label></div>
            </div>
          </div>
        </div>
        <div class="grid  one-third">
          <div class="grid-wrapper">
            <div class="grid  one-third">
            <div class="checkbox"><label for="checkbox1"><input type="checkbox" name="checkbox" id="endurance"> Endurance</label></div>
            <div class="checkbox"><label for="checkbox2"><input type="checkbox" name="checkbox" id="heal">Heal</label></div>
            <div class="checkbox"><label for="checkbox3"><input type="checkbox" name="checkbox" id="history">History</label></div>
            <div class="checkbox"><label for="checkbox4"><input type="checkbox" name="checkbox" id="insight">Insight</label></div>
            <div class="checkbox"><label for="checkbox5"><input type="checkbox" name="checkbox" id="intimidate">Intimidate</label></div>
            <div class="checkbox"><label for="checkbox6"><input type="checkbox" name="checkbox" id="nature"> Nature</label></div>
            </div>
          </div>
        </div>
            <div class="grid  one-third">
          <div class="grid-wrapper">
          <div class="grid  one-third">
            <div class="checkbox"><label for="checkbox1"><input type="checkbox" name="checkbox" id="perception"> Perception</label></div>
            <div class="checkbox"><label for="checkbox2"><input type="checkbox" name="checkbox" id="religion">Religion</label></div>
            <div class="checkbox"><label for="checkbox3"><input type="checkbox" name="checkbox" id="stealth">Stealth</label></div>
            <div class="checkbox"><label for="checkbox4"><input type="checkbox" name="checkbox" id="streetwise">Streetwise</label></div>
            <div class="checkbox"><label for="checkbox5"><input type="checkbox" name="checkbox" id="thievery">Thievery</label></div>
            </div>
          </div>
        </div>

            <div class="grid">
            <p><button class="btn" type="submit">Submit</button></p>
            </div>
            </div>
        </form>

<?php require "templates/footer.php"; ?>
