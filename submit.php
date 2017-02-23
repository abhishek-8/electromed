<?php
if(isset($_POST['submit'])){
$done='true';
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$query=$_POST['query'];
$product_of_interest=$_POST['poi'];
$industry=$_POST['industry'];
$res='';
$to = "tiwari.abhishek428@gmail.com";
$subject = "My subject";
$headers = "From: tiwari.abhishek428@gmail.com" . "\r\n" .
"CC: abhinav2506293@gmail.com";
$txt='Name : '.$name.'<br>'.'Phone : '.$phone.'<br>'.'Email : '.$email.'<br>'.'Product of interest : '.$product_of_interest.'<br>'.'Industry : '.$industry.'<br>'.'Query : '.$query;
if (!mail($to,$subject,$txt,$headers))
$res='An error occurred while submitting your response.Please try again.';
else 
$res='Your response has been submitted.Our executive will get in touch shortly.';
}
?>
