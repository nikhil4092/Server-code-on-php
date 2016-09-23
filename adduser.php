<?php
session_start();
ob_start();
$dbhost = '208.91.198.76'; 
$dbname ='wavermmi_DB'; 
$dbuser = 'wavermmi_admin';
$dbpass= $_POST['pass'];
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);                                
$query = "INSERT INTO User VALUES('$email','$name','$age','','')";
queryMysql($query);
function queryMysql($query)
{
$result = mysql_query($query) or die(mysql_error());
}
ob_end_clean();
mysql_close();
?>