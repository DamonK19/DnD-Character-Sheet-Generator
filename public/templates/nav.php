<!-- background -->
<div class="header-bg">
    <div class="grid-wrapper">
        <div class="grid one-fifth text-center site-logo">
            <a href="manageCharacter.php"><img src="assets/images/dd.png" alt=""></a>
        </div>
        <div class="grid three-fifths text-center header-title">
            <h2 class="bold">DnD Character Creation Tool</h2>
        </div>
        <div class="grid one-fifth user-content">
            <div class="grid-wrapper user-info align--center">
                <div class="grid user-name">
                    <a href="manageCharacter.php">
                        <p class="black"><?php session_start();
                                            echo $_SESSION['email']; ?></p>
                    </a>
                </div>
                <!-- <div class="grid one-half user-image">
							<img src="assets/images/user.png" alt="">
						</div> -->
            </div>
        </div>
    </div>
</div>