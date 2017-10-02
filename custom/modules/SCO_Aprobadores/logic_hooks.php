<?php

$hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1, 'datosAprobadores', 'custom/modules/SCO_Aprobadores/datosAprobadores.php','CldatosA', 'Fndatosa'); 
$hook_array['after_save'][] = Array(2, 'correlativoAprobadores', 'custom/modules/SCO_Aprobadores/correlativo.php','Clcorrelativo', 'Fncorrelativo');

?>