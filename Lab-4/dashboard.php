<?php
session_start();
if(isset($_SESSION['flag'])){
?>
<html>
    <head>
        <title>Dashboard</title>
    </head>
    <body>
        <center>
            <table border ="1" height="650" width="750">
                <tr height=80>

                    <td colspan="2"> 
                        <table width = "750">
                            <tr>
                                <td>
                                    <img height="80" src="Company.JPEG">
                                </td>
                                <td align="right">
                                    Logged in as <a href="profile.php"> <?php echo $_SESSION['username'] ?></a> |
                                    <a href="logout.php">Logout</a> 
                                </td>    
                            </tr>    
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="400">
                        <h3>Account</h3>
                        <hr>
                        <ul>
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="profile.php">View Profile</a></li>
                            <li><a href="editProfile.php">Edit Profile</a></li>
                            <li><a href="picture.php">Change Profile Picture</a></li>
                            <li><a href="changePass.php">Change Password</a></li>
                            <li><a href="logout.php"> Logout</a></li>
                        </ul>
                    </td>
                    <td>
                            <h2>Welcome <?php echo $_SESSION['username'] ?></h2>
                    </td>
                </tr>
                <tr height ="35" >
                    <td colspan="2" align="center">Copyright © 2017</td>
                </tr>
            </table>
        </center>
    </body>
</html>
<?php
}
else{
    header('location: login.php'); 
}
?>