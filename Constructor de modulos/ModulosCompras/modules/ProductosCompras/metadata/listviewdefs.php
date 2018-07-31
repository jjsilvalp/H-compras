<?php
$module_name = 'SCO_ProductosCompras';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PROGE_NOMPRO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROGE_NOMPRO',
    'width' => '10%',
    'default' => true,
  ),
  'PROGE_UNIDAD' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROGE_UNIDAD',
    'width' => '10%',
    'default' => true,
  ),
  'SCO_PROVEEDOR_SCO_PRODUCTOSCOMPRAS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_PROVEEDOR_SCO_PRODUCTOSCOMPRAS_FROM_SCO_PROVEEDOR_TITLE',
    'id' => 'SCO_PROVEEDOR_SCO_PRODUCTOSCOMPRASSCO_PROVEEDOR_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'PROGE_PRECIOUNID' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PROGE_PRECIOUNID',
    'width' => '10%',
    'default' => true,
  ),
  'PROGE_CODAIO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROGE_CODAIO',
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
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'PROGE_TIPOPRO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROGE_TIPOPRO',
    'width' => '10%',
    'default' => false,
  ),
);
?>
