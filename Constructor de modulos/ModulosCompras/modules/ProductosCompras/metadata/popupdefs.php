<?php
$popupMeta = array (
    'moduleMain' => 'SCO_ProductosCompras',
    'varName' => 'SCO_ProductosCompras',
    'orderBy' => 'sco_productoscompras.name',
    'whereClauses' => array (
  'name' => 'sco_productoscompras.name',
  'proge_preciounid' => 'sco_productoscompras.proge_preciounid',
  'proge_tipopro' => 'sco_productoscompras.proge_tipopro',
  'proge_codaio' => 'sco_productoscompras.proge_codaio',
  'sco_proveedor_sco_productoscompras_name' => 'sco_productoscompras.sco_proveedor_sco_productoscompras_name',
  'proge_nompro' => 'sco_productoscompras.proge_nompro',
  'proge_descripcion' => 'sco_productoscompras.proge_descripcion',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'proge_preciounid',
  5 => 'proge_tipopro',
  6 => 'proge_codaio',
  7 => 'sco_proveedor_sco_productoscompras_name',
  8 => 'proge_nompro',
  9 => 'proge_descripcion',
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
  'proge_nompro' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROGE_NOMPRO',
    'width' => '10%',
    'name' => 'proge_nompro',
  ),
  'proge_preciounid' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PROGE_PRECIOUNID',
    'width' => '10%',
    'name' => 'proge_preciounid',
  ),
  'proge_codaio' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROGE_CODAIO',
    'width' => '10%',
    'name' => 'proge_codaio',
  ),
  'proge_descripcion' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_PROGE_DESCRIPCION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'proge_descripcion',
  ),
  'proge_tipopro' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROGE_TIPOPRO',
    'width' => '10%',
    'name' => 'proge_tipopro',
  ),
  'sco_proveedor_sco_productoscompras_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_PROVEEDOR_SCO_PRODUCTOSCOMPRAS_FROM_SCO_PROVEEDOR_TITLE',
    'id' => 'SCO_PROVEEDOR_SCO_PRODUCTOSCOMPRASSCO_PROVEEDOR_IDA',
    'width' => '10%',
    'name' => 'sco_proveedor_sco_productoscompras_name',
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
  'PROGE_NOMPRO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROGE_NOMPRO',
    'width' => '10%',
    'default' => true,
    'name' => 'proge_nompro',
  ),
  'PROGE_DESCRIPCION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_PROGE_DESCRIPCION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'proge_descripcion',
  ),
  'PROGE_UNIDAD' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROGE_UNIDAD',
    'width' => '10%',
    'default' => true,
    'name' => 'proge_unidad',
  ),
  'SCO_PROVEEDOR_SCO_PRODUCTOSCOMPRAS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_PROVEEDOR_SCO_PRODUCTOSCOMPRAS_FROM_SCO_PROVEEDOR_TITLE',
    'id' => 'SCO_PROVEEDOR_SCO_PRODUCTOSCOMPRASSCO_PROVEEDOR_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'sco_proveedor_sco_productoscompras_name',
  ),
  'PROGE_PRECIOUNID' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PROGE_PRECIOUNID',
    'width' => '10%',
    'default' => true,
    'name' => 'proge_preciounid',
  ),
  'PROGE_CODAIO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROGE_CODAIO',
    'width' => '10%',
    'default' => true,
    'name' => 'proge_codaio',
  ),
),
);
