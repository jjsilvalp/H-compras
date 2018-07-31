<?php
$module_name='SCO_Contactos';
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
    'con_nombre' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_CON_NOMBRE',
      'id' => 'USER_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Users',
      'target_record_key' => 'user_id_c',
    ),
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'con_cargo' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_CON_CARGO',
      'width' => '10%',
      'default' => true,
    ),
    'con_email' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_CON_EMAIL',
      'width' => '10%',
      'default' => true,
    ),
    'con_telefono' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_CON_TELEFONO',
      'width' => '10%',
      'default' => true,
    ),
    'con_movil' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_CON_MOVIL',
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