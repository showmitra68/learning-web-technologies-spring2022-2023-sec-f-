<?php
    session_start();
    if(isset($_SESSION['loggedin']))
    {
        unset($_SESSION['loggedin']);
        unset($_SESSION['rememberme']);
        header('Location: home.php');
    }else
    {
        header('Location: home.php');
    }
?>