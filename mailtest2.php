<?php
$name=$_POST["name1"];
$email=$_POST["email1"];
$mobile=$_POST["mobile1"];
$services = $_POST['services1'];
$msg=$_POST["msg1"];

// use wordwrap() if lines are longer than 70 characters
$msg="Name ".$name."Email : ".$email." Mobile : ".$mobile." Services ".$services." MSG : ".$msg;
$msg = wordwrap($msg,170);

$email_send = "vny.009@gmail.com,gokul@techninza.in,vinay@techninza.in,info@techninza.in";

// send email
mail($email_send,"New Lead",$msg);


?>
