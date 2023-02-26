<?php
    session_start();
    if(isset($_REQUEST['submit']) && $_REQUEST['username'] == $_SESSION['#username'] && $_REQUEST['password'] == $_SESSION['#password'])
    {
        if(isset($_REQUEST['rememberme']))
        {
            $_SESSION['expires'] = time()+36000;
        }else
        {
            $_SESSION['expires'] = time()+50;
        }
        $_SESSION['loggedin'] = true;
        unset($_SESSION['upw']);
        unset($_SESSION['lusername']);
        header('Location: dashboard.php');   
    }else 
    {
        unset($_SESSION['rememberme']);
        $_SESSION['upw'] = true;
        $_SESSION['lusername'] = $_REQUEST['username'];
        header('Location: login.php');
    }
?>