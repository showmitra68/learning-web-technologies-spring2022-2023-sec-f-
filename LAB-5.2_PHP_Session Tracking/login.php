<?php
    session_start();
    if(isset($_SESSION['loggedin']) && isset($_SESSION['expires']) && $_SESSION['expires'] > time())
    {
        header('Location: dashboard.php');
    }
?>
<html>
    <head><title>Registration</title></head>

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
                                <a href="home.php">Home</a>
                                <a href="login.php">Login</a>
                                <a href="registration.php">Registration</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                        <table width="400">
                            <tr>
                            <td><fieldset> <legend>Login</legend>
                        User Name:
                            <input type="text"name="username"value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''  ?>"/><br>
                        Password:
                            <input type="text"name="password"value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : ''  ?>"/><br><hr>
                            <input type="checkbox" name="rememberme" value="1"> Remember Me <br>
                            <input type="submit" name="" value="submit"/>
                            <a href="forgotpassword.php">Forgot Password?</a>
                                <?php
                                    if(isset($_SESSION['upw']))
                                    {
                                        echo "Username or password incorrect! <br>";
                                    }
                                ?>
                                </fieldset>
                                </td>
                            </tr>
                        </table>
                        </center>
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
    unset($_SESSION['upw']);
    unset($_SESSION['lusername']);
?>