<?php
error_reporting(0);
$dbhost= '208.91.198.76';
$dbname= $_POST['dbname'];
$dbuser= $_POST['dbuser'];
$dbpass= $_POST['dbpass'];
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);
$id=mysql_real_escape_string($_POST['id']);
$q=mysql_query("SELECT * FROM NCMenu WHERE `Id`='$id'");
mysql_query("DELETE FROM NCMenu WHERE `Id`='$id'");
while($e=mysql_fetch_assoc($q)){
        $output[]=$e;
}
echo json_encode($output);
mysql_close();
?>