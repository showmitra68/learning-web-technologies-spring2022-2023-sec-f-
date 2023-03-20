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
            <legend><h2>Vendor Dashboard</h2></legend>
        <h2>Legal Agreement</h2>
        <li><a href="legalpolicies.php">Legal Agreement</a></li>
        <h2>Loyalty Points & Vouchers</h2>
            <ul>
                <li><a href="loyaltyProgram.php">Loyalty Program </a></li>
                <li><a href="voucher.php">Create Voucher</a></li>
                <li><a href="deleteVoucher.php">Delete Voucher</li>
            </ul>

        <h2>Restaurent Management</h2>
            
                <li><a href="restaurentManagement.php">Restaurent Management </a></li>

        <h2>Restaurent Offer</h2>
            
                <li><a href="restaurentOffer.php">Restaurent Offer </a></li>

        <h2>Events</h2>
                <ul>
                    <li><a href="events.php">Events</a></li>
                </ul>

                <a href="logout.php">Logout</a>
                </fieldset>
    </body>
</html>