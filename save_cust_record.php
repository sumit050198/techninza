<?php 
include('connection.php');
$ip = $_SERVER['REMOTE_ADDR'];
$name = strip_tags(trim($_POST['name']));
$email = strip_tags(trim($_POST['email']));
$mobile = strip_tags(trim($_POST['mobile']));
$services = strip_tags(trim($_POST['services']));
$msg = strip_tags(trim($_POST['msg']));
$insert_record = $conn->query("INSERT INTO `send_enquiry`(`name`, `email`, `mobile`,`services`, `msg`, `IP`, `date_created`) VALUES ('".$name."','".$email."','".$mobile."','".$services."','".$msg."','".$ip."',now())");

if($insert_record){
    echo '1';
}else{
    echo '2';
}


?>