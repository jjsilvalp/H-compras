<?php
$module_name='SCO_ProductosCompras';
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
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'proge_nompro' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PROGE_NOMPRO',
      'width' => '10%',
      'default' => true,
    ),
    'proge_descripcion' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_PROGE_DESCRIPCION',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'proge_unidad' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PROGE_UNIDAD',
      'width' => '10%',
      'default' => true,
    ),
    'proge_preciounid' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_PROGE_PRECIOUNID',
      'width' => '10%',
      'default' => true,
    ),
    'proge_negociacion' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_PROGE_NEGOCIACION ',
      'width' => '10%',
      'default' => true,
    ),
    'proge_tipopro' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PROGE_TIPOPRO',
      'width' => '10%',
      'default' => true,
    ),
    'proge_codaio' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PROGE_CODAIO',
      'width' => '10%',
      'default' => true,
    ),
  ),
);