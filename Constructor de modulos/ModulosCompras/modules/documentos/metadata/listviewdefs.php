<?php
$module_name = 'SCO_documentos';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DOC_FECHA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DOC_FECHA',
    'width' => '10%',
    'default' => true,
  ),
  'DOC_DOCUMENTO' => 
  array (
    'type' => 'image',
    'studio' => 'visible',
    'width' => '1%',
    'label' => 'LBL_DOC_DOCUMENTO',
    'default' => true,
  ),
  'DOC_TIPO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DOC_TIPO',
    'width' => '10%',
  ),
  'DOC_DESCIPCION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DOC_DESCIPCION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>
