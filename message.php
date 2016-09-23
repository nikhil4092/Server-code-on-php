<?php
$mail = $_POST['message'];
$formcontent = "Email: $mail";
$recipient = "nikhil4092@gmail.com";
$subject = "Mail that uploaded picture";
$mailheader = "From: my website";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo 'OK ! Your mail address has been successfully added to your photo !<br>We will contact you later :)';

?>

<html>
<head>
<style type="text/css">
p1 {
              font-weight:bold;
              color:#ffffff;

              font-size:100px;
              font-family: "Helvetica";
   }
input {
              
              color:blue;
              font-size:40px;
              font-family: "Helvetica";
   }

body {

background-image: url(img/header-bg.png);
}
</style>
<body>
<p1>

<center>THANK YOU!</center> <br /></p1>
<p2>
<form action="http://waverr.in/">
   <center> <button type="submit" class="btn btn-xl" style="min-height:45px; background-color: #fe5335 ;padding:30px;border-radius:5px; border:#fe3553; text-align:center;font-weight:bold; color:white" >GO TO WEBSITE</button> </center>
</form>
</p2>
 </body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thank You.</title>
</head>
<body>
</body>
</html>