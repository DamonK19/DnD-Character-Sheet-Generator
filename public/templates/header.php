<!doctype html>
<html lang="en">
<?php
session_start();
 echo "Current User: ", $_SESSION['email'];
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>DnD Character Creation Tool</title>
	<link rel="stylesheet" href="css/application.css">
</head>

<body>
	<div class="site-wrapper">
		<div class="grid-wrapper one-whole">
			<div class="grid text-center">
				<h1>DnD Character Creation Tool</h1>
			</div>
		</div>
