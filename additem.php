<?php
error_reporting(0);
$dbhost= '208.91.198.76';
$dbname= $_POST['dbname'];
$dbuser= $_POST['dbuser'];
$dbpass= $_POST['dbpass'];
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);
$category=mysql_real_escape_string($_POST['category']);
$name=mysql_real_escape_string($_POST['name']);
$price=mysql_real_escape_string($_POST['price']);
mysql_query("INSERT INTO NCMenu (`Category`,`MenuItem`,`Price`) VALUES ('$category','$name','$price')");
$q=mysql_query("SELECT * FROM NCMenu WHERE `MenuItem`='$name'");
while($e=mysql_fetch_assoc($q)){
        $output[]=$e;
}
echo json_encode($output);
mysql_close();
?>