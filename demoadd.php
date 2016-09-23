<?php
session_start();
ob_start();
$dbhost = '208.91.198.76'; 
$dbname ='wavermmi_DB'; 
$dbuser = 'wavermmi_admin';
$dbpass= $_POST['pass'];
$deal= $_POST['deal'];
$stime= $_POST['stime'];
$etime= $_POST['etime'];
$sdate= $_POST['sdate'];
$edate= $_POST['edate'];
$name= $_POST['name'];
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname); 
$query = "INSERT INTO `demodeal` (`deal`,`name`,`stime`,`etime`,`sdate`,`edate`) VALUES('$deal','$name','$stime','$etime','$sdate','$edate')";
queryMysql($query);
function queryMysql($query)
{
$result = mysql_query($query) or die(mysql_error());
}
mysql_close();
?>