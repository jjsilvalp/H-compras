<?php
$module_name='SCO_OrdenCompra';
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
      'popup_module' => 'SCO_OrdenCompra',
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
    'orc_nomcorto' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_ORC_NOMCORTO',
      'width' => '10%',
      'default' => true,
    ),
    'orc_tcinco' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_ORC_TCINCO',
      'width' => '10%',
      'default' => true,
    ),
    'orc_tcmoneda' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_ORC_TCMONEDA',
      'width' => '10%',
      'default' => true,
    ),
    'orc_fechaord' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_ORC_FECHAORD',
      'width' => '10%',
      'default' => true,
    ),
    'orc_importet' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_ORC_IMPORTET',
      'width' => '10%',
      'default' => true,
    ),
    'orc_estado' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'default' => true,
      'vname' => 'LBL_ORC_ESTADO',
      'width' => '10%',
    ),
  ),
);