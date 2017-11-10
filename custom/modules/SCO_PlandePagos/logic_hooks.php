<?php

$hook_version = 2; 
$hook_array = Array(); 
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, 'datosPP', 'custom/modules/SCO_PlandePagos/PlanPagos.php','PlanPagos', 'Fndatospp');
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(2, 'datosPP2', 'custom/modules/SCO_PlandePagos/PlanPagos2.php','PlanPagos2', 'Fndatospp2');  

$hook_array['after_relationship_delete'] = Array();
$hook_array['after_relationship_delete'][] = Array(1, 'datosPP eliminando la relacion', 'custom/modules/SCO_PlandePagos/DeletePP.php','ClDeletePP', 'FnDeletePP'); 
?>