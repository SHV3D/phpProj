<?php
	require_once('../classes/sections_class.php');
	$obj = new Section;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Добавление раздела</title>
</head>
<body>
	<div class="addSection">
		<h2>Добавление нового раздела</h2>
		<form action="create_section_procedure.php" method="POST">
		sort_id
		<input type="text" name="sort_id"/>
		description
		<input type="text" name="description"/>
		viewmode
		<input type="text" name="viewmode"/>
		Keywords
		<input type="text" name="Keywords"/>
		<input type="submit" value="Добавить" name="add"/>
		</form>
	</div>
	<br/>
	<br/>
	<input type="button" onclick="history.back();" value="Назад"/>
</body>
</html>