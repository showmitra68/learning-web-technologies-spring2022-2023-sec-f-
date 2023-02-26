<?php
    session_start();
    if(!(isset($_SESSION['loggedin']) && isset($_SESSION['expires']) && $_SESSION['expires'] > time()))
    {
        header('Location: login.php');
    }
?>
<html>
<head>
    <title>Edit Profile</title>
</head>
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
                    <legend><h3>Edit PROFILE</h3></legend>
                    <form method="post" action="editcheck.php">
                        <table border="0" width=100%>
                            <tr>
                                <td width=10%>Name</td>
                                <td width=30%>
                                    <input type="text" name="#name" value="<?php echo isset($_SESSION['#name']) ? $_SESSION['#name'] : '' ?>">
                                </td>
                                <td rowspan="3" align="center">
                                </td>
                                <td width=40%></td>
                            </tr>
                            <tr height=0>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="email" name="#email" value="<?php echo isset($_SESSION['#email']) ? $_SESSION['#email'] : '' ?> ">
                                </td>
                                <td></td>
                            </tr>
                            <tr height=0>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>
                                    <input type="radio" name="#gender" <?php if(isset($_SESSION['#gender']) && $_SESSION['#gender']=='Male') echo "checked" ?> value="Male"/> Male
                                    <input type="radio" name="#gender" <?php if(isset($_SESSION['#gender']) && $_SESSION['#gender']=='Female') echo "checked" ?> value="Female"/> Female
                                    <input type="radio" name="#gender" <?php if(isset($_SESSION['#gender']) && $_SESSION['#gender']=='Other') echo "checked" ?> value="Other"/> Other <br>
                                </td>
                                <td></td>
                            </tr>
                            <tr height=0>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>
                                    <input type="date" name="#dob" value="<?php echo isset($_SESSION['#dob']) ? $_SESSION['#dob'] : '' ?>">
                                </td>
                                <td></td>
                            </tr>
                            <tr height=0>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="#submit" value="Submit">
                                </td>
                            </tr>                        
                            <tr>
                                <td>
                                        <?php
                                            
                                            if(isset($_SESSION['#submit'])) 
                                            {
                                                
                                                foreach ($_SESSION as $key => $value) {
                                                    if (!isset($_SESSION[$key]) or empty($value)) {
                                                        echo $key. " not set! <br>";     
                                                        break;                                               
                                                    }
                                                }
                                            }
                                        ?>
                                </td>
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
<?php
    
?>