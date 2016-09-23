<?php
$dbhost= '208.91.198.76';
$dbname= 'wavermmi_DB';
$dbuser= 'wavermmi_admin';
$dbpass= 'Waverr2015';

mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);
$q=mysql_query("SELECT `DealText`,`url` FROM BingeTest");
while($e=mysql_fetch_assoc($q))
        $output[]=$e;
 
echo json_encode($output);
 
mysql_close();
?>