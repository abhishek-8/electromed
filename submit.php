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
?>