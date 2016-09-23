<?php
error_reporting(0);
$dbhost= '208.91.198.76';
$dbname= 'wavermmi_DB';
$dbuser= 'wavermmi_admin';
$dbpass= $_POST['pass'];
$email= $_POST['email'];

mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);
 
$q=mysql_query("SELECT * FROM User WHERE `Email`='$email'");
while($e=mysql_fetch_assoc($q))
        $output[]=$e;
 
echo json_encode($output);

mysql_close();
?>                                
                            
                            
                            