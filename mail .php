
<?php

	$youremail = "saintavel@gmail.com";

	$name = Trim(stripslashes($_POST['name1']));
	$lastname = Trim(stripslashes($_POST['lastname1']));
	$email = Trim(stripslashes($_POST['email1']));
	$phone = Trim(stripslashes($_POST['phone1']));
	$message = Trim(stripslashes($_POST['message1']));
	
	$subject = "www.africanlinkgroup.com";
	
    $header  = "From: $email \r\n"."MIME-Version: 1.0 \r\n"."Content-type: text/html; charset=UTF-8 \r\n";
    $message  = "Name: $name //Last Name: $lastname // E-mail: $email // Phone: $phone // Message: $message// Subject: $subject";
	
	$content = htmlspecialchars($message);
   
    $content = wordwrap($content,70);
    mail($youremail, $content, $header);
	
?>
	
<meta http-equiv="refresh" content="0;URL=contact_us.php">