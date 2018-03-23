<?php
$servername ="localhost";
$username 	="root";
$password 	="";
$dbname 	="shadman";
$conn = mysqli_connect($servername, $username, $password, $dbname);

 

if(!$conn){
    die("Connection Error!".mysqli_connect_error());
}
    $sql = "insert into reg values ('".$name."','".$email."','".$gender."','".$pass."','".$uType."')";

?>