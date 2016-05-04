<?php

session_start();
require("like/config.php");

$status = $_REQUEST['id'];
$comment = $_POST['comment'];

$qry = mysql_query("insert into comment (status_id,comment,commenter) values('$status','$comment','commenter')");

header("location:blog.php");

?>