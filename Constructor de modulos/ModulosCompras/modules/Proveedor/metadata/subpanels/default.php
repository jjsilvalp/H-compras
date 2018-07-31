<?php
$module_name='SCO_Proveedor';
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
      'popup_module' => 'SCO_Proveedor',
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
    'prv_codaio' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PRV_CODAIO',
      'width' => '10%',
      'default' => true,
    ),
    'prv_email' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PRV_EMAIL',
      'width' => '10%',
      'default' => true,
    ),
    'prv_pais' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PRV_PAIS',
      'width' => '10%',
      'default' => true,
    ),
    'prv_tipo' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_PRV_TIPO',
      'width' => '10%',
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '45%',
      'default' => true,
    ),
  ),
);