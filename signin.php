<?php



echo strlen('abc');

require 'system/Connection.php';
$conn = Connect();

$_user = $_POST['username'];
$_pass = $_POST['password'];

//$sql = "SELECT * FROM advertistment WHERE username=".$_GET['username'];
$sql = "SELECT * FROM login WHERE username='$_user' and password='$_pass'";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_array($result)) {
    echo "<li>First Name :-" . $row['username'] . "</li>";
} else {
    echo "Wrong username";
}

?>