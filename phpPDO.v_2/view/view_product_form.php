<?php
	require_once('../classes/products_class.php');
	$obj = new Products;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<style>
	th, td {
		padding: 10px;
	}
	th {
		background: #606060;
		color: #fff;
	}
	td {
		background: #b5b5b5;
	}
</style>
<body>
	<h1>Products</h1>
		<table>
			<thead>
				<tr>
					<th>id</th>
					<th>group_id</th>
					<th>sort_id</th>
					<th>description</th>
					<th>model</th>
					<th>param1</th>
					<th>param2</th>
					<th>param3</th>
					<th>param4</th>
					<th>param5</th>
					<th>file_name</th>
					<th colspan="2">Control</th>
				</tr>
			</thead>

			<tbody>
			<?php $obj->viewProductsData(); ?>
			</tbody>
		
		</table>
		<br>
		<form action="../creating/create_product_form.php">
			<input type="submit" value="Add new">
		</form>
		<br>
		<input type="button" onclick="history.back();" value="Back"/>

</body>
</html>

	