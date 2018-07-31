<?php
$module_name='SCO_Productos';
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
      'popup_module' => 'SCO_Productos',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'description' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_DESCRIPTION',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'pro_subtotal' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_PRO_SUBTOTAL',
      'width' => '10%',
      'default' => true,
    ),
    'pro_procentaje' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_PRO_PROCENTAJE',
      'width' => '10%',
      'default' => true,
    ),
    'pro_valor' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_PRO_VALOR',
      'width' => '10%',
      'default' => true,
    ),
    'pro_aux1' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PRO_AUX1',
      'width' => '10%',
      'default' => true,
    ),
  ),
);