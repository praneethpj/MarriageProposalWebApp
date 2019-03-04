<?php
 
 
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "marriage";
 $conn='';
 
 // Create connection
 if($conn==null){
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 }
 
 
 return $conn;
}
 
?>