<?php
require_once('../classes/sections_class.php');
$obj = new Section;
$obj->createNewSection();
header('Location: ../view/view_section_form.php');
?>