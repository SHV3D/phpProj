<?php
	require_once('../classes/products_class.php');
	$obj = new Products;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Добавление продукции</title>
</head>
<body>
	<div class="addProduct">
		<h2>Добавление нового продукта</h2>
		<form action="create_product_procedure.php" method="POST">
		group_id
		<input type="text" name="group_id"/><br>
		sort_id
		<input type="text" name="sort_id"/><br>
		description
		<input type="text" name="description"/><br>
		model
		<input type="text" name="model"/><br>
		param1
		<input type="text" name="param1"/><br>
		param2
		<input type="text" name="param2"/><br>
		param3
		<input type="text" name="param3"/><br>
		param4
		<input type="text" name="param4"/><br>
		param5
		<input type="text" name="param5"/><br>
		file_name
		<input type="text" name="file_name"/><br><br>
		<input type="submit" value="Добавить" name="add"/>
		</form>
	</div>
	<br/>
	<input type="button" onclick="history.back();" value="Назад"/>
</body>
</html>