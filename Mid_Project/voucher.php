<html>
    <body>
        <pre>
            <fieldset>
                <legend><h1>Voucher</h1></legend>
                <form action="voucher.php" method="post">
                       Voucher Code: <input type="text" name="voucher_code"><br>
                    Discount Amount: <input type="number" name="discount_amount"><br>
                      Minimum Spent: <input type="number" name="minimum_spent"><br><br>
                    <button type="submit">Apply</button>
                </form>
                <a href="currentVoucher.php">Current Voucher</a>
            </fieldset>
        </pre>
    </body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $voucherCode = $_POST['voucher_code'];
    $discountAmount = $_POST['discount_amount'];
    $minimumSpent = $_POST['minimum_spent'];

    $filename = 'vouchers.txt';
    $file = fopen($filename, 'a');
    fwrite($file, $voucherCode . ',' . $discountAmount . ',' . $minimumSpent . PHP_EOL);
    fclose($file);
}
?>
