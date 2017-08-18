<?php 
$hook_version = 1; 
$hook_array = Array(); 

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, 'Productos', 'custom/modules/SCO_Productos/Productos.php','ClProductos', 'Fnproductos');
$hook_array['before_save'][] = Array(2, 'Productos a', 'custom/modules/SCO_Productos/Deproductos.php','ClDeproductos', 'FnDeproductos');
$hook_array['before_save'][] = Array(3, 'nombreoc', 'custom/modules/SCO_Productos/NomOC.php','ClNomOC', 'FnNomOC');
$hook_array['before_save'][] = Array(4, 'actualizapp', 'custom/modules/SCO_Productos/ActualizaPP.php','ClActualizaPP', 'FnActualizaPP');

$hook_array['after_relationship_delete'][] = Array();
$hook_array['after_relationship_delete'][] = Array(1, 'DeProductos', 'custom/modules/SCO_Productos/Deproductos.php','ClDeproductos', 'FnDeproductos');
$hook_array['after_relationship_delete'][] = Array(2, 'Deactualizapp', 'custom/modules/SCO_Productos/ActualizaPP.php','ClActualizaPP', 'FnActualizaPP');
?>