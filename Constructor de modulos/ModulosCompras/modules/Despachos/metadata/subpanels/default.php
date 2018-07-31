<?php
$module_name='SCO_Despachos';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'SCO_Despachos',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'des_origen' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_DES_ORIGEN',
      'width' => '10%',
      'default' => true,
    ),
    'des_modtrans' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_DES_MODTRANS',
      'width' => '10%',
      'default' => true,
    ),
    'des_diastrans' => 
    array (
      'type' => 'int',
      'default' => true,
      'vname' => 'LBL_DES_DIASTRANS',
      'width' => '10%',
    ),
    'des_fechaprev' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_DES_FECHAPREV',
      'width' => '10%',
      'default' => true,
    ),
    'des_prioridad' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_DES_PRIORIDAD',
      'width' => '10%',
      'default' => true,
    ),
    'eventos' => 
    array (
      'vname' => 'Eventos',
      'widget_class' => 'SubPanelDespachos',
      'width' => '30%',
      'default' => true,
    ),
    'des_est' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_DES_EST',
      'width' => '10%',
    ),
    'cantida' => 
    array (
      'vname' => 'Cantidad',
      'widget_class' => 'SubPanelDespachosCantidad',
      'width' => '30%',
      'default' => true,
    ),
    'eliminar' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelEliminar',
      'module' => 'SCO_Despachos',
      'width' => '5%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'SCO_Despachos',
      'width' => '5%',
      'default' => true,
    ),
  ),
);