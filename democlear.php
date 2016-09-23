<?php
session_start();
ob_start();
$dbhost = '208.91.198.76'; 
$dbname ='wavermmi_DB'; 
$dbuser = 'wavermmi_admin';
$dbpass= $_POST['pass'];
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname); 
$query = "DELETE FROM demodeal";
queryMysql($query);
function queryMysql($query)
{
$result = mysql_query($query) or die(mysql_error());
}
mysql_close();
?>