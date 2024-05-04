<?php
$name=$_POST["name2"];
$email=$_POST["email2"];
$mobile=$_POST["mobile2"];
$services=$_POST["services2"];
$message = $_POST["msg2"];

// use wordwrap() if lines are longer than 70 characters
$msg="Name ".$name."Email : ".$email." Mobile : ".$mobile." Services : ".$services."Message ".$message;
$msg = wordwrap($msg,170);

$email_send = "vny.009@gmail.com,gokul@techninza.in,vinay@techninza.in,info@techninza.in";

// send email
mail($email_send,"New Lead",$msg);


?>
