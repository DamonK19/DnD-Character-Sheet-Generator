<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DnD Character Creation Tool</title>
	<link rel="stylesheet" href="css/application.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">
	<!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.helper.ie8.js"></script><![endif]-->
</head>

<body>
		<!-- background -->
		<div class="header-bg">
			<div class="grid-wrapper">
				<div class="grid one-fifth text-center site-logo">
					<a href="manageCharacter.php"><img src="assets/images/dd.png" alt=""></a>
				</div>
				<div class="grid three-fifths text-center header-title">
					<h1 class="white bold">DnD Character Creation Tool</h1>
				</div>
				<div class="grid one-fifth user-content">
					<div class="grid-wrapper user-info align--center">
						<div class="grid one-half user-name">
							<a href="manageCharacter.php"><h4 class="white"><?php session_start(); echo "Current User: ", $_SESSION['email'];?></h4></a>
						</div>
						<div class="grid one-half user-image">
							<img src="assets/images/user.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
