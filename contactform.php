<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$emailFrom = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$emailTo = "coolsis6@yahoo.com";
	$headers = "From: ".$emailFrom." via my website\n";
	$txt = "You have received an email from ".$name.".\n\n".$message;

	mail($emailTo, $subject, $txt, $headers);
	// header("Location: contact.php?mailsend");

}

?>