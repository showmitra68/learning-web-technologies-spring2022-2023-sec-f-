<?php 
    session_start();
    if(!isset($_SESSION['role']))
    {
        header('location: login.php');
    }
?>
<html>
    <body>
        <fieldset>
            <legend><h2>Delivery Man Dashboard</h2></legend>
        <h2>Legal Agreement</h2>
        <li><a href="legalpolicies.php">Legal Agreement</a></li><br>
            
        <button><a href="logout.php">Logout</a></button>
        </fieldset>
    </body>
</html>