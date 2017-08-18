<?php

$hook_version = 1; 
$hook_array = Array(); 

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, 'datosOrdenCompra', 'custom/modules/SCO_OrdenCompra/datoso.php','Cldatoso', 'Fndatoso');
$hook_array['before_save'][] = Array(2, 'datosContactos', 'custom/modules/SCO_OrdenCompra/datosco.php','Cldatosco', 'Fndatosco');
$hook_array['before_save'][] = Array(3, 'datosAprobadores', 'custom/modules/SCO_OrdenCompra/datosap.php','Cldatosap', 'Fndatosap');
$hook_array['before_save'][] = Array(4, 'guarda productos', 'custom/modules/SCO_OrdenCompra/guadaprod.php','ClguardadatosO', 'Fnguardapro');

$hook_array['after_ui_frame'] = Array();
$hook_array['after_ui_frame'][] = Array(1, 'vistas de orden de compra con js', 'custom/modules/SCO_OrdenCompra/viewoc.php','Clviewoc', 'Fnviewoc');
$hook_array['after_ui_frame'][] = Array(2, 'actualiza productos', 'custom/modules/SCO_OrdenCompra/actproducto.php','Clactproducto', 'Fnactproducto');
?>