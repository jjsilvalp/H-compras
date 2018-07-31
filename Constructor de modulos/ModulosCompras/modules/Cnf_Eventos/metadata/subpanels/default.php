<?php
$module_name='SCO_Cnf_Eventos';
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
      'popup_module' => 'SCO_Cnf_Eventos',
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
    'cnfev_evento' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_CNFEV_EVENTO',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'cnfev_modtrans' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_CNFEV_MODTRANS',
      'width' => '10%',
      'default' => true,
    ),
    'cnfev_diastrans' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_CNFEV_DIASTRANS',
      'width' => '10%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'SCO_Cnf_Eventos',
      'width' => '5%',
      'default' => true,
    ),
  ),
);