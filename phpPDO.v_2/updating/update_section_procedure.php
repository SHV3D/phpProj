<?php
	require_once('../classes/sections_class.php');

	$getID = $_GET['id'];
	$obj = new Section;
	$func = $obj->updateCurrentSection();

	header('Location: ../view/view_section_form.php');
?>