<?php
$popupMeta = array (
    'moduleMain' => 'SCO_Productos',
    'varName' => 'SCO_Productos',
    'orderBy' => 'sco_productos.name',
    'whereClauses' => array (
  'name' => 'sco_productos.name',
  'pro_codaio' => 'sco_productos.pro_codaio',
  'pro_tipopro' => 'sco_productos.pro_tipopro',
  'pro_cantidad' => 'sco_productos.pro_cantidad',
  'pro_descuento' => 'sco_productos.pro_descuento',
  'pro_preciound' => 'sco_productos.pro_preciound',
  'sco_productos_sco_productoscompras_name' => 'sco_productos.sco_productos_sco_productoscompras_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'pro_codaio',
  5 => 'pro_tipopro',
  6 => 'pro_cantidad',
  7 => 'pro_descuento',
  8 => 'pro_preciound',
  9 => 'sco_productos_sco_productoscompras_name',
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
  'pro_codaio' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRO_CODAIO',
    'width' => '10%',
    'name' => 'pro_codaio',
  ),
  'pro_tipopro' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PRO_TIPOPRO',
    'width' => '10%',
    'name' => 'pro_tipopro',
  ),
  'pro_cantidad' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PRO_CANTIDAD',
    'width' => '10%',
    'name' => 'pro_cantidad',
  ),
  'pro_descuento' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRO_DESCUENTO',
    'width' => '10%',
    'name' => 'pro_descuento',
  ),
  'pro_preciound' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRO_PRECIOUND',
    'width' => '10%',
    'name' => 'pro_preciound',
  ),
  'sco_productos_sco_productoscompras_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_PRODUCTOS_SCO_PRODUCTOSCOMPRAS_FROM_SCO_PRODUCTOSCOMPRAS_TITLE',
    'id' => 'SCO_PRODUCTOS_SCO_PRODUCTOSCOMPRASSCO_PRODUCTOSCOMPRAS_IDA',
    'width' => '10%',
    'name' => 'sco_productos_sco_productoscompras_name',
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
    'name' => 'name',
  ),
  'SCO_PRODUCTOS_SCO_PRODUCTOSCOMPRAS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_PRODUCTOS_SCO_PRODUCTOSCOMPRAS_FROM_SCO_PRODUCTOSCOMPRAS_TITLE',
    'id' => 'SCO_PRODUCTOS_SCO_PRODUCTOSCOMPRASSCO_PRODUCTOSCOMPRAS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'sco_productos_sco_productoscompras_name',
  ),
  'PRO_CANTIDAD' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_PRO_CANTIDAD',
    'width' => '10%',
    'name' => 'pro_cantidad',
  ),
  'PRO_PRECIOUND' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRO_PRECIOUND',
    'width' => '10%',
    'default' => true,
    'name' => 'pro_preciound',
  ),
  'PRO_DESCUENTO' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_PRO_DESCUENTO',
    'width' => '10%',
    'name' => 'pro_descuento',
  ),
  'PRO_SUBTOTAL' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRO_SUBTOTAL',
    'width' => '10%',
    'default' => true,
    'name' => 'pro_subtotal',
  ),
),
);
