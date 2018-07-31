<?php
$module_name='SCO_ProyectosCO';
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
      'popup_module' => 'SCO_ProyectosCO',
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
    'proyc_nomproy' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PROYC_NOMPROY',
      'width' => '10%',
      'default' => true,
    ),
    'proyc_cenben' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PROYC_CENBEN',
      'width' => '10%',
      'default' => true,
    ),
    'proyc_centcost' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PROYC_CENTCOST',
      'width' => '10%',
      'default' => true,
    ),
    'proyc_division' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_PROYC_DIVISION',
      'width' => '10%',
      'default' => true,
    ),
  ),
);