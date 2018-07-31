<?php
$popupMeta = array (
    'moduleMain' => 'SCO_OrdenCompra',
    'varName' => 'SCO_OrdenCompra',
    'orderBy' => 'sco_ordencompra.name',
    'whereClauses' => array (
  'name' => 'sco_ordencompra.name',
  'orc_fechaord' => 'sco_ordencompra.orc_fechaord',
  'orc_division' => 'sco_ordencompra.orc_division',
  'orc_procodaio' => 'sco_ordencompra.orc_procodaio',
  'orc_estado' => 'sco_ordencompra.orc_estado',
  'orc_depais' => 'sco_ordencompra.orc_depais',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'orc_fechaord',
  5 => 'orc_division',
  6 => 'orc_procodaio',
  7 => 'orc_estado',
  8 => 'orc_depais',
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
  'orc_fechaord' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ORC_FECHAORD',
    'width' => '10%',
    'name' => 'orc_fechaord',
  ),
  'orc_division' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ORC_DIVISION',
    'width' => '10%',
    'name' => 'orc_division',
  ),
  'orc_procodaio' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ORC_PROCODAIO',
    'width' => '10%',
    'name' => 'orc_procodaio',
  ),
  'orc_estado' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ORC_ESTADO',
    'width' => '10%',
    'name' => 'orc_estado',
  ),
  'orc_depais' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ORC_DEPAIS',
    'width' => '10%',
    'name' => 'orc_depais',
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
  'ORC_FECHAORD' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ORC_FECHAORD',
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
  'ORC_DIVISION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ORC_DIVISION',
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
  'ORC_DETELEFONO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ORC_DETELEFONO',
    'width' => '10%',
    'default' => true,
  ),
  'ORC_DEPAIS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ORC_DEPAIS',
    'width' => '10%',
    'default' => true,
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
),
);
