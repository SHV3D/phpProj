<?php
	require_once('../classes/sections_class.php');

	$getID = $_GET['id'];
	$obj = new Section;
	$id_getter = $obj->getSectionByID($getID);
	$func = $obj->getCurrentSection($id_getter);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update Section</title>
</head>
<body>
	<h2>Update Section</h2>
	<form action="update_section_procedure.php" method="POST">
			
			<input type="hidden" name="id" value="<?=$func['id']?>"><br>
			
			sort_id
			<input type="text" name="sort_id" value="<?=$func['sort_id']?>" /><br>

			description
			<input type="text" name="description" value="<?=$func['description']?>"/><br>

			viewmode
			<input type="text" name="viewmode" value="<?=$func['viewmode']?>"/><br>

			Keywords
			<input type="text" name="Keywords" value="<?=$func['Keywords']?>"/>

			<br><br>

			<input type="submit"/ name="submit">
			<input type="button" onclick="history.back();" value="Назад"/>
	</form>
</body>
</html>