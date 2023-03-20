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
            <legend><h2>Customer Dashboard</h2></legend>
        <h2>Legal Agreement</h2>
        <li><a href="legalpolicies.php">Legal Agreement</a></li>

        <h2>Loyalty Points & Vouchers</h2>
            <ul>
                <li><a href="currentVoucher.php">View Current Voucher</a></li>
                <li><a href="viewProgram.php">View Current Program</li>
                <li><a href="pointRedemtion.php">Point Redemtion </a></li>
            </ul>
        <h2>Upcoming Event</h2>
            <ul>
                <li><a href="upcomingEvent.php"> Upcoming Event </a></li>
            </ul>
            <button><a href="logout.php">Logout</a></button>
            </fieldset>
    </body>
</html>