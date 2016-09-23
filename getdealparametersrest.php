<?php
$dbhost= '208.91.198.76';
$dbname= 'wavermmi_DB';
$dbuser= 'wavermmi_admin';
$dbpass= $_POST['pass'];

$restaurant=$_POST['restaurant'];
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);

//$q=mysql_query("SELECT * FROM ActiveDealDatabase WHERE `Restaurant Name` = '$restaurant'");
$q=mysql_query("SELECT * FROM ActiveDealDatabase WHERE INSTR(`Restaurant Name`, '$restaurant') > 0");
while($e=mysql_fetch_assoc($q))
        $output[]=$e;
 
echo json_encode($output);
 
mysql_close();
?>