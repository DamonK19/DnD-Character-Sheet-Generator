<?php require "templates/header.php"; ?>
<div class="grid-wrapper one-whole centered">
    <div class="grid one-whole">
        
        <form action="step5.php" method="post">

            <div class="checkbox"><label for="checkbox1"><input type="checkbox" checked="checked" name="checkbox" id="acrobatics"> Acrobatics</label></div>
            <div class="checkbox"><label for="checkbox2"><input type="checkbox" checked="checked" name="checkbox" id="arcana">Arcana</label></div>
            <div class="checkbox"><label for="checkbox3"><input type="checkbox" checked="checked" name="checkbox" id="athletics">Athletics</label></div>
            <div class="checkbox"><label for="checkbox4"><input type="checkbox" name="checkbox" id="bluff">Bluff</label></div>
            <div class="checkbox"><label for="checkbox5"><input type="checkbox" name="checkbox" id="diplomacy">Diplomacy</label></div>
            <div class="checkbox"><label for="checkbox6"><input type="checkbox" name="checkbox" id="dungeoneering"> Dungeoneering</label></div>
            <div class="checkbox"><label for="checkbox1"><input type="checkbox" checked="checked" name="checkbox" id="endurance"> Endurance</label></div>
            <div class="checkbox"><label for="checkbox2"><input type="checkbox" checked="checked" name="checkbox" id="heal">Heal</label></div>
            <div class="checkbox"><label for="checkbox3"><input type="checkbox" checked="checked" name="checkbox" id="history">History</label></div>
            <div class="checkbox"><label for="checkbox4"><input type="checkbox" name="checkbox" id="insight">Insight</label></div>
            <div class="checkbox"><label for="checkbox5"><input type="checkbox" name="checkbox" id="intimidate">Intimidate</label></div>
            <div class="checkbox"><label for="checkbox6"><input type="checkbox" name="checkbox" id="nature"> Nature</label></div>
            <div class="checkbox"><label for="checkbox1"><input type="checkbox" checked="checked" name="checkbox" id="perception"> Perception</label></div>
            <div class="checkbox"><label for="checkbox2"><input type="checkbox" checked="checked" name="checkbox" id="religion">Religion</label></div>
            <div class="checkbox"><label for="checkbox3"><input type="checkbox" checked="checked" name="checkbox" id="stealth">Stealth</label></div>
            <div class="checkbox"><label for="checkbox4"><input type="checkbox" name="checkbox" id="streetwise">Streetwise</label></div>
            <div class="checkbox"><label for="checkbox5"><input type="checkbox" name="checkbox" id="thievery">Thievery</label></div>


            <div class="grid one-whole">
            <p><button class="btn" type="submit">Submit</button></p>
            </div>
        </form>
    </div>
</div>
<?php require "templates/footer.php"; ?>