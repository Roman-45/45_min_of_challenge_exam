<?php 
include("connection.php");
if(isset($_POST["send"])){
  $names = $_POST["names"];
  $phone= $_POST["phone"];
  $email= $_POST["email"];
  $choice= $_POST["choice"];
  $summary= $_POST["summary"];
  $sql="INSERT INTO frank(names,phone,email,choice,summary) VALUES ('$names','$phone','$email','$choice','$summary')";
  if(mysqli_query($conn, $sql)){
    echo "yola";
}}
?>