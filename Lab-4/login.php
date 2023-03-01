<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <center>
        <table border ="1" height="650" width="750">
            <tr height=80>
                <td >
                     <table width = "750">
                        <tr>
                            <td>
                                <img height="80" src="Company.JPEG">
                            </td>
                            <td align="right">
                                <a href="home.php">Home</a>  
                                <a href="login.php">| Login</a>   
                                <a href="registration.php">| Registration</a>  
                            </td>    
                        </tr>    
                    </table>
                    
                </td>
            </tr>
            <tr>
                <td>
                    <center>
                        <table width="400" height="150">
                            <tr>
                                <td>
                                    <form method="POST" action="loginChk.php"  >
                                        <fieldset>
                                            <legend>LOGIN</legend>
                                                Username : <input type="text" name="username" value=""/> <br>
                                                Password : <input type="password" name="password" value=""/> <br> <hr>
                                                <input type="radio" name="rememberme" value=""/> Remember Me <br/><br>
                                                <input type="submit" name="submit" value="Submit"/>
                                                <a href="forgotPass.php">Forgot Password?</a>  
                                        </fieldset>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </center>
                </td>
            </tr>
            <tr height =35>
                <td align="center">Copyright © 2017</td>
            </tr>
        </table>
    </center>
    </body>
</html>