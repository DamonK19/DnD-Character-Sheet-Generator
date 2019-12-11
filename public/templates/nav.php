<!-- background -->
<div class="header-bg">
    <div class="site-wrapper">
    <div class="grid-wrapper">
        <div class="grid one-fifth text-center site-logo">
            <a href="manageCharacter.php"><img src="assets/images/dd.png" alt=""></a>
        </div>
        <div class="grid three-fifths text-center header-title">
            <h2 class="bold">DnD Character Creation Tool</h2>
        </div>
        <div class="grid one-fifth user-content">
            <div class="grid-wrapper user-info align--center">
                <div class="grid one-half user-name">
                    <a href="manageCharacter.php">
                        <p class="black"><?php session_start(); echo $_SESSION['email']; ?></p>
                    </a>
                </div>
                        <div class="grid one-half">
                            <?php

                            if(!isset($_SESSION['id'])){
                              header('Location: index.php');
                            }

                            if (isset($_POST['logout'])) {
                                session_unset();
                                session_destroy();
                                header('Location: index.php');
                            }
                            ?>
                            <form method="post">
                                <input type="submit" value="Logout" name="logout" id="logout">
                            </form>
                        </div>
            </div>
        </div>
        </div>
    </div>
</div>
