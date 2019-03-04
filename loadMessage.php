<?php
session_start();

$userid = $_SESSION['user_session'];
$tou = $_POST['user'];

require 'system/Connection.php';

if(isset($userid) & isset($_POST['user']) &$tou!=''){

$conn = Connect();
$sql = "select * from message  where userid='$userid' and touserid='$tou' || userid='$tou' "
        . "and touserid='$userid' order by id";

$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

    if ($userid == $row['userid']) {
        echo '<div   style="color:white;width:100px;padding:5px;height:30%;" class="speech-bubble-left">' 
        . $row['message'] . '</div><br>';
    } else {
        echo '<div style="margin:0px 120px 0px;width:100px;height:30%;color:white;padding:5px" class="speech-bubble">' 
        . $row['message'] . '</div><br>';
    }
}
}
?>