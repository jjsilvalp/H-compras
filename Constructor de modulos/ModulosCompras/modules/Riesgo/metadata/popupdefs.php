<?php
$popupMeta = array (
    'moduleMain' => 'SCO_Riesgo',
    'varName' => 'SCO_Riesgo',
    'orderBy' => 'sco_riesgo.name',
    'whereClauses' => array (
  'name' => 'sco_riesgo.name',
  'rie_prop' => 'sco_riesgo.rie_prop',
  'rie_estado' => 'sco_riesgo.rie_estado',
  'rie_asignado' => 'sco_riesgo.rie_asignado',
  'rie_fechaven' => 'sco_riesgo.rie_fechaven',
  'rie_cat' => 'sco_riesgo.rie_cat',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'rie_prop',
  5 => 'rie_estado',
  6 => 'rie_asignado',
  7 => 'rie_fechaven',
  8 => 'rie_cat',
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
  'rie_prop' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_RIE_PROP',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'rie_prop',
  ),
  'rie_estado' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RIE_ESTADO',
    'width' => '10%',
    'name' => 'rie_estado',
  ),
  'rie_asignado' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_RIE_ASIGNADO',
    'id' => 'USER_ID1_C',
    'link' => true,
    'width' => '10%',
    'name' => 'rie_asignado',
  ),
  'rie_fechaven' => 
  array (
    'type' => 'date',
    'label' => 'LBL_RIE_FECHAVEN',
    'width' => '10%',
    'name' => 'rie_fechaven',
  ),
  'rie_cat' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RIE_CAT',
    'width' => '10%',
    'name' => 'rie_cat',
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
  'RIE_PROP' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_RIE_PROP',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'rie_prop',
  ),
  'RIE_ASIGNADO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_RIE_ASIGNADO',
    'id' => 'USER_ID1_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'rie_asignado',
  ),
  'RIE_CAT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RIE_CAT',
    'width' => '10%',
    'default' => true,
    'name' => 'rie_cat',
  ),
  'RIE_FECHAVEN' => 
  array (
    'type' => 'date',
    'label' => 'LBL_RIE_FECHAVEN',
    'width' => '10%',
    'default' => true,
    'name' => 'rie_fechaven',
  ),
),
);
