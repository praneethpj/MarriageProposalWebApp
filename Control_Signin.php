<?php
 
include 'Actions.php';
$conn = Connect();

$_user = $_POST['username'];
$_pass = $_POST['password'];
 

$a=new Actions();
$a->setUser_name($_user);
$a->setUser_password($_pass);
$a->login();


?>