<html>
    <head>
        <title>Registration</title>
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
                        <form >
                                    <fieldset>
                                        <table>
                                        <legend>REGISTRATION</legend>
                                        <table>
                                            <tr>
                                                <td>Name <hr> </td>
                                                <td>:<input type="text" name="name" value=""/> <hr></td>
                                            </tr>
                                                
                                            <tr>
                                                <td>Email<hr></td>
                                                <td>:<input type="email" name="email" value=""/><hr>
                                            </tr>
                                            <tr>
                                                <td>Username<hr></td>
                                                <td>:<input type="text" name="userName" value=""/><hr> </td>
                                            </tr>
                                            <tr>
                                                <td>Password<hr></td>
                                                <td>:<input type="password" name="password" value=""/><hr> </td>
                                            </tr>
                                            <tr>
                                                <td>Confirm Password<hr></td>
                                                <td>:<input type="password" name="confirmPassword" value=""/> <hr> </td>
                                            </tr>
                                        </table>
                                        <fieldset>
                                            <Legend>Gender</Legend>
                                                <input type="radio" name="gender" value="Male"/> Male
                                                <input type="radio" name="gender" value="Female"/> Female
                                                <input type="radio" name="gender" value="Other"/> Other 
                                        </fieldset><hr>
                                        <h1></h1>
                                        <fieldset>
                                        <Legend>Date of Birth</Legend>
                                                <input type="date" name="dob" value=""/> 
                                                    </fieldset> 
                                                    <h1></h1>
                                    <input type="submit" name="submit" value="Submit"/>
                                    <input type="reset" name="reset" value="Reset">
                                        </table>
                            </fieldset>
                        </form>      
                    </td>
                </tr>
                <tr height =35>
                    <td align="center">Copyright © 2017</td>
                </tr>
            </table>
        </center>
    </body>
</html>