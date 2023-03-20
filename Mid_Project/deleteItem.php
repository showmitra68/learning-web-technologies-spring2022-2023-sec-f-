<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $item_to_delete = $_POST['menu_items'] ?? '';
  $menu_data = file_get_contents('menu.txt');
  $new_menu_data = '';
  $menu_items = explode("\n", $menu_data);
  foreach ($menu_items as $menu_item) {
    if (strpos($menu_item, $item_to_delete) !== false) {
      continue;
    }
    $new_menu_data .= $menu_item . "\n";
  }
  file_put_contents('menu.txt', $new_menu_data);
}
?>
