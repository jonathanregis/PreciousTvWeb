<?php
//contact subject
$site="precious.tv";
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$zip=$_POST['zip'];
$message=$_POST['message'];
$header="from: $name <$email>";

//enter your email
$to="saintavel@gmail.com";
if ($_POST){mail($to,$site,$message,$header);
$feedback='thanks';
}
?>