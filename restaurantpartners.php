<?php
$dbhost= '208.91.198.76';
$dbname= 'wavermmi_DB';
$dbuser= 'wavermmi_admin';
$dbpass=$_POST["pass"];
$restname=$_POST["restaurantname"];
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$q=mysqli_query($conn,"SELECT * FROM RestaurantInfo ORDER BY `Restaurant Name`");
//$q=mysqli_query($conn,"SELECT Coordinates FROM Restaurant Info WHERE Restaurant Name='TRATTORIA'");
while($e=mysqli_fetch_assoc($q))
        $output[]=$e;
echo json_encode($output);
 
mysqli_close($conn);