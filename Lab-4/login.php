<html>
<head>
	<body>
	</body>
	<table height = "50px" width = "100%"  border="1">
		<tr height = "100px">
<td> <center>
				<a href = "home.php">Home</a>|
				<a href = "login.php">Login</a>|
				<a href="registration.php"> Registration </a>
			</center>
			<img src="Company.JPEG" width="280" height="150" />
			</td>
		</tr>
		<tr height = "150px">
			<td>
					<form action="loginChk.php" method="GET">
				<fieldset>
					<legend><h2>Login</h2></legend>
					Username : <input type = "text" name="uname" value=""><br><br>
					Password  :  <input type = "password" name="password" value=""><br><br>
					
					<input type = "submit" name="submit" value="submit"> <a href="forgotpass.php">Forgot Password?</a>				
					</fieldset>
                </form>
                <br>
			</td>
		</tr>
		<tr>
		    <td align="center">
            <input type="checkbox" name="check"> Remember Me?<br><br>
		        Copyright © 2017
		    </td>
		</tr>
	</table>
	</head>
</html>