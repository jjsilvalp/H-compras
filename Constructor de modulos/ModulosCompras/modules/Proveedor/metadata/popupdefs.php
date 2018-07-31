<?php
$popupMeta = array (
    'moduleMain' => 'SCO_Proveedor',
    'varName' => 'SCO_Proveedor',
    'orderBy' => 'sco_proveedor.name',
    'whereClauses' => array (
  'name' => 'sco_proveedor.name',
  'prv_pais' => 'sco_proveedor.prv_pais',
  'prv_ciudad' => 'sco_proveedor.prv_ciudad',
  'prv_email' => 'sco_proveedor.prv_email',
  'prv_calificacion' => 'sco_proveedor.prv_calificacion',
  'prv_nit' => 'sco_proveedor.prv_nit',
  'prv_division' => 'sco_proveedor.prv_division',
  'prv_tel' => 'sco_proveedor.prv_tel',
  'prv_movil' => 'sco_proveedor.prv_movil',
  'prv_sitioweb' => 'sco_proveedor.prv_sitioweb',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'prv_pais',
  5 => 'prv_ciudad',
  6 => 'prv_email',
  8 => 'prv_calificacion',
  9 => 'prv_nit',
  10 => 'prv_division',
  11 => 'prv_tel',
  12 => 'prv_movil',
  13 => 'prv_sitioweb',
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
  'prv_nit' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PRV_NIT',
    'width' => '10%',
    'name' => 'prv_nit',
  ),
  'prv_ciudad' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRV_CIUDAD',
    'width' => '10%',
    'name' => 'prv_ciudad',
  ),
  'prv_pais' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRV_PAIS',
    'width' => '10%',
    'name' => 'prv_pais',
  ),
  'prv_email' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRV_EMAIL',
    'width' => '10%',
    'name' => 'prv_email',
  ),
  'prv_division' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PRV_DIVISION',
    'width' => '10%',
    'name' => 'prv_division',
  ),
  'prv_tel' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PRV_TEL',
    'width' => '10%',
    'name' => 'prv_tel',
  ),
  'prv_movil' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PRV_MOVIL',
    'width' => '10%',
    'name' => 'prv_movil',
  ),
  'prv_sitioweb' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRV_SITIOWEB',
    'width' => '10%',
    'name' => 'prv_sitioweb',
  ),
  'prv_calificacion' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PRV_CALIFICACION',
    'width' => '10%',
    'name' => 'prv_calificacion',
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
  'PRV_MONR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRV_MONR',
    'width' => '10%',
    'default' => true,
  ),
  'PRV_TEL' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PRV_TEL',
    'width' => '10%',
    'default' => true,
    'name' => 'prv_tel',
  ),
  'PRV_SITIOWEB' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRV_SITIOWEB',
    'width' => '10%',
    'default' => true,
    'name' => 'prv_sitioweb',
  ),
  'PRV_CIUDAD' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRV_CIUDAD',
    'width' => '10%',
    'default' => true,
    'name' => 'prv_ciudad',
  ),
  'PRV_PAIS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRV_PAIS',
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
  'PRV_CALIFICACION' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PRV_CALIFICACION',
    'width' => '10%',
    'default' => true,
    'name' => 'prv_calificacion',
  ),
  'PRV_ESTADO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PRV_ESTADO',
    'width' => '10%',
    'name' => 'prv_estado',
  ),
  'PRV_TIPO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PRV_TIPO',
    'width' => '10%',
  ),
),
);
