<?php
$module_name='SCO_DocumentoDespacho';
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
      'popup_module' => 'SCO_DocumentoDespacho',
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
    'file_ext' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_FILE_EXTENSION',
      'width' => '10%',
      'default' => true,
    ),
    'description' => 
    array (
      'type' => 'text',
      'vname' => 'LBL_DESCRIPTION',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'status' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_DOC_STATUS',
      'width' => '10%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'SCO_DocumentoDespacho',
      'width' => '5%',
      'default' => true,
    ),
  ),
);