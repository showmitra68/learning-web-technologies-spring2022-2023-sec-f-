<?php
    session_start();
    $allFieldsFilled = true;
    foreach ($_REQUEST as $key => $value) {
        if (!isset($_REQUEST[$key]) or empty($value)) {
            $allFieldsFilled = false;
            break;
        }
    }
    if ($allFieldsFilled && isset($_REQUEST['submit']) && $_REQUEST['currentpassword'] == $_SESSION['#password'] && $_REQUEST['password'] == $_REQUEST['confirmnewpassword']) {
        $_SESSION['#password'] = $_SESSION['#confirmpassword'] = $_REQUEST['password'];
        $_SESSION['pwChangeStatus'] = true;
    }else
    {
        $_SESSION['pwChangeStatus'] = false;
    }
    header('Location: changepassword.php');
?>