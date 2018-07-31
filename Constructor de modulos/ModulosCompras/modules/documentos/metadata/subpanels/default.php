<?php
$module_name='SCO_documentos';
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
    'filename' => 
    array (
      'type' => 'file',
      'vname' => 'LBL_FILENAME',
      'width' => '10%',
      'default' => true,
    ),
    'doc_tipo' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_DOC_TIPO',
      'width' => '10%',
    ),
    'doc_descipcion' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_DOC_DESCIPCION',
      'sortable' => false,
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