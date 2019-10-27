<?php require "templates/header.php"; ?>
<?php require "templates/entitiyselect.php"; ?>

<div class="grid-wrapper one-whole centered">
    <div class="grid one-whole">

        <form action="step5.php" method="post">
            <input type="checkbox" name="skill1" value="Background1" checked> Background skill
            <input type="checkbox" name="skill2" value="skill2"> skill 2
            <input type="checkbox" name="skill3" value="skill3"> skill3

            <div class="grid one-whole">
                <button type="submit" name="button">
                    submit
                </button>
            </div>
        </form>
    </div>
</div>
<?php require "templates/footer.php"; ?>
