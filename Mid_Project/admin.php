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
            <legend><h2>Admin Dashboard</h2></legend>

        <h2>Loyalty Points & Vouchers</h2>
            <ul>
                <li><a href="index.php">Loyalty Program </a></li>
                <li><a href="currentProgram.php">View Current Program</li>
                <li><a href="voucher.php">Create Voucher</a></li>
                <li><a href="deleteVoucher.php">Delete Voucher</li>
            </ul>

        <h2>Events</h2>
                <ul>
                    <li><a href="events.php">Events</a></li>
                </ul>

                <button><a href="logout.php">Logout</a></button>
        </fieldset>
    </body>
</html>