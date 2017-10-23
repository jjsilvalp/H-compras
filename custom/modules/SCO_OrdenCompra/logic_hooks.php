<?php

$hook_version = 3; 
$hook_array = Array(); 
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1, 'datosOrdenCompra', 'custom/modules/SCO_OrdenCompra/datoso.php','Cldatoso', 'Fndatoso');
$hook_array['after_save'][] = Array(2, 'datosContactos', 'custom/modules/SCO_OrdenCompra/datosco.php','Cldatosco', 'Fndatosco');
$hook_array['after_save'][] = Array(3, 'datosAprobadores', 'custom/modules/SCO_OrdenCompra/datosap.php','Cldatosap', 'Fndatosap');
$hook_array['after_save'][] = Array(4, 'contactosAprobadores', 'custom/modules/SCO_OrdenCompra/contap.php','Clcontap', 'Fncontap');

#$hook_array['after_save'][] = Array(5, 'clonarOrdenCompraModulos', 'custom/modules/SCO_OrdenCompra/clonar.php', 'Clclonar', 'Fnclonarmod');

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, 'clonarOrdeCompra', 'custom/modules/SCO_OrdenCompra/clonar.php','Clclonar', 'Fnclonar');

$hook_array['after_ui_frame'] = Array();
$hook_array['after_ui_frame'][] = Array(1, 'vistas de orden de compra con js', 'custom/modules/SCO_OrdenCompra/viewoc.php','Clviewoc', 'Fnviewoc');
?>

