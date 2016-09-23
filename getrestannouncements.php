<?php
$dbhost= '208.91.198.76';
$dbname= 'wavermmi_DB';
$dbuser= 'wavermmi_admin';
$dbpass= $_POST['pass'];
$restid= $_POST['restaurantid'];
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);

$q=mysql_query("SELECT `Restaurant Name`,`Restaurant ID`,`url`,`announcements` FROM RestaurantInfo WHERE `Restaurant ID`='$restid'");
while($e=mysql_fetch_assoc($q))
        $output[]=$e;
 
echo json_encode($output);

mysql_close();
?>