<?php

	$youremail = "saintavel@gmail.com";
    $title = Trim(stripslashes($_POST['Title']));
	$firstname = Trim(stripslashes($_POST['firstname']));
	$lastname = Trim(stripslashes($_POST['lastname']));
	$gender = Trim(stripslashes($_POST['gender']));
	$dateofbirth = Trim(stripslashes($_POST['dateofbirth']));
	$address = Trim(stripslashes($_POST['Address']));
	$email = Trim(stripslashes($_POST['email']));
	$country = Trim(stripslashes($_POST['Country']));
	$occupation = Trim(stripslashes($_POST['Occupation']));
	$phone = Trim(stripslashes($_POST['phone']));
	$marital= Trim(stripslashes($_POST['marital']));
	$TOC= Trim(stripslashes($_POST['TOC']));
	$Amount= Trim(stripslashes($_POST['Amount']));
	$Currency= Trim(stripslashes($_POST['Currency']));
	
	$subject = "www.precious.tv";
    $header  = "From: $email \r\n"."MIME-Version: 1.0 \r\n"."Content-type: text/html; charset=UTF-8 \r\n";
    $message  = "Title:$title //  First Name:$firstname  // Last Name:$firstname // Gender: $gender // Date Of Birth :$dateofbirth // Address: $address //
	Email:$email // Country:$country //  occupation: $occupation // Phone Number: $phone // Marital Status: $marital// Type Of Commitment: $TOC //
	Amount: $Amount// Currency: $Currency ";
	
	$content = htmlspecialchars($message);
   
    $content = wordwrap($content,70);
    mail($youremail, $subject, $content, $header);
	
?>
	
<meta http-equiv="refresh" content="0;URL=contact_us.php">