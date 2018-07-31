<?php
$module_name = 'SCO_ProductosDespachos';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PRDES_DESCRIPCION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRDES_DESCRIPCION',
    'width' => '10%',
    'default' => true,
  ),
  'PRDES_CANTIDAD' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PRDES_CANTIDAD',
    'width' => '10%',
    'default' => true,
  ),
  'PRDES_UNIDAD' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRDES_UNIDAD',
    'width' => '10%',
    'default' => true,
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
  'IDDIVISION_C' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_IDDIVISION_C',
    'width' => '10%',
    'default' => false,
  ),
  'IDREGIONAL_C' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_IDREGIONAL_C',
    'width' => '10%',
    'default' => false,
  ),
);
?>
