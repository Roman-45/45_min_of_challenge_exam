<?php 
$host="localhost";
$user="root";
$pass="";
$db= "exam";
$conn=mysqli_connect($host,$user,$pass,$db);
if($conn->connect_error){
  die ("something went wrong" . $conn -> connect_error);
}

?>