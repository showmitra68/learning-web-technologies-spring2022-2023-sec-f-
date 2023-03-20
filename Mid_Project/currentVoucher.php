<?php
$filename = 'vouchers.txt';
if (file_exists($filename)) {
    $file = fopen($filename, 'r');
    while (($line = fgets($file)) !== false) {
        $fields = explode(',', $line);
        echo '<p>Voucher Code: ' . $fields[0] . '</p>';
        echo '<p>Discount Amount: ' . $fields[1] . '</p>';
        echo '<p>Minimum Spent: ' . $fields[2] . '</p><br>';
    }
    fclose($file);
} else {
    echo '<p>No vouchers found.</p>';
}
?>
