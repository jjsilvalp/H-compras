<?php
$module_name='SCO_ProductosCotizados';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'SCO_ProductosCotizados',
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
    'pro_descripcion' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_PRO_DESCRIPCION',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'pro_unidad' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PRO_UNIDAD',
      'width' => '10%',
      'default' => true,
    ),
    'pro_cantidad' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_PRO_CANTIDAD',
      'width' => '10%',
      'default' => true,
    ),
    'pro_preciounid' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_PRO_PRECIOUNID',
      'width' => '10%',
      'default' => true,
    ),
    'pro_descval' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_PRO_DESCVAL',
      'width' => '10%',
      'default' => true,
    ),
    'pro_descpor' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_PRO_DESCPOR',
      'width' => '10%',
      'default' => true,
    ),
    'pro_subtotal' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PRO_SUBTOTAL',
      'width' => '10%',
      'default' => true,
    ),
    'pro_canttrans' => 
    array (
      'type' => 'float',
      'vname' => 'LBL_PRO_CANTTRANS',
      'width' => '10%',
      'default' => true,
    ),
    'pro_cantresivida' => 
    array (
      'type' => 'float',
      'vname' => 'LBL_PRO_CANTRESIVIDA',
      'width' => '10%',
      'default' => true,
    ),
    'pro_saldos' => 
    array (
      'type' => 'float',
      'vname' => 'LBL_PRO_SALDOS',
      'width' => '10%',
      'default' => true,
    ),
  ),
);