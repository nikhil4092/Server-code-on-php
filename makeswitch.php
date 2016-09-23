<?php
error_reporting(0);
$dbhost= '208.91.198.76';
$dbname= $_POST['dbname'];
$dbuser= $_POST['dbuser'];
$dbpass= $_POST['dbpass'];
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);
$state=mysql_real_escape_string($_POST['state']);
$q=mysql_query("UPDATE NCSwitch Set `State`='$state'");

mysql_close();
?>