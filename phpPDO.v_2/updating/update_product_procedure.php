<?php
	require_once('../classes/products_class.php');

	$obj = new Products;
	$poster = $_POST['id'];
	$func = $obj->updateCurrentProduct($poster);

	header('Location: ../view/view_product_form.php');
?>