<?php

$user_name = $_POST['name'];
$user_email = $_POST['email'];
$user_message = $_POST['message'];

if (empty($_POST['name'])){
	echo "Name is required<br>";
	die();
}
if (!preg_match("/^[a-zA-Z ]*$/",$user_name)) {
	echo "Only letters and white space allowed";
	die();
}
if (empty($_POST['email'])){
	echo "Email is required<br>";
	die();
}
if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
	echo "Invalid email format";
	die();
}
	if (empty($_POST['message']))
{
	echo "Message is required<br>";
	die();
}

$email_from="contact@michaelnguyenpdd.com";
$email_to="jntmike@gmail.com";
$email_subject="$user_name";
$email_message=
"From: $user_name

Email: $user_email

$user_message";

mail ($email_to, $email_subject, $email_message, "From: ".$email_from);

echo "Your message has been sent.<br><br>";
echo '<a href="http://michaelnguyenpdd.com">Return Home</a>';

		
?>