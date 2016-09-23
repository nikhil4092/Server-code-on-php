<?php
include_once 'functions.php' ;
$email="Email Id";
if(isset($_POST['email']))
{$email="email id";
$email=sanitizeString($_POST['email']);
 $query = "INSERT INTO email
VALUES('$email')";
queryMysql($query);
header("Location:index.html");
$filename = "index.html";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
}
?>	  
/*else
	  {
	  
echo <<<_END
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title style="color:#ff401e;">Waverr</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/png" href="../favicon (1).ico">
<link rel="shortcut icon" type="image/png" href="../favicon (1).ico">
<body style="background-image:url(back.jpg); background-repeat:no-repeat ; background-size:cover;  " >
<br>
<br>
<br>
<br>
<p><form method="post" action="1.php"  >
                        <div class="row">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-8" style="background-image:url(pop.png); background-repeat:no-repeat ; background-position:center; background-size:contain" >
                                <div class="form-group">
                             <h2 style="color:#fe5335; text-align:center; padding-top:20px">Hey there!<br> We are launching soon.
</h2>
                            <p class="item-intro" style="padding-bottom:40px; text-align:center; color:white">We will update you when we launch.<br> Enter your Email ID to find the best food deals in Mangalore</p>
                            <div class="row">
                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-4">
                            
                                    <input type="email" value="$email" name ="email" class="form-control" >
                                    <br>
                                    </div>
                                    <div class="col-sm-4">
                            </div>
                         </div>
                                    
                                    <div class="row">
                                    <div class="col-sm-4">
                            </div>
                            <div class="col-sm-4" style="text-align:center">
                            
                                    <button type="submit" class="btn btn-primary"  style="background-color: #fe5335 ; text-align:center" >Submit</button>
                                    </div>
                                    <div class="col-sm-4">
                            </div>
                            </div>    
							<br><br>
<br>
                           <div class="row">
                                    <div class="col-sm-4">
                            </div>
                            <div class="col-sm-4" style="text-align:center">
                            
                                    <a href="index.html" style="font-size:20px">Go to website</a>
                                    </div>
                                    <div class="col-sm-4">
                            </div>
                            </div>    
                            </div>
                            </div>     
                         
                               
                                
                    </form></p>
                            </div>     
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                           
    </body>

 

?>
*/