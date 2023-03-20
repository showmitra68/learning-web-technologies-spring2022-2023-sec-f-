<?php
$menu_data = file_get_contents('menu.txt');
$menu_items = explode("\n", $menu_data);
foreach ($menu_items as $menu_item) {
  $fields = explode(",", $menu_item);
  $item_name = $fields[0] ?? '';
  $item_description = $fields[1] ?? '';
  $item_price = $fields[2] ?? '';

  echo "<tr><td>{$item_name}</td><td>{$item_description}</td><td>{$item_price}</td></tr>";
}
?>
