<?php
$popupMeta = array (
    'moduleMain' => 'SCO_ProductosCotizados',
    'varName' => 'SCO_ProductosCotizados',
    'orderBy' => 'sco_productoscotizados.name',
    'whereClauses' => array (
  'name' => 'sco_productoscotizados.name',
),
    'searchInputs' => array (
  1 => 'name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
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
),
);
