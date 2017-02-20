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
  </head>
  <body>

    <p class="custom-text" style="color:#263238;text-align:center;font-size:17px;"><br><br><br>Thankyou for contacting us.<br><a href="contactForm.html"><u>Go Back</u></a></p>

  	<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$query=$_POST['query'];
$product_of_interest=$_POST['poi'];
$industry=$_POST['industry'];
echo 'Name : '.$name; 
echo '<br>'.'Phone : '.$phone;
echo '<br>'.'Email : '.$email;
echo '<br>'.'Product of interest : '.$product_of_interest;
echo '<br>'.'Industry : '.$industry;
echo '<br>'.'Query : '.$query;
$to = "tiwari.abhishek428@gmail.com";
$subject = "My subject";
$headers = "From: tiwari.abhishek428@gmail.com" . "\r\n" .
"CC: abhinav2506293@gmail.com";
mail($to,$subject,$query,$headers);
?>
  </body>
</html>
