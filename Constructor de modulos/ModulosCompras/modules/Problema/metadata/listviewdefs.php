<?php
$module_name = 'SCO_Problema';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PRL_PRI' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PRL_PRI',
    'width' => '10%',
    'default' => true,
  ),
  'PRL_CAT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRL_CAT',
    'width' => '10%',
    'default' => true,
  ),
  'PRL_FECHAV' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PRL_FECHAV',
    'width' => '10%',
    'default' => true,
  ),
  'PRL_DISCU' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_PRL_DISCU',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'PRL_RESO' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_PRL_RESO',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'SCO_EVENTOS_SCO_PROBLEMA_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_EVENTOS_SCO_PROBLEMA_FROM_SCO_EVENTOS_TITLE',
    'id' => 'SCO_EVENTOS_SCO_PROBLEMASCO_EVENTOS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'PRL_PROP' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PRL_PROP',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'PRL_ASIG' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PRL_ASIG',
    'id' => 'USER_ID1_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'PRL_ESTADO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRL_ESTADO',
    'width' => '10%',
    'default' => false,
  ),
);
?>
