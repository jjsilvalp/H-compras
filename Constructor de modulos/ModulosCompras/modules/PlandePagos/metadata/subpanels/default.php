<?php
$module_name='SCO_PlandePagos';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'ppg_fecha' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_PPG_FECHA',
      'width' => '10%',
      'default' => true,
    ),
    'ppg_tipo' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_PPG_TIPO',
      'width' => '10%',
    ),
    'ppg_porc' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_PPG_PORC',
      'width' => '10%',
      'default' => true,
    ),
    'ppg_monto' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_PPG_MONTO',
      'width' => '10%',
      'default' => true,
    ),
    'ppg_moneda' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PPG_MONEDA',
      'width' => '10%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'width' => '5%',
      'vname' => 'LBL_REMOVE',
      'default' => true,
      'widget_class' => 'SubPanelRemoveButton',
    ),
  ),
);