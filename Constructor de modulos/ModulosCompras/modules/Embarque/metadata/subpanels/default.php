<?php
$module_name='SCO_Embarque';
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
      'popup_module' => 'SCO_Embarque',
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
    'emb_fechacrea' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_EMB_FECHACREA',
      'width' => '10%',
      'default' => true,
    ),
    'emb_origen' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_EMB_ORIGEN',
      'width' => '10%',
      'default' => true,
    ),
    'emb_modtra' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_EMB_MODTRA',
      'width' => '10%',
      'default' => true,
    ),
    'emb_peso' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_EMB_PESO',
      'width' => '10%',
      'default' => true,
    ),
    'emb_volumen' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_EMB_VOLUMEN',
      'width' => '10%',
      'default' => true,
    ),
    'emb_estado' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_EMB_ESTADO',
      'width' => '10%',
      'default' => true,
    ),
  ),
);