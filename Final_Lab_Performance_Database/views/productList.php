<?php

require_once('../models/productmodel.php');
$result = getAllProducts();
$count = mysqli_num_rows($result);

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Product List</title>
</head>
<body>
    <fieldset>
        <legend><h2>Display</h2></legend>
    <table border="1" align="center">
        <tr>
            <th>NAME</th>
            <th>PROFIT</th>
            <th>&nbsp;</th>
        </tr>
        <?php while ($data = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $data['product_name'] ?></td>
                <td><?= ((int)$data['product_selling_price'] - (int)$data['product_buying_price']); ?></td>
                <td>
                    <a href="editproduct.php?id=<?php echo $data['id']; ?>"> EDIT </a> |
                    <a href="confirm_delete.php?id=<?php echo $data['id']; ?>"> DELETE</a>
                </td>
            </tr>
        <?php 
        } 
        ?>
        </fieldset>
    </table>
</body>
</html>