<?php
$module_name = 'SCO_OrdenCompra';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'SCO_PROVEEDOR_SCO_ORDENCOMPRA_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_PROVEEDOR_SCO_ORDENCOMPRA_FROM_SCO_PROVEEDOR_TITLE',
    'id' => 'SCO_PROVEEDOR_SCO_ORDENCOMPRASCO_PROVEEDOR_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ORC_TCINCO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ORC_TCINCO',
    'width' => '10%',
    'default' => true,
  ),
  'ORC_FECHAORD' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ORC_FECHAORD',
    'width' => '10%',
    'default' => true,
  ),
  'ORC_TIEMPO' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ORC_TIEMPO',
    'width' => '10%',
    'default' => true,
  ),
  'ORC_FECHAENT' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ORC_FECHAENT',
    'width' => '10%',
    'default' => true,
  ),
  'ORC_IMPORTET' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_ORC_IMPORTET',
    'width' => '10%',
    'default' => true,
  ),
  'ORC_TCMONEDA' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ORC_TCMONEDA',
    'width' => '10%',
    'default' => true,
  ),
  'ORC_ESTADO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'default' => true,
    'label' => 'LBL_ORC_ESTADO',
    'width' => '10%',
  ),
  'ORC_TIPO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ORC_TIPO',
    'width' => '10%',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'ORC_DENOMEMP' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ORC_DENOMEMP',
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
  'ORC_DFNIT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ORC_DFNIT',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'ORC_DIVISION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ORC_DIVISION',
    'width' => '10%',
    'default' => false,
  ),
  'ORC_RESPONSABLE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ORC_RESPONSABLE',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'ORC_TIPOO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'default' => false,
    'label' => 'LBL_ORC_TIPOO',
    'width' => '10%',
  ),
  'ORC_SOLICITADO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ORC_SOLICITADO',
    'id' => 'USER_ID1_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'ORC_DFNOMEMP' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ORC_DFNOMEMP',
    'width' => '10%',
    'default' => false,
  ),
);
?>
