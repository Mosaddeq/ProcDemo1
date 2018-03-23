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

    If($count==1)
    {
        echo 'yaaaa';
        header('location: loghome.php');
    }
    else{echo 'boo';}
}



?>

<right>
<form action="login.php" method="POST">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>LOGIN</h3></legend>
					Email<br/>
					<input name="email" value="" type="email" required><br/>                               
					Password<br/>
					<input name="pass" value="" type="password" required>
					<br /><hr/>
					<input type="submit" value="Login">
					<a href="registration.php">Register</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</right>
<?php include ("foot.php"); ?>