<?php
$module_name='SCO_ProductosDespachos';
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
      'popup_module' => 'SCO_ProductosDespachos',
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
    'prdes_descripcion' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PRDES_DESCRIPCION',
      'width' => '10%',
      'default' => true,
    ),
    'cantidad' => 
    array (
      'vname' => 'Cantidad',
      'widget_class' => 'SubPanelEditProdDesp',
      'width' => '5%',
      'default' => true,
    ),
    'precio' => 
    array (
      'vname' => 'Precio Unidad',
      'widget_class' => 'SubPanelEditProdDespPrec',
      'width' => '5%',
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