<?php

include 'sendMsg.php';

$send=new sendMsg();


$m = $_POST['msg'];

$u = $_POST['userid'];


$send->setUse($u);
$send->setMsg($m);
$send->send();
?>