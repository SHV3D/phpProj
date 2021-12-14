<?php
    
    require_once('../classes/products_class.php');
    $obj = new Products;
    $id_getter = $obj->getProductByID();
    $func = $obj->deleteCurrentProduct($id_getter);
    header('Location: ../view/view_product_form.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>
	
	
    HI
</body>
</html>