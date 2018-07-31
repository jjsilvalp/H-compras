<?php
$module_name='SCO_Aprobadores';
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
    'apr_nombre' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_APR_NOMBRE',
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
    'apr_titulo' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_APR_TITULO',
      'width' => '10%',
      'default' => true,
    ),
    'apr_aprueba' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_APR_APRUEBA',
      'width' => '10%',
      'default' => true,
    ),
    'apr_fecha' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_APR_FECHA',
      'width' => '10%',
      'default' => true,
    ),
    'apr_comenta' => 
    array (
      'type' => 'text',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_APR_COMENTA',
      'sortable' => false,
      'width' => '10%',
    ),
    'apr_casopm' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_APR_CASOPM',
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