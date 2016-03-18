<?php include('functions.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo do_html_title($the_title); ?></title>
		<link rel="shortcut icon" href="favicon.png" type="image/png" />
		<!-- stylesheets -->
		<link rel="stylesheet" href="style.css">
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<a name="topanchor"></a>
		<div id="wrap">
			<div id="navigation">
						<span class="menu-trigger"><img src = "images/menuicon.png" alt="Michael Nguyen" height = auto width = 30;></span>					
						<?php echo do_main_nav(); ?>
			</div>
				<a href = "about.php">
				<div id="header">
					<div class=header_left>
						<img src = "images/mnpddlogo.png" alt="Michael Nguyen PDD" height = auto width = 200px;>					
					</div>
				
					<!--
					<div class=header_right>
					</div>
					-->
				</div>
				</a>