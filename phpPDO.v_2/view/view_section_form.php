<?php
	require_once('../classes/sections_class.php');
	$obj = new Section;
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
	<h1>Sections</h1>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>sort_id</th>
				<th>description</th>
				<th>viewmode</th>
				<th>Keywords</th>
				<th colspan="2">Control</th>
			</tr>
		</thead>
		<tbody>

			<?php 
				$result=$obj->viewSectionData(); 
			?>
			
		</tbody>
		
	</table>
	<br>
	<form action="../creating/create_section_form.php">
		<input type="submit" value="Add new">
	</form>
	<br>
	<input type="button" onclick="history.back();" value="Back"/>

</body>
</html>