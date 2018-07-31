<?php
$popupMeta = array (
    'moduleMain' => 'SCO_Aprobadores',
    'varName' => 'SCO_Aprobadores',
    'orderBy' => 'sco_aprobadores.name',
    'whereClauses' => array (
  'name' => 'sco_aprobadores.name',
  'apr_fecha' => 'sco_aprobadores.apr_fecha',
  'apr_titulo' => 'sco_aprobadores.apr_titulo',
  'sco_ordencompra_sco_aprobadores_name' => 'sco_aprobadores.sco_ordencompra_sco_aprobadores_name',
  'apr_casopm' => 'sco_aprobadores.apr_casopm',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'apr_fecha',
  5 => 'apr_titulo',
  6 => 'sco_ordencompra_sco_aprobadores_name',
  7 => 'apr_casopm',
),
    'searchdefs' => array (
  'apr_fecha' => 
  array (
    'type' => 'date',
    'label' => 'LBL_APR_FECHA',
    'width' => '10%',
    'name' => 'apr_fecha',
  ),
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'apr_titulo' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APR_TITULO',
    'width' => '10%',
    'name' => 'apr_titulo',
  ),
  'sco_ordencompra_sco_aprobadores_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_ORDENCOMPRA_SCO_APROBADORES_FROM_SCO_ORDENCOMPRA_TITLE',
    'id' => 'SCO_ORDENCOMPRA_SCO_APROBADORESSCO_ORDENCOMPRA_IDA',
    'width' => '10%',
    'name' => 'sco_ordencompra_sco_aprobadores_name',
  ),
  'apr_casopm' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APR_CASOPM',
    'width' => '10%',
    'name' => 'apr_casopm',
  ),
),
    'listviewdefs' => array (
  'APR_FECHA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_APR_FECHA',
    'width' => '10%',
    'default' => true,
  ),
  'APR_TITULO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APR_TITULO',
    'width' => '10%',
    'default' => true,
  ),
  'APR_APRUEBA' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'default' => true,
    'label' => 'LBL_APR_APRUEBA',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
),
);
