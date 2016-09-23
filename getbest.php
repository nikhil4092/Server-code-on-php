<?php
$dbhost= '208.91.198.76';
$dbname= 'wavermmi_DB';
$dbuser= 'wavermmi_admin';
$dbpass= $_POST['pass'];

$cuisine=$_POST['cuisine'];
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);

//$q=mysql_query("SELECT * FROM ActiveDealDatabase WHERE `Cuisine` = '$cuisine'");
$q=mysql_query("SELECT * FROM ActiveDealDatabase WHERE `Best`='1'");
while($e=mysql_fetch_assoc($q))
        $output[]=$e;
 
echo json_encode($output);
 
mysql_close();
?>