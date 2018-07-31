<?php
$module_name='SCO_FacturasProveedor';
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
      'popup_module' => 'SCO_FacturasProveedor',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'document_name' => 
    array (
      'name' => 'document_name',
      'vname' => 'LBL_LIST_DOCUMENT_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'fpv_fechafactura' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FPV_FECHAFACTURA',
      'width' => '10%',
      'default' => true,
    ),
    'fpv_fechavenc' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FPV_FECHAVENC',
      'width' => '10%',
      'default' => true,
    ),
    'fpv_importe' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_FPV_IMPORTE',
      'width' => '10%',
      'default' => true,
    ),
    'fpv_tipo' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_FPV_TIPO',
      'width' => '10%',
      'default' => true,
    ),
    'fpv_estado' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_FPV_ESTADO',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'SCO_FacturasProveedor',
      'width' => '5%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'SCO_FacturasProveedor',
      'width' => '5%',
      'default' => true,
    ),
  ),
);