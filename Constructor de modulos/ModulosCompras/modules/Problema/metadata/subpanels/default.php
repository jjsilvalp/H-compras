<?php
$module_name='SCO_Problema';
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
    'prl_pri' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_PRL_PRI',
      'width' => '10%',
      'default' => true,
    ),
    'prl_estado' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PRL_ESTADO',
      'width' => '10%',
      'default' => true,
    ),
    'prl_cat' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PRL_CAT',
      'width' => '10%',
      'default' => true,
    ),
    'prl_fechav' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_PRL_FECHAV',
      'width' => '10%',
      'default' => true,
    ),
    'created_by_name' => 
    array (
      'type' => 'relate',
      'link' => true,
      'vname' => 'LBL_CREATED',
      'id' => 'CREATED_BY',
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Users',
      'target_record_key' => 'created_by',
    ),
    'prl_discu' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_PRL_DISCU',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'prl_reso' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_PRL_RESO',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'SCO_Problema',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'SCO_Problema',
      'width' => '5%',
      'default' => true,
    ),
  ),
);