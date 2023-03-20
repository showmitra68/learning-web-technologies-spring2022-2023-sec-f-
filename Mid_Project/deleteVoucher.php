<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $voucherCode = $_POST['voucher_code'];

    $filename = 'vouchers.txt';
    $tempFilename = 'vouchers.tmp';
    $file = fopen($filename, 'r');
    $tempFile = fopen($tempFilename, 'w');
    while (($line = fgets($file)) !== false) {
        $fields = explode(',', $line);
        if ($fields[0] !== $voucherCode) {
            fwrite($tempFile, $line);
        }
    }
    fclose($file);
    fclose($tempFile);
    unlink($filename);
    rename($tempFilename, $filename);
}

?>
<?php
$filename = 'vouchers.txt';
if (file_exists($filename)) {
    $file = fopen($filename, 'r');
    while (($line = fgets($file)) !== false) {
        $fields = explode(',', $line);
        echo '<p>Voucher Code: ' . $fields[0] . '</p>';
        echo '<p>Discount Amount: ' . $fields[1] . '</p>';
        echo '<p>Minimum Spent: ' . $fields[2] . '</p>';
        echo '<form action="deleteVoucher.php" method="post">';
        echo '<input type="hidden" name="voucher_code" value="' . $fields[0] . '">';
        echo '<button type="submit">Delete</button>';
        echo '</form><br>';
    }
    fclose($file);
} else {
    echo '<p>No vouchers found.</p>';
}
?>
