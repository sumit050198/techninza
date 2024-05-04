<?php 
include('connection.php');
$ip = $_SERVER['REMOTE_ADDR'];
$name = strip_tags(trim($_POST['name1']));
$email = strip_tags(trim($_POST['email1']));
$mobile = strip_tags(trim($_POST['mobile1']));
$services = strip_tags(trim($_POST['services1']));
$msg = strip_tags(trim($_POST['msg1']));
$insert_record = $conn->query("INSERT INTO `send_enquiry`(`name`, `email`, `mobile`,`services`, `msg`, `IP`, `is_service`,`date_created`) VALUES ('".$name."','".$email."','".$mobile."','".$services."','".$msg."','".$ip."','1',now())");

if($insert_record){
    echo '1';
}else{
    echo '2';
}


?>