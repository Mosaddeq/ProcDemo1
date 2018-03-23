<?php
$nameErr = $emailErr = $genderErr = $passErr = $confirmErr = $checkErr = $typeErr = ""; 

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['name'];
    $email = $_POST['email'];
	$gender = $_POST['gender'];
    $pass =  $_POST['pass'];
    $confirm =  $_POST['confirm'];
    $uType =  $_POST['uType'];
    
    include ("funct.php");
    include ("dbconnect.php");
    include ("validation.php");
    
   
}


?>



<!DOCTYPE HTML>

<html>
<title>Registration</title>
<head>
<h1 align="center">Registration Form</h1>


</head>
<body>
<div>

<form method="POST" action="#">   <!$_SERVER["PHP_SELF"]Returns the filename of the currently executing script> 

	Name: <br>
	<input type="text" name="name" value="" placeholder="Full Name"/>
	<span class="error">* <?php echo $nameErr;?></span>								<! display errors on html page>
	
	<br>
	<br>
	
	Email: <br>
		
		<input type="text" name="email" value="" placeholder="********@****.com" />
		<span class="error">* <?php echo $emailErr;?></span>	
		<br>
		<br>
	Gender: <br>
		<input type="radio" name="gender" value="Female">Female
		<input type="radio" name="gender" value="Male">Male
		<span class="error">* <?php echo $genderErr;?></span>	
		<br><br>
	
	Password:<br>

		<input type="password" name="pass" value="" placeholder="*********"/>
		<span class="error">* <?php echo $passErr;?></span>	
		<br>
		<br>
	
	Confirm Password:<br>
		<input type="password" name="confirm" value="" placeholder="*********"/>
		<span class="error">* <?php echo $confirmErr;?></span>	
		<br>
		<br>
	
	User Type:
		<select value="combo" name="uType" >
		<option value=""></option>
		<option value="Instructor">Instructor</option>
		<option value="Student">Student</option>
		<span class="error">* <?php echo $typeErr;?></span>
		</select>
		<br>
		<br>
	
	
		<input type="checkbox" name="check" value="checked" placeholder="" />Yes,I've read the <a href="terms and conditions.html">terms and conditions </a> and i agree
		<span class="error">* <?php echo $checkErr;?></span>	
		<br>
		<br>
		
		
		<input type="submit" name="submit" value="submit"/>
		