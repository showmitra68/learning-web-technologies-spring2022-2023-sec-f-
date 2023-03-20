<html>
  <head>
    <title> Manage Menu</title>
  </head>
  <body>
    <h1>Manage Menu</h1>
    <p>Welcome to the menu management page. Here you can add, edit, and delete items from your menu.</p>
    <h2>Add Item</h2>
    <form method="post" action="addItem.php">
      <label for="item_name">Item Name:</label>
      <input type="text" id="item_name" name="item_name"><br><br>
      <label for="item_description">Item Description:</label>
      <textarea id="item_description" name="item_description"></textarea><br><br>
      <label for="item_price">Item Price:</label>
      <input type="text" id="item_price" name="item_price"><br><br>
      <input type="submit" value="Add Item">
    </form>
    <h2>Edit Item</h2>
    <p>Select an item from the menu below to edit its details:</p>
    <form method="post" action="editItem.php">
      <select id="menu_items" name="menu_items">
        <option value="item_1">Item 1</option>
        <option value="item_2">Item 2</option>
        <option value="item_3">Item 3</option>
      </select><br><br>
      <label for="new_item_name">New Item Name:</label>
      <input type="text" id="new_item_name" name="new_item_name"><br><br>
      <label for="new_item_description">New Item Description:</label>
      <textarea id="new_item_description" name="new_item_description"></textarea><br><br>
      <label for="new_item_price">New Item Price:</label>
      <input type="text" id="new_item_price" name="new_item_price"><br><br>
      <input type="submit" value="Save Changes">
    </form>
    <h2>Delete Item</h2>
    <p>Select an item from the menu below to delete:</p>
    <form method="post" action="deleteItem.php">
      <select id="menu_items" name="menu_items">
        <option value="item_1">Item 1</option>
        <option value="item_2">Item 2</option>
        <option value="item_3">Item 3</option>
      </select><br><br>
      <input type="submit" value="Delete Item">
    </form>
  </body>
</html>
