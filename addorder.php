<?php
error_reporting(0);
$dbhost= '208.91.198.76';
$dbname= $_POST['dbname'];
$dbuser= $_POST['dbuser'];
$dbpass= $_POST['dbpass'];
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);
$phone=mysql_real_escape_string($_POST['phonenumber']);
$address=mysql_real_escape_string($_POST['address']);
$order=mysql_real_escape_string($_POST['order']);
$price=mysql_real_escape_string($_POST['price']);
mysql_query("INSERT INTO NCOrderList (`PhoneNumber`,`Address`,`Order`,`Price`) VALUES ('$phone','$address','$order','$price')");
$q=mysql_query("SELECT * FROM NCOrderList WHERE `Order`='$order'");
while($e=mysql_fetch_assoc($q)){
        $output[]=$e;
}
echo json_encode($output);
mysql_close();
?>