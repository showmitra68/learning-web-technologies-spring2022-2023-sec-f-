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
				<form action="registrationChk.php" method="post">
				<fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form>
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" name = "name" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text">
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input name="uname" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password"></td>
				<td></td>
			</tr>	
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Profile Picture</td>
				<td>:</td>
				<td><input name="picture" type="file"></td>
				<td></td>
			</tr>			
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio" value="Male">Male
						<input name="gender" type="radio" value="Female" >Female
						<input name="gender" type="radio" value="Other">Other
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input type="text" name = "day" size="2" />/
						<input type="text" name="month" size="2" />/
						<input type="text" name= "year" size="4" />
						<font size="2"><i>(dd/mm/yyyy)</i></font>

					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Submit">
		<input type="reset">
	</form>
</fieldset>
                </form>
			</td>
		</tr>
		<tr>
			<td align="center">
            Copyright © 2017
			</td>
		</tr>
	</table>
	</head>
</html>
