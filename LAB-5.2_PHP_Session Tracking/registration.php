<?php
    session_start();
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
                            <td>
                            <form method="post" action="registrationcheck.php">    
                            <fieldset> <legend>Registration</legend>
                        Name:
                            <input type="text"name="name"value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''  ?>"/><br><hr>
                        Email:
                            <input type="text"name="email"value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''  ?>"/><br><hr>
                        User Name:
                            <input type="text"name="username"value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''  ?>"/><br><hr>
                        Password:
                            <input type="text"name="password"value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : ''  ?>"/><br><hr>
                        Confirm Password:
                            <input type="text"name="confirm_password"value="<?php echo isset($_SESSION['confirmPassword']) ? $_SESSION['confirmPassword'] : ''  ?>"/><br><hr>
                            <fieldset>
                        <legend>Gender</legend>
                            <input type="radio"name="gender" <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=='Male') echo "checked" ?> value="male"/>Male
                            <input type="radio"name="gender" <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=='Female') echo "checked" ?> value="female"/>Female
                            <input type="radio"name="gender" <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=='Other') echo "checked" ?> value="other"/>Other<br>
                            </fieldset><hr>
                            <fieldset>
                            <legend>Date of Birth</legend>
                            <input type= "date"name="dob"value="<?php echo isset($_SESSION['dob']) ? $_SESSION['dob'] : ''  ?>"/><br>
                            </fieldset><hr>
                            <input type="submit" name="" value="submit"/>
                            <input type="reset" name="" value="reset"/>
                            </fieldset>
                    </td>
                            </tr>
                    </table>
                        </center>
                    </td>
                </tr>
                    <?php          
                    if(isset($_SESSION['submit'])) 
                                        {
                                            if($_SESSION['password'] != $_SESSION['confirmPassword'])
                                            {
                                                echo "Password does not match! Check again <br>";
                                                exit;
                                            } 
                                            
                                            foreach ($_SESSION as $key => $value) {
                                                if($key[0] != '#')
                                                if (!isset($_SESSION[$key]) or empty($value)) {
                                                    echo $key. " not set! <br>";     
                                                    break;                                               
                                                }
                                            }

                                            if(!isset($_SESSION['gender']))
                                            {
                                                echo "Gender not set!";
                                            }
                                            

                                        }
                                    ?>
                </form>
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