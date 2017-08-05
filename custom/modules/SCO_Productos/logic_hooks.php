<?php 
$hook_version = 1; 
$hook_array = Array(); 

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, 'Productos', 'custom/modules/SCO_Productos/Productos.php','Productos', 'Fnproductos');
$hook_array['before_save'][] = Array(2, 'Productos a', 'custom/modules/SCO_Productos/Productos.php','Productos', 'FnDeproductos');
$hook_array['before_save'][] = Array(3, 'nombreoc', 'custom/modules/SCO_Productos/Productos.php','Productos', 'FnNomOC');

$hook_array['after_relationship_delete'][] = Array();
$hook_array['after_relationship_delete'][] = Array(1, 'DeProductos', 'custom/modules/SCO_Productos/Productos.php','Productos', 'FnDeproductos');
?>