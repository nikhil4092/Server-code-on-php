<?php
include_once('functions.php');
$name = sanitizeString($_POST['name']);
$email= sanitizeString($_POST['email']);
$message = sanitizeString($_POST['message']);

$query = "INSERT INTO message VALUES('$name','$email','$message')";
//$query = "INSERT INTO dealsVALUES('1','1','1','1','1','1','1','1')";
queryMysql($query);
header("Location:index.html");
$filename = "index.html";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
?>
