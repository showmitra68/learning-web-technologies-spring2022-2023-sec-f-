<?php
$item_name = $_POST['item_name'];
$item_description = $_POST['item_description'];
$item_price = $_POST['item_price'];
$file = fopen("menu.txt", "a");
fwrite($file, "$item_name, $item_description, $item_price\n");
fclose($file);

echo "Item added to menu.";
?>