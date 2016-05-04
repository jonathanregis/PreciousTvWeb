<?php

session_start();
require("like/config.php");

$status = $_REQUEST['id'];

$qry = mysql_query("select * from lyk where status_id = '$status'");


while($row=mysql_fetch_array($qry)){

	$l = $row['like'];
	$liker = $row['liker'];


}

if($liker != ""){


	$l = $l - 1;

	$sql = mysql_query("update lyk set 	`like` = '$l', `liker` = '', l = 'Like' where status_id='$status'");


}else{

	$l = $l + 1;

	$sql = mysql_query("update lyk set 	`like` = '$l', `liker` = 'liker', l = 'Unlike' where status_id='$status'");

}


header("location:blog.php");


?>