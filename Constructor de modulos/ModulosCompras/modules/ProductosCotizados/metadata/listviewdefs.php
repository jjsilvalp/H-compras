<?php
$module_name = 'SCO_ProductosCotizados';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PRO_DESCRIPCION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_PRO_DESCRIPCION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'PRO_CANTIDAD' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PRO_CANTIDAD',
    'width' => '10%',
    'default' => true,
  ),
  'PRO_PRECIOUNID' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRO_PRECIOUNID',
    'width' => '10%',
    'default' => true,
  ),
  'PRO_UNIDAD' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRO_UNIDAD',
    'width' => '10%',
    'default' => true,
  ),
  'PRO_DESCVAL' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRO_DESCVAL',
    'width' => '10%',
    'default' => true,
  ),
  'PRO_DESCPOR' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRO_DESCPOR',
    'width' => '10%',
    'default' => true,
  ),
  'PRO_SUBTOTAL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRO_SUBTOTAL',
    'width' => '10%',
    'default' => true,
  ),
  'PRO_CANTTRANS' => 
  array (
    'type' => 'float',
    'label' => 'LBL_PRO_CANTTRANS',
    'width' => '10%',
    'default' => true,
  ),
  'PRO_CANTRESIVIDA' => 
  array (
    'type' => 'float',
    'label' => 'LBL_PRO_CANTRESIVIDA',
    'width' => '10%',
    'default' => true,
  ),
  'PRO_SALDOS' => 
  array (
    'type' => 'float',
    'label' => 'LBL_PRO_SALDOS',
    'width' => '10%',
    'default' => true,
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
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'PRO_FECHA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PRO_FECHA',
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
