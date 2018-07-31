<?php
$module_name = 'SCO_Productos';
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
    'type' => 'varchar',
    'label' => 'LBL_PRO_DESCRIPCION',
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
  'PRO_CANTIDAD' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_PRO_CANTIDAD',
    'width' => '10%',
  ),
  'PRO_FECHAPREV' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PRO_FECHAPREV',
    'width' => '10%',
    'default' => true,
  ),
  'PRO_CANTIDADR' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_PRO_CANTIDADR',
    'width' => '10%',
  ),
  'PRO_CANTIDADT' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_PRO_CANTIDADT',
    'width' => '10%',
  ),
  'PRO_PRECIOUND' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRO_PRECIOUND',
    'width' => '10%',
    'default' => true,
  ),
  'PRO_DESCUENTO' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_PRO_DESCUENTO',
    'width' => '10%',
  ),
  'PRO_SUBTOTAL' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRO_SUBTOTAL',
    'width' => '10%',
    'default' => true,
  ),
  'PRO_PROCENTAJE' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRO_PROCENTAJE',
    'width' => '10%',
    'default' => false,
  ),
  'PRO_NOMPROYCO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRO_NOMPROYCO',
    'width' => '10%',
    'default' => false,
  ),
  'PRO_CODAIO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRO_CODAIO',
    'width' => '10%',
    'default' => false,
  ),
  'SCO_PROYECTOSCO_SCO_PRODUCTOS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_PROYECTOSCO_SCO_PRODUCTOS_FROM_SCO_PROYECTOSCO_TITLE',
    'id' => 'SCO_PROYECTOSCO_SCO_PRODUCTOSSCO_PROYECTOSCO_IDA',
    'width' => '10%',
    'default' => false,
  ),
);
?>
