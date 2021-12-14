<?php
    
    require_once('../classes/sections_class.php');
    $obj = new Section;
    $id_getter = $obj->getSectionByID();
    $func = $obj->deleteCurrentSection($id_getter);
    
    header('Location: ../view/view_section_form.php');
    //$func = $obj->getCurrentSection($id_getter);
    //var_dump($id_getter);

?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>
	
	
    HI
</body>
</html>