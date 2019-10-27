<?php require "templates/header.php"; ?>
<div class="grid-wrapper one-whole centered">
    <div class="grid one-whole">
        
        <form action="step5.php" method="post">

            <div class="checkbox"><label for="checkbox1"><input type="checkbox" checked="checked" name="checkbox" id="checkbox1"> Background skill 1</label></div>
            <div class="checkbox"><label for="checkbox2"><input type="checkbox" checked="checked" name="checkbox" id="checkbox2"> Background skill 2</label></div>
            <div class="checkbox"><label for="checkbox3"><input type="checkbox" checked="checked" name="checkbox" id="checkbox3"> Background skill 3</label></div>
            <div class="checkbox"><label for="checkbox4"><input type="checkbox" name="checkbox" id="checkbox4"> Skill A</label></div>
            <div class="checkbox"><label for="checkbox5"><input type="checkbox" name="checkbox" id="checkbox5"> Skill B</label></div>
            <div class="checkbox"><label for="checkbox6"><input type="checkbox" name="checkbox" id="checkbox4" disabled> Choice Disabled</label></div>
            <div class="grid one-whole">
            <p><button class="btn" type="submit">Submit</button></p>
            </div>
        </form>
    </div>
</div>
<?php require "templates/footer.php"; ?>