<?php
require_once('../models/productmodel.php');
if (deleteProduct($_GET['id'])) {
    header('location: productList.php');
}