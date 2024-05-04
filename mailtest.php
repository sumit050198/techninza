<?php
$name=$_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$services = $_POST['services'];
$msg=$_POST["msg"];

// use wordwrap() if lines are longer than 70 characters
$msg="Name ".$name."Email : ".$email." Mobile : ".$mobile." Services ".$services." MSG : ".$msg;
$msg = wordwrap($msg,170);

$email_send = "vny.009@gmail.com,gokul@techninza.in,vinay@techninza.in,info@techninza.in";

// send email
mail($email_send,"New Lead",$msg);


?>
