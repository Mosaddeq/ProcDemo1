<?php
 $name = test_input($_POST["name"]);
 $email = test_input($_POST["email"]);
 $gender = test_input($_POST["gender"]);
 $password = test_input($_POST["pass"]);
 $uType = test_input($_POST["uType"]);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;


}
?>