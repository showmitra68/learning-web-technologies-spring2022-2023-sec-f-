<?php
    session_start();
    if(!(isset($_SESSION['loggedin']) && isset($_SESSION['expires']) && $_SESSION['expires'] > time()))
    {
        header('Location: login.php');
    }
?>
<html>
<head>
    <title>Change Password</title>
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
                <form method="post" action="changepasswordcheck.php" enctype="">
                    <fieldset>
                        <legend>Change Password</legend>
                        <table width=100%>
                            <tr height=40px>
                                <td width=15%>
                                    Current Password : 
                                </td>
                                <td>
                                    <input type="password" name="currentpassword">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td width=10%>
                                    New Password : 
                                </td>
                                <td>
                                    <input type="password" name="password">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td width=10%>
                                    Confrim New Password : 
                                </td>
                                <td>
                                    <input type="password" name="confirmnewpassword">
                                </td>
                            </tr>
                        </table>
                        <input type="submit" name="submit" value="Submit">            
                        <?php
                            
                            if(isset($_SESSION['pwChangeStatus']))
                            {
                                if($_SESSION['pwChangeStatus'])
                                {
                                    unset($_SESSION['pwChangeStatus']);
                                    echo "Password changed!";
                                }else echo "Password does not match!";
                            }
                            unset($_SESSION['pwChangeStatus']);
                        ?>
                    </fieldset>
                </form>
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