<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<html>
<head>
	<body>
	</body>

	<table height = "50px" width = "100%"  border="1">
		<tr height = "100px">
<td colspan="2" > <center>
				 <h1>Logged in as <a href="profile.php"> <?=$_SESSION['user']['uname']?>  </a><a href="logout.php">| Logout</a> </h1>
			</center>
			<img src="Company.JPEG" width="280" height="150" />
			</td>
		</tr>
		<tr height = "150px">
		<th >
		    Account
		</th>
		<th rowspan="2">
		 <fieldset>
    <legend><b>EDIT PROFILE</b></legend>
	<form action="registrationChk.php" method="post" >
		<br/>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="uname" type="text"></td>
				<td rowspan="7" align="center">
				
				</td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input name="email" type="text">
					<abbr title="hint: sample@example.com"><b>i</b></abbr></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td><input name="gender" type="radio" value="Male">Male
						<input name="gender" type="radio" value="Female" >Female
						<input name="gender" type="radio" value="Other">Other</td>
			</tr>
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Date of Birth</td>
				<td>:</td>
				<td><input type="text" name = "day" size="2" />/
						<input type="text" name="month" size="2" />/
						<input type="text" name= "year" size="4" />
						<font size="2"><i>(dd/mm/yyyy)</i></font></td>
			</tr>
		</table>	
        <hr/>
       <input type="submit" name="submit" value="submit">
	</form>
</fieldset>
		</th>
		<tr>
			<td>
				<a href="dashboard.php"><u>. Dashboard</u></a><br>
               <a href="profile.php"><u>. View Profile</u></a><br>
               <a href="editProfile.php"><u>. Edit Profile</u></a><br>
               <a href="picture.php"><u>. Change Profile Picture</u></a><br>
               <a href="changePass.php"><u>. Change Password</u></a><br>
               <a href="logout.php"><u>. Logout</u></a><br>
                <br>
			</td>
		</tr>
		<tr>
		    <td align="center" colspan="2">
            
		        Copyright © 2017
		    </td>
		</tr>
	</table>
	</head>
</html>
<?php
	
	}else{
		header('location: ../view/login.php');
	}
?>