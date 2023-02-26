<html>
    <head><title>Registration Check</title></head>

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
                            <?php
                session_start();
                $allFieldsFilled = true;
                foreach ($_REQUEST as $key => $value) {
                    $_SESSION[$key] = $value;
                    $_SESSION['#'.$key] = $value;
                    if (!isset($_REQUEST[$key]) or empty($value)) {
                        $allFieldsFilled = false;
                    }
                }

                if ($allFieldsFilled && isset($_REQUEST['submit']) && $_REQUEST['password'] == $_REQUEST['confirmpassword'] && isset($_REQUEST['gender'])) {
                    foreach ($_REQUEST as $key => $value) {
                        if($key[0] == '#') continue;
                        unset($_SESSION[$key]);
                    }
                ?>
                    <h3>Registration Completed!!</h3>
                    <a href="login.php"><i>Login now</i></a>
                    <?php
                } else {
                    header('Location: registration.php');
                    exit;
                }
                ?>
                    </td>
                            </tr>
                    </table>
                        </center>
                    </td>
                </tr>
                    <?php          
                    if(isset($_SESSION['submit'])) 
                                        {
                                            if($_SESSION['password'] != $_SESSION['confirmpassword'])
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