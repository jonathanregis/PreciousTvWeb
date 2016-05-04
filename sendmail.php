<?php

	$youremail = "saintavel@gmail.com";

	$name = Trim(stripslashes($_POST['name']));
	$email = Trim(stripslashes($_POST['email']));
	$reply = Trim(stripslashes($_POST['subject']));
	$message = Trim(stripslashes($_POST['message']));
	
	$subject = "www.africanlinkgroup.com";
    $header  = "From: $email \r\n"."MIME-Version: 1.0 \r\n"."Content-type: text/html; charset=UTF-8 \r\n";
    $message  = "Name: $name // E-mail: $email // subject: $reply // Message: $message";
	
	$content = htmlspecialchars($message);
   
    $content = wordwrap($content,70);
    mail($youremail, $subject, $content, $header);
	
?>
	
<meta http-equiv="refresh" content="0;URL=contact_us.php">