<?php
$module_name = 'SCO_Aprobadores';
$listViewDefs [$module_name] = 
array (
  'APR_NOMBRE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_APR_NOMBRE',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'APR_TITULO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APR_TITULO',
    'width' => '10%',
    'default' => true,
  ),
  'APR_APRUEBA' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_APR_APRUEBA',
    'width' => '10%',
    'default' => true,
  ),
  'APR_FECHA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_APR_FECHA',
    'width' => '10%',
    'default' => true,
  ),
  'APR_COMENTA' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_APR_COMENTA',
    'sortable' => false,
    'width' => '10%',
  ),
  'APR_CASOPM' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APR_CASOPM',
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
