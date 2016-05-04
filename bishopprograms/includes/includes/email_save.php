<?php
require_once "../like/config.php";
$email = $_POST['email'];
$query = mysql_query("INSERT INTO subscribers VALUES('','$email')") or die("An error occured: ".mysql_error());
header("Location: ".$_SERVER['HTTP_REFERER']);
?>