<?php
    session_start();
    if(!(isset($_SESSION['loggedin']) && isset($_SESSION['expires']) && $_SESSION['expires'] > time()))
    {
        header('Location: login.php');
    }
?>
<html>
<head>
    <title>Profile Picture</title>
</head>
<body
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
                    <legend><h3>Change Profile Picture</h3></legend>
                    <form method="post" action="changeprofilepicturecheck.php" enctype="multipart/form-data">
                        <table border="0" width=100%>
                            <tr>
                                <td>
                                    <img width=200px src="<?php echo isset($_SESSION['profilepicture']) ? $_SESSION['profilepicture'] : "Showmitra.jpg" ?>" alt="Profile Picture">
                                </td>
                                <td width=80%></td>
                            </tr>
                            <tr>
                                <td height=60px>
                                    <input type="file" name="profilepicture"  id="profilepicture">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <hr>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Submit">
                                </td>
                                <td></td>
                            </tr>
                        </table>
                    </form>
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