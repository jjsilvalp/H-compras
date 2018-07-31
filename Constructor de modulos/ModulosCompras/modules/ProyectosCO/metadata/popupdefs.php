<?php
$popupMeta = array (
    'moduleMain' => 'SCO_ProyectosCO',
    'varName' => 'SCO_ProyectosCO',
    'orderBy' => 'sco_proyectosco.name',
    'whereClauses' => array (
  'name' => 'sco_proyectosco.name',
  'proyc_tipo' => 'sco_proyectosco.proyc_tipo',
  'proyc_codsap' => 'sco_proyectosco.proyc_codsap',
  'proyc_division' => 'sco_proyectosco.proyc_division',
  'proyc_nomproy' => 'sco_proyectosco.proyc_nomproy',
  'proyc_centcost' => 'sco_proyectosco.proyc_centcost',
  'proyc_cenben' => 'sco_proyectosco.proyc_cenben',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'proyc_tipo',
  5 => 'proyc_codsap',
  6 => 'proyc_division',
  7 => 'proyc_nomproy',
  8 => 'proyc_centcost',
  9 => 'proyc_cenben',
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
  'proyc_nomproy' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROYC_NOMPROY',
    'width' => '10%',
    'name' => 'proyc_nomproy',
  ),
  'proyc_tipo' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROYC_TIPO',
    'width' => '10%',
    'name' => 'proyc_tipo',
  ),
  'proyc_codsap' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROYC_CODSAP ',
    'width' => '10%',
    'name' => 'proyc_codsap',
  ),
  'proyc_division' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PROYC_DIVISION',
    'width' => '10%',
    'name' => 'proyc_division',
  ),
  'proyc_centcost' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROYC_CENTCOST',
    'width' => '10%',
    'name' => 'proyc_centcost',
  ),
  'proyc_cenben' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROYC_CENBEN',
    'width' => '10%',
    'name' => 'proyc_cenben',
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
  'PROYC_NOMPROY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROYC_NOMPROY',
    'width' => '10%',
    'default' => true,
  ),
  'PROYC_TIPO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROYC_TIPO',
    'width' => '10%',
    'default' => true,
    'name' => 'proyc_tipo',
  ),
  'PROYC_CODSAP' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROYC_CODSAP ',
    'width' => '10%',
    'default' => true,
    'name' => 'proyc_codsap',
  ),
  'PROYC_ESTADO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PROYC_ESTADO',
    'width' => '10%',
    'default' => true,
    'name' => 'proyc_estado',
  ),
  'PROYC_CENBEN' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROYC_CENBEN',
    'width' => '10%',
    'default' => true,
  ),
  'PROYC_CENTCOST' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROYC_CENTCOST',
    'width' => '10%',
    'default' => true,
  ),
  'PROYC_DIVISION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PROYC_DIVISION',
    'width' => '10%',
    'default' => true,
  ),
),
);
