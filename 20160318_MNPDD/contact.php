<?php
$the_banner = '<img src = "images/contactbanner2.jpg" alt="Email Banner" height = auto width = 100%>';
$the_title = 'Contact Form';
$the_content = '	
	<div class="body">
		<div id="contactform">
		<h2>Contact Form</h2>
		<br>
		<form method="post" action="mailscript.php" id="contactForm">
		
			<label for="name">Your Name</label><br>
			<input type="text" id="name" name="name" size=40><br><br>
			
			<label for="email">Your Email</label><br>
			<input type="text" id="email" name="email" size=40><br><br>
			
			<label for="message">Message</label><br>
			<textarea id="message" name="message" rows=7 cols=40></textarea><br><br>
		
			<input type="submit" class="button next" name="contact_submit" value="Send Message">
		</form>
		</div>
	</div>
';
?>
		
<?php include('single.php'); ?>