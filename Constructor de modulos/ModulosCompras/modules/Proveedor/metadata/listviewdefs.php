<?php
$module_name = 'SCO_Proveedor';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PRV_MONR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRV_MONR',
    'width' => '10%',
    'default' => true,
  ),
  'PRV_CODAIO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRV_CODAIO',
    'width' => '10%',
    'default' => true,
  ),
  'PRV_EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRV_EMAIL',
    'width' => '10%',
    'default' => true,
  ),
  'PRV_PAIS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRV_PAIS',
    'width' => '10%',
    'default' => true,
  ),
  'PRV_CALIFICACION' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PRV_CALIFICACION',
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
  'PRV_TIPO' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PRV_TIPO',
    'width' => '10%',
  ),
  'PRV_DIVISION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PRV_DIVISION',
    'width' => '10%',
    'default' => false,
  ),
  'PRV_CIUDAD' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRV_CIUDAD',
    'width' => '10%',
    'default' => false,
  ),
  'PRV_FAX' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PRV_FAX',
    'width' => '10%',
    'default' => false,
  ),
  'PRV_MOVIL' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PRV_MOVIL',
    'width' => '10%',
    'default' => false,
  ),
  'PRV_TEL' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PRV_TEL',
    'width' => '10%',
    'default' => false,
  ),
  'PRV_ESTADO' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PRV_ESTADO',
    'width' => '10%',
  ),
);
?>
