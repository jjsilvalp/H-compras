<?php
$module_name = 'SCO_Embarque';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'EMB_ORIG' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMB_ORIG',
    'width' => '10%',
    'default' => true,
  ),
  'EMB_TRANSP' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMB_TRANSP',
    'width' => '10%',
    'default' => true,
  ),
  'EMB_CANTCONT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMB_CANTCONT',
    'width' => '10%',
    'default' => true,
  ),
  'EMB_ESTADO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_EMB_ESTADO',
    'width' => '10%',
    'default' => true,
  ),
  'EMB_PORESPACIO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMB_PORESPACIO',
    'width' => '10%',
    'default' => true,
  ),
  'EMB_PESO' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EMB_PESO',
    'width' => '10%',
    'default' => true,
  ),
  'EMB_VOLUMEN' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EMB_VOLUMEN',
    'width' => '10%',
    'default' => true,
  ),
  'EMB_DIASTRAN' => 
  array (
    'type' => 'int',
    'label' => 'LBL_EMB_DIASTRAN',
    'width' => '10%',
    'default' => false,
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
