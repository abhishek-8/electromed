<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>About Us</title>
    <!-- CSS  -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!--Import jQuery before materialize.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>‌
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script> 
    <script>
function goBack() {
    window.history.back();
}
</script>
  </head>
  <body>

  	<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$query=$_POST['query'];
if(isset($_POST['poi']))
$product_of_interest=$_POST['poi'];
else
$product_of_interest='';
$industry=$_POST['industry'];

$to = "tiwari.abhishek428@gmail.com";
$subject = "My subject";
$headers = "From: tiwari.abhishek428@gmail.com" . "\r\n" .
"CC: abhinav2506293@gmail.com";
$txt='Name : '.$name.'<br>'.'Phone : '.$phone.'<br>'.'Email : '.$email.'<br>'.'Product of interest : '.$product_of_interest.'<br>'.'Industry : '.$industry.'<br>'.'Query : '.$query;

if (!mail($to,$subject,$txt,$headers)) {
echo '<p class="custom-text" style="color:#263238;text-align:center;font-size:17px;"><br><br><br>Not Sent<br><a href="contactForm.html" onclick="goBack()"><u>Go Back</u></a></p>';
}
else 
echo '<p class="custom-text" style="color:#263238;text-align:center;font-size:17px;"><br><br><br>Thank you for contacting us.<br><a href="contactForm.html" onclick="goBack()"><u>Go Back</u></a></p>';
?>
  </body>
</html>
