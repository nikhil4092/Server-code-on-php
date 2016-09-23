<?php
session_start();
ob_start();
date_default_timezone_set("Asia/Kolkata");
$dbhost = '208.91.198.76'; 
$dbname ='wavermmi_DB'; 
$dbuser = 'wavermmi_admin';
$dbpass= $_POST['pass'];
$dealid= $_POST['dealid'];
$restname= $_POST['restaurantname'];
$emailid= $_POST['emailid'];
$custname= $_POST['customername'];
$acttime= date("H:i:s");
$actdate= date("Y-m-d");
$actid= $_POST['actid'];
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);                                
$query = "INSERT INTO `Activated Deal` (`Deal ID`,`Restaurant Name`,`Email ID`,`Customer Name`,`Activation Time`,`Activation Date`,`Activation ID`) VALUES('$dealid','$restname','$emailid','$custname','$acttime','$actdate','$actid')";
queryMysql($query);
function queryMysql($query)
{
$result = mysql_query($query) or die(mysql_error());
}
mysql_close();
?>