<?php
	require_once('../classes/products_class.php');

	$getID = $_GET['id'];
	$obj = new Products;
	$get_id = $obj->getProductByID($getID);
	$func = $obj->getCurrentProduct($get_id);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update Product</title>
</head>
<body>
	<h2>Update Section</h2>
	<form action="update_product_procedure.php" method="POST">
			
			<input type="text" name="id" value="<?=$func['id']?>"><br>
			
			group_id
			<input type="text" name="id_group" value="<?=$func['group_id']?>" /><br>

			sort_id
			<input type="text" name="id_sort" value="<?=$func['sort_id']?>" /><br>

			description
			<input type="text" name="desc" value="<?=$func['description']?>"/><br>

			model
			<input type="text" name="model" value="<?=$func['model']?>"/><br>

			param1
			<input type="text" name="param1" value="<?=$func['param1']?>"/><br>

			param2
			<input type="text" name="param2" value="<?=$func['param2']?>"/><br>

			param3
			<input type="text" name="param3" value="<?=$func['param3']?>"/><br>

			param4
			<input type="text" name="param4" value="<?=$func['param4']?>"/><br>

			param5
			<input type="text" name="param5" value="<?=$func['param5']?>"/><br>

			file_name
			<input type="text" name="file_name" value="<?=$func['file_name']?>"/><br>
			
			<br><br>

			<input type="submit"/ name="submit">
			<input type="button" onclick="history.back();" value="Назад"/>
	</form>
</body>
</html>