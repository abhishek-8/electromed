<?php
if(isset($_POST['submit'])) {
$done='true';
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$query=$_POST['query'];
$product_of_interest=$_POST['poi'];
$industry=$_POST['industry'];
$res='';
$to = "Noreply@electromed.co.in";
$subject = "Request for quote";
$headers = "From: ".$email."\r\n";
$txt='Name : '.$name."\r\n".'Phone : '.$phone."\r\n".'Email : '.$email."\r\n".'Product of interest : '.$product_of_interest."\r\n".'Industry : '.$industry."\r\n".'Message : '.$query;
echo $txt;
if (!mail($to,$subject,$txt,$headers))
	$res='An error occurred while submitting your response. Please try again.';
else {
$to = $email;
$subject = "Electromed";
$headers = "From: Noreply@electromed.co.in"."\r\n";
$txt='Thank you for contacting us.';
mail($to,$subject,$txt,$headers);
$res='Your response has been submitted. Our executive will get in touch shortly.';
}	
}
?>
