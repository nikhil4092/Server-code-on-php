<?php
$dbhost= '208.91.198.76';
$dbname= 'wavermmi_DB';
$dbuser= 'wavermmi_admin';
$dbpass= 'Waverr2015';
$id=$_GET['restid'];
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);
$query2=mysql_query("SELECT `Coordinates` FROM RestaurantInfo WHERE `Restaurant ID`='$id'") or die(mysql_error());
$row = mysql_fetch_array($query2);
$coordinates=$row['Coordinates'];
echo <<<_END
<script>
    var x= '$coordinates';
    window.location = "http://maps.google.com/maps?saddr=&daddr="+x;
</script>
//header("Location:http://maps.google.com/maps?saddr=&daddr=".$coordinates);
_END
?>