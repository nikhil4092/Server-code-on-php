<?php
error_reporting(0);
$dbhost= '208.91.198.76';
$dbname= $_POST['dbname'];
$dbuser= $_POST['dbuser'];
$dbpass= $_POST['dbpass'];
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);
$id=mysql_real_escape_string($_POST['id']);
$a=mysql_query("SELECT * FROM NCOrderList WHERE `Id`='$id'");
$f=mysql_fetch_array($a);
$phone=mysql_real_escape_string($f['PhoneNumber']);
$address=mysql_real_escape_string($f['Address']);
$order=mysql_real_escape_string($f['Order']);
$price=mysql_real_escape_string($f['Price']);
mysql_query("INSERT INTO `NCDelivery` (`PhoneNumber`,`Address`,`Order`,`Price`) VALUES ('$phone','$address','$order','$price')");
$q=mysql_query("SELECT * FROM NCOrderList WHERE `Id`='$id'");
mysql_query("DELETE FROM NCOrderList WHERE `Id`='$id'");
while($e=mysql_fetch_assoc($q)){
        $output[]=$e;
}
echo json_encode($output);
mysql_close();
?>