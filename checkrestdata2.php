<?php
?>
<html>
<title>Restaurant Info</title>
                                                                                                                                <style>
@font-face { font-family:Script MT Bold;src:url('script-mt-bold-70174.ttf'); } 

</style>
</html>
<script type="text/javascript">
document.write('<head style="background-color:#f1f1f1;">')
                                                                                                
 function drawdate(rid,rname,ownername,contactnum,alternatenum,address,city,pincode,emailid,cuisinetags,coordinates,timings,costfor2,tags,details,url)
{
document.write('    <tr>    <td>'+rid+'</td>    <td>'+rname+'</td> <td>'+ownername+'</td> <td>'+contactnum+'</td>   <td>'+alternativenum+'</td>   <td>'+address+'</td>    <td>'+city+'</td> <td>'+pincode+'</td> <td>'+emailid+'</td> <td>'+cuisinetags+'</td> <td>'+coordinates+'</td><td>'+timings+'</td> <td>'+costfor2+'</td> <td>'+tags+'</td> <td>'+details+'</td> <td>'+url+'</td>   </tr>')
}
 document.write('<style>table, th, td {    border: 1px solid black;    border-collapse: collapse;}th, td {    padding: 5px;    text-align: left;    }</style></head><body><h2>Restaurant Info:</h2><table style="width:100%">  <tr>    <th>Restaurant ID</th>    <th>Restaurant Name</th>   <th>Owners name</th>  <th>Contact Number</th>  <th>Alternative Number</th>   <th>Street Address</th>    <th>City</th> <th>Pincode</th> <th>Email ID</th> <th>Cuisine Tags</th> <th>Coordinates</th> <th>Timings</th> <th>Cost for two</th> <th>Tags</th> <th>Details</th> <th>url</th>')
 <?php
 $dbhost = '208.91.198.76';
$dbname = 'wavermmi_DB';
$dbuser = 'wavermmi_admin';
$dbpass = 'Waverr2015';
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);
$restid=$_POST['rest'];
$sql2=mysql_query("SELECT * FROM `RestaurantInfo` WHERE `Restaurant ID`='$restid'");
 $row2=mysql_fetch_array($sql2);
 $rid=$row2['Restaurant ID'];
 $rname=$row2['Restaurant Name'];
 $ownername=$row2['Owners Name'];
 $contactnum=$row2['Contact Number'];
 $alternatenum=$row2['Alternative Number'];
 $address=$row2['Street Address'];
 $city=$row2['City'];
 $pincode=$row2['Pincode'];
 $emailid=$row2['Email ID'];
 $cuisinetags=$row2['Cuisine Tags'];
 $coordinates=$row2['Coordinates'];
 $timings=$row2['Timings'];
 $costfor2=$row2['Cost For Two'];
 $tags=$row2['Tags'];
 $fineprint=$row2['FinePrint'];
 $details=$row2['Details'];
 $url=$row2['url'];
?>
document.write('    <tr>    <td><?php echo $rid; ?></td>  <td><?php echo $rname; ?></td> <td><?php echo $ownername; ?></td> <td><?php echo $contactnum; ?></td> <td><?php echo $alternatenum; ?></td> <td><?php echo $address; ?></td> <td><?php echo $city; ?></td> <td><?php echo $pincode; ?></td> <td><?php echo $emailid; ?></td> <td><?php echo $cuisinetags; ?></td> <td><?php echo $coordinates; ?></td> <td><?php echo $timings; ?></td> <td><?php echo $costfor2; ?></td> <td><?php echo $tags; ?></td> <td><?php echo $details; ?></td> <td><?php echo $url; ?></td>    </tr>')



document.write('</table>')
document.write('</head>')
</script>       