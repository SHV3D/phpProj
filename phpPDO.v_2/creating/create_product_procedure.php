<?php
require_once('../classes/products_class.php');
$obj = new Products;
$obj->createNewProduct();
header('Location: ../view/view_product_form.php');
?>