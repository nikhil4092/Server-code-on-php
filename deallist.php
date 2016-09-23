                                                                                                                                                                <html>
                                                                                                                                                                <title>
                                                                                                                                                                Deal List
                                                                                                                                                                </title>
                                                                                                                                <style>
@font-face { font-family:Script MT Bold;src:url('script-mt-bold-70174.ttf'); } 

</style>
</html>
                                                                                                                                <script type="text/javascript">
                                                                                                document.write('<head style="background-color:#f1f1f1;">')
                                                                                                document.write('<body style="background-image:url("http://waverr.in/img/header-bg.jpg");">')
                                                                                                document.write('<div id="heading"><div class="partners"; style="background-color:#fe5335;font-size:40px;color:#fff;margin:-10px;font-family:Script MT Bold;" ><div class="floated_img" style="float: left;"> <a href="index.html"><img src="partners/backbutton.png" alt="Some image" style="padding-top:10px;padding-left:10px;"></a></div><center>Deal list</center></div>')
function drawdate(disper,amount,freebie,canvas,m,n,rid,url)
{
//amount,freebie,canvas,rname

if(disper!=0&&disper!="")
{
   document.write('<center><div>')
   document.write('<ul style="font-size:12px;float:left;list-style-type: none;padding:10px;">')
   document.write('<li ><img src='+url+' style="width:410px;height:410px"><div style="background-color:#fe5335;padding:5px;width:400px;color:white;font-size:25px;font-color:#ffffff">'+disper+'% off on a minimum purchase of Rs.'+m+' at '+n+'</div><div><a href="get.php?restid='+rid+'"><button type="text" class="btn btn-lg" style="padding:5px; background-color:#a1a1a1;cursor: pointer;border:#a1a1a1;font-size:24px;width:410px; text-align:center; color:white" >Get Directions</button></a></div><div><a href="https://play.google.com/store/apps/details?id=com.project.waverr"><button type="text" class="btn btn-lg" style="padding:5px; background-color:#3fbd34;cursor: pointer;border:#3fbd34;font-size:24px;width:410px;border-bottom-right-radius:5px;border-bottom-left-radius:5px; text-align:center; color:white" >Activate Deal</button></a></div></li>')
   document.write('</div></center>')
 
}

if(amount!=0&&amount!="")
{
document.write('<center><div>')
   document.write('<ul style="font-size:12px;float:left;list-style-type: none;padding:10px;">')
   document.write('<li ><img src='+url+' style="width:410px;height:410px"><div style="background-color:#fe5335;padding:5px;width:400px;color:white;font-size:25px;font-color:#ffffff">Rs.'+amount+' off on a minimum purchase of Rs.'+m+' at '+n+'</div><div><a href="get.php?restid='+rid+'"><button type="text" class="btn btn-lg" style="padding:5px; background-color:#a1a1a1;cursor: pointer;border:#a1a1a1;font-size:24px;width:410px; text-align:center; color:white" >Get Directions</button></a></div><div><a href="https://play.google.com/store/apps/details?id=com.project.waverr"><button type="text" class="btn btn-lg" style="padding:5px; background-color:#3fbd34;cursor: pointer;border:#3fbd34;font-size:24px;width:410px;border-bottom-right-radius:5px;border-bottom-left-radius:5px; text-align:center; color:white" >Activate Deal</button></a></div></li>')
   document.write('</div></center>')
  
}
if(freebie!="")
{
document.write('<center><div>')
   document.write('<ul style="font-size:12px;float:left;list-style-type: none;padding:10px;">')
   document.write('<li ><img src='+url+' style="width:410px;height:410px"><div style="background-color:#fe5335;padding:5px;width:400px;color:white;font-size:25px;font-color:#ffffff">'+freebie+' free with a minimum purchase of Rs.'+m+' at '+n+'</div><div><a href="get.php?restid='+rid+'"><button type="text" class="btn btn-lg" style="padding:5px; background-color:#a1a1a1;cursor: pointer;border:#a1a1a1;font-size:24px;width:410px; text-align:center; color:white" >Get Directions</button></a></div><div><a href="https://play.google.com/store/apps/details?id=com.project.waverr"><button type="text" class="btn btn-lg" style="padding:5px; background-color:#3fbd34;cursor: pointer;border:#3fbd34;font-size:24px;width:410px;border-bottom-right-radius:5px;border-bottom-left-radius:5px; text-align:center; color:white" >Activate Deal</button></a></div></li>')
   document.write('</div></center>')
  // document.write('<br>')
}
if(canvas!="")
{
document.write('<center><div>')
   document.write('<ul style="font-size:12px;float:left;list-style-type: none;padding:10px;">')
   document.write('<li ><img src='+url+' style="width:410px;height:410px"><div style="background-color:#fe5335;padding:5px;width:400px;color:white;font-size:25px;font-color:#ffffff">'+canvas+' at '+n+'</div><div><a href="get.php?restid='+rid+'"><button type="text" class="btn btn-lg" style="padding:5px; background-color:#a1a1a1;cursor: pointer;border:#a1a1a1;font-size:24px;width:410px; text-align:center; color:white" >Get Directions</button></a></div><div><a href="https://play.google.com/store/apps/details?id=com.project.waverr"><button type="text" class="btn btn-lg" style="padding:5px; background-color:#3fbd34;cursor: pointer;border:#3fbd34;font-size:24px;width:410px;border-bottom-right-radius:5px;border-bottom-left-radius:5px; text-align:center; color:white" >Activate Deal</button></a></div></li>')
   document.write('</div></center>')
  
}

}


<?php  
$dbhost = '208.91.198.76';
$dbname = 'wavermmi_DB';
$dbuser = 'wavermmi_admin';
$dbpass = 'Waverr2015';
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);
// Check connection

$sql=mysql_query("SELECT * FROM ActiveDealDatabase");

while($row = mysql_fetch_array($sql)) {
$disper=$row['Percentage Discount'];
$amount=$row['Amount Discount'];
$freebie=$row['Freebie'];
$canvas=$row['CanvasText'];
$mini=$row['Min Purchase Amount'];
$name=$row['Restaurant Name'];
$restid=$row['Restaurant ID'];
$url=$row['url'];
?>

drawdate('<?php echo $disper; ?>','<?php echo $amount; ?>','<?php echo $freebie; ?>','<?php echo $canvas; ?>','<?php echo $mini; ?>','<?php echo $name; ?>','<?php echo $restid; ?>','<?php echo $url; ?>')
//'<?php echo $disper; ?>','<?php echo $amount; ?>','<?php echo $freebie; ?>','<?php echo $canvas; ?>','<?php echo $mini; ?>','<?php echo $rname; ?>'

<?php
}
?>
document.write('</body>')
document.write('</div>')
document.write('</head>')

        </script>                    
                            
                            
                            
                            
                            