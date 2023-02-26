<?php
    session_start();
    if(!(isset($_SESSION['loggedin']) && isset($_SESSION['expires']) && $_SESSION['expires'] > time()))
    {
        header('Location: login.php');
    }
?>
<html>
    <head><title>View Profile</title></head>
    <body>
        <center>
            <table border="1" height="500" width="700">
                <tr height="80">
                    <td>
                        <table>
                            <tr>
                                <td width="500">
                                    <h1>X Company</h1>
                                </td>
                                <td>
                                    Logged in as <a href="dashboard.php"> <?php echo $_SESSION['#username'] ?></a> |
                                    <a href="logout.php">Logout</a> 
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr >
            <td width=20%>
                <table width=100%>
                    <tr>
                        <th><h3>Account</h3></th><hr>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="view.php">View Profile</a></li>
                                <li><a href="edit.php">Edit Profile</a></li>
                                <li><a href="changeprofilepicture.php">Change Profile Picture</a></li>
                                <li><a href="changepassword.php">Change Password</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="2">
            <fieldset>
                    <legend><h3>PROFILE</h3></legend>
                    <table border="0" width=100%>
                        <tr>
                            <td width=10%>Name</td>
                            <td width=30%>
                                <?php echo ":<b>  ".$_SESSION['#name']."</b>"?> 
                            </td>
                            <td rowspan="3" align="center">
                                <img width=200px src="<?php echo isset($_SESSION['profilepicture']) ? $_SESSION['profilepicture'] : "Showmitra.jpg" ?>" alt="Profile Picture">
                            </td>
                            <td width=40%></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo ":<b>  ".$_SESSION['#email']."</b>"?> </td>
                            <td></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td><?php echo ":<b>  ".$_SESSION['#gender']."</b>"?> </td>
                            <td align="center"><a href="changeprofilepicture.php">Change</a> </td>
                            <td></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td><?php echo ":<b>  ".$_SESSION['#dob']."</b>"?> </td>
                            <td></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td><a href="edit.php">Edit Profile</a></td>
                        </tr>                        
                    </table>
                </fieldset>
            </td>
        </tr>
                <tr height="50">
                    <td>
                        <center>
                            Copyright © 2017
                        </center>
                    </td>
                </tr> 
            </table>
        </center>
    </body>
</html>
