<?php 
$hook_version = 1; 
$hook_array = Array(); 

$hook_array['after_ui_frame'] = Array();
$hook_array['after_ui_frame'][] = Array(1, 'vistas de proveedor con js', 'custom/modules/SCO_Proveedor/ProveedorView.php','ProveedorView', 'fnview'); 
?>