<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    require ("dbconnect.php");
    
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $sql = "SELECT * FROM reg WHERE email='$email' and password = '$pass'";
    $result = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);

    If(count($row)>0 && $row['uType']=='Instructor')
    {
		//echo 'yaaaa';
		$_SESSION['email']=$email;
		$_SESSION['password']=$pass;
		$_SESSION['uType']= 'Instructor';
        header('location: instructhome.php');
    }
	else if(count($row)>0 && $row['uType']=='Student')
	{
		//echo 'boo';
		$_SESSION['email']=$email;
		$_SESSION['password']=$pass;
		$_SESSION['uType']= 'Instructor';
        header('location: studenthome.php');
	}
	else{
		echo "invalid user";
	}
}



?>
<link rel="stylesheet" type="text/css" href="style.css">
<right>
<form action="login.php" method="POST">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>Login</h3></legend>
					Email
					<input name="email" value="" type="email" required>                               
					Password
					<input name="pass" value="" type="password" required>
					
					<input type="submit" value="Login">
					<a href="registration.php">Register</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</right>
